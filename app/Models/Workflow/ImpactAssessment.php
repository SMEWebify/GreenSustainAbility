<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IncidentInformations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImpactAssessment extends Model
{
    use HasFactory;

    protected $table = 'impact_assessments';

    protected $fillable = [
        'incident_informations_id',
        'impact_assessment'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformations::class, 'incident_informations_id');
    }
}
