<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUpActions extends Model
{
    use HasFactory;

    protected $table = 'follow_up';

    protected $fillable = [
        'incident_id',
        'corrective_action_description',
        'implementation_timetable'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformation::class, 'incident_id');
    }
}
