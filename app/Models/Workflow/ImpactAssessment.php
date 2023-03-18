<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(IncidentInformation::class, 'incident_id');
    }
}
