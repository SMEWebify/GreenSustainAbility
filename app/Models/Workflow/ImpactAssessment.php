<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IncidentInformations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImpactAssessment extends Model
{
    use HasFactory;

    protected $table = 'impact_assessment';

    protected $fillable = [
        'incident_id',
        'impact_assessment'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformations::class, 'incident_id');
    }
}
