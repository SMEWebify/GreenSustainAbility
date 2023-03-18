<?php

namespace App\Models\Workflow;

use App\Models\Workflow\AuditData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NonConformities extends Model
{
    use HasFactory;

    protected $fillable = ['audit_data_id', 'description', 'corrective_action', 'preventive_action', 'status'];
    
    public function auditData()
    {
        return $this->belongsTo(AuditData::class);
    }
}
