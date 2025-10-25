<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReportStage extends Model
{
    use HasFactory, HasUuids, SoftDeletes, LogsActivity;

    protected $fillable = [
        'report_id',
        'report_flow_id',
        'previous_stage_id',
        'assigned_to',
        'status',
        'started_at',
        'completed_at',
        'deadline_at',
        'sla_minutes',
        'sla_breached',
        'notes',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
        'deadline_at' => 'datetime',
        'sla_breached' => 'boolean',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->useLogName('Mengelola Tahap Laporan')
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $eventName) {
                $action = match($eventName) {
                    'created' => 'Menambah',
                    'updated' => 'Mengubah',
                    'deleted' => 'Menghapus',
                    default => $eventName
                };

                return "{$action} data tahap laporan dengan nomor laporan [{$this->report->report_number}] dan alur laporan [{$this->flow->name}]";
            })
            ->dontLogIfAttributesChangedOnly(['created_at', 'updated_at', 'deleted_at']);
    }

    public function report()
    {
        return $this->belongsTo(Report::class, 'report_id');
    }

    public function flow()
    {
        return $this->belongsTo(ReportFlow::class, 'report_flow_id');
    }

    public function attachments()
    {
        return $this->hasMany(ReportAttachment::class, 'report_stage_id');
    }

    public function previousStage()
    {
        return $this->belongsTo(ReportStage::class, 'previous_stage_id');
    }

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
