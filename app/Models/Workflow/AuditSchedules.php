<?php

namespace App\Models\Workflow;

use App\Models\Workflow\AuditData;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\FollowUpActionsAudit;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AuditSchedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'frequency', 
        'scope', 
        'duration', 
        'objectives', 
        'resources'
    ];

    public function auditData()
    {
        return $this->hasMany(AuditData::class, 'audit_schedule_id');
    }

    public function GetPrettyCreatedAttribute()
    {
        return date('d F Y', strtotime($this->created_at));
    }
}
