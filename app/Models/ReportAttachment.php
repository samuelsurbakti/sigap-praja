<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReportAttachment extends Model
{
    use HasFactory, HasUuids, SoftDeletes, LogsActivity;

    protected $fillable = [
        'report_stage_id',
        'title',
        'filepath',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->useLogName('Mengelola Lampiran Laporan')
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $eventName) {
                $action = match($eventName) {
                    'created' => 'Menambah',
                    'updated' => 'Mengubah',
                    'deleted' => 'Menghapus',
                    default => $eventName
                };

                return "{$action} data lampiran laporan dengan judul [{$this->title}] pada laporan dengan nomor [{$this->stage->report->report_number}] pada tahap [{$this->stage->flow->name}]";
            })
            ->dontLogIfAttributesChangedOnly(['created_at', 'updated_at', 'deleted_at']);
    }

    public function stage()
    {
        return $this->belongsTo(ReportStage::class, 'report_stage_id');
    }
}
