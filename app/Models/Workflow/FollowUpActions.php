<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IncidentInformations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FollowUpActions extends Model
{
    use HasFactory;

    protected $table = 'follow_up_actions';

    protected $fillable = [
        'incident_informations_id',
        'corrective_action_description',
        'implementation_timetable'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformations::class, 'incident_informations_id');
    }
}
