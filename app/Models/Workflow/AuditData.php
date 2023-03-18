<?php

namespace App\Models\Workflow;

use App\Models\Workflow\AuditSchedules;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AuditData extends Model
{
    use HasFactory;

    protected $fillable = ['audit_schedules_id', 'results', 'findings', 'recommendations'];
    
    public function auditSchedule()
    {
        return $this->belongsTo(AuditSchedules::class);
    }
}
