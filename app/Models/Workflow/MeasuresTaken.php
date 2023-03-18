<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IncidentInformations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeasuresTaken extends Model
{
    use HasFactory;

    protected $table = 'measures_taken';

    protected $fillable = [
        'incident_id',
        'action_taken',
        'teams_involved'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformations::class, 'incident_id');
    }
}
