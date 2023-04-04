<?php

namespace App\Models\Workflow;

use App\Models\Workflow\AuditData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NonConformities extends Model
{
    use HasFactory;

    protected $fillable = ['audit_data_id', 'non_conformity_description', 'corrective_actions', 'preventive_actions', 'is_closed'];
    
    public function auditData()
    {
        return $this->belongsTo(AuditData::class, 'audit_data_id');
    }

    public function GetPrettystatu()
    {
        if ($this->is_closed == 0) return "<span class=\"badge bg-gradient-info\">No</span>";
        else return "<span class=\"badge bg-gradient-success\">Yes</span>";
    }
}
