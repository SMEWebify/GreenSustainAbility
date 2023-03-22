<?php

namespace App\Models\Workflow;

use Spatie\Activitylog\LogOptions;
use App\Models\Workflow\MeasuresTaken;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\FollowUpActions;
use Illuminate\Notifications\Notifiable;
use App\Models\Workflow\ImpactAssessment;
use App\Models\Workflow\RootCauseAnalysis;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Workflow\DocumentationRelated;
use App\Models\Workflow\StakeholderInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IncidentInformations extends Model
{
    use HasFactory, LogsActivity, Notifiable;

    protected $table = 'incident_informations';

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
        return $this->hasMany(MeasuresTaken::class);
    }

    public function followUp()
    {
        return $this->hasMany(FollowUpActions::class);
    }

    public function stakeholders()
    {
        return $this->hasMany(StakeholderInformation::class);
    }

    public function documentation()
    {
        return $this->hasMany(DocumentationRelated::class);
    }

    public function impactAssessment()
    {
        return $this->hasOne(ImpactAssessment::class);
    }

    public function rootCauseAnalysis()
    {
        return $this->hasOne(RootCauseAnalysis::class);
    }

    public function GetPrettyCreatedAttribute()
    {
        return date('d F Y', strtotime($this->created_at));
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['date','time', 'location', 'description']);
        // Chain fluent methods for configuration options
    }
}
