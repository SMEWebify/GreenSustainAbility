<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StakeholderInformation extends Model
{
    use HasFactory;

    protected $table = 'stakeholder_information';

    protected $fillable = [
        'incident_id',
        'name',
        'contact_details',
        'authorities_notified'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformation::class, 'incident_id');
    }
}
