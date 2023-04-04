<?php

namespace App\Models\Workflow;

use App\Models\Workflow\AuditData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FollowUpActionsAudit extends Model
{
    use HasFactory;

    protected $fillable = ['audit_data_id', 'action_description', 'responsible_party', 'due_date', 'completion_date', 'statuss'];
    
    public function auditData()
    {
        return $this->belongsTo(AuditData::class, 'audit_data_id');
    }

    public function GetPrettyCompletionDate()
    {
        if (empty($this->completion_date)) return "<span class=\"badge bg-gradient-warning\">action not completed</span>";
        else return "<span class=\"badge bg-gradient-success\">". $this->completion_date ."</span>";
    }

    public function GetPrettystatu()
    {
        if ($this->status == 1) return "<span class=\"badge bg-gradient-info\">Open</span>";
        else if ($this->status == 2) return "<span class=\"badge bg-gradient-primary\">In Progress</span>";
        else if ($this->status == 3) return "<span class=\"badge bg-gradient-danger\">Canceled</span>";
        else if ($this->status == 4) return "<span class=\"badge bg-gradient-success\">Ended</span>";
        else if ($this->status == 5) return "<span class=\"badge bg-gradient-warning\">Pending</span>";
        else return "<span class=\"badge bg-gradient-dark\">Closed</span>";
    }
}
