<?php

namespace App\Models\Workflow;

use App\Models\Workflow\AuditSchedules;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnalysisAndReporting extends Model
{
    use HasFactory;

    protected $fillable = ['audit_schedules_id', 'report_date', 'report_type', 'analysis', 'recommendations'];
    
    public function auditSchedule()
    {
        return $this->belongsTo(AuditSchedules::class);
    }
}
