<?php

namespace App\Models\Workflow;

use App\Models\Workflow\MeasuresTaken;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\FollowUpActions;
use App\Models\Workflow\ImpactAssessment;
use App\Models\Workflow\RootCauseAnalysis;
use App\Models\Workflow\StakeholderInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->hasMany(FollowUpActions::class, 'incident_id');
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
