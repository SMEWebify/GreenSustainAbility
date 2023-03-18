<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentInformations extends Model
{
    use HasFactory;

    protected $table = 'incident_information';

    protected $fillable = [
        'date',
        'time',
        'location',
        'description',
        'material_type',
        'quantity'
    ];

    public function measuresTaken()
    {
        return $this->hasMany(MeasuresTaken::class, 'incident_id');
    }

    public function followUp()
    {
        return $this->hasMany(FollowUp::class, 'incident_id');
    }

    public function stakeholders()
    {
        return $this->hasMany(StakeholderInformation::class, 'incident_id');
    }

    public function documentation()
    {
        return $this->hasMany(Documentation::class, 'incident_id');
    }

    public function impactAssessment()
    {
        return $this->hasOne(ImpactAssessment::class, 'incident_id');
    }

    public function rootCauseAnalysis()
    {
        return $this->hasOne(RootCauseAnalysis::class, 'incident_id');
    }
}
