<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlowSla extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'report_flow_id',
        'priority_id',
        'sla_minutes',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->useLogName('Mengelola Alur SLA')
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $eventName) {
                $action = match($eventName) {
                    'created' => 'Menambah',
                    'updated' => 'Mengubah',
                    'deleted' => 'Menghapus',
                    default => $eventName
                };

                return "{$action} data alur SLA dengan alur laporan [{$this->flow->name}] dan prioritas [{$this->priority->name}]";
            })
            ->dontLogIfAttributesChangedOnly(['created_at', 'updated_at', 'deleted_at']);
    }

    public function flow()
    {
        return $this->belongsTo(ReportFlow::class, 'report_flow_id');
    }

    public function priority()
    {
        return $this->belongsTo(ReportPriority::class, 'priority_id');
    }
}
