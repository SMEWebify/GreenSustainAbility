<?php

namespace App\Models\Workflow;

use App\Models\Workflow\AuditData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FollowUpActionsAudit extends Model
{
    use HasFactory;

    protected $fillable = ['audit_data_id', 'action_description', 'responsible_party', 'due_date', 'completion_date', 'status'];
    
    public function auditData()
    {
        return $this->belongsTo(AuditData::class);
    }
}
