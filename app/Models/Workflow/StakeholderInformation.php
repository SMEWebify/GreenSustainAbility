<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IncidentInformations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StakeholderInformation extends Model
{
    use HasFactory;

    protected $table = 'stakeholder_information';

    protected $fillable = [
        'incident_informations_id',
        'name',
        'contact_details',
        'authorities_notified'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformations::class, 'incident_informations_id');
    }
}
