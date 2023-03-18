<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IncidentInformations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RootCauseAnalysis extends Model
{
    use HasFactory;

    protected $table = 'root_cause_analysis';

    protected $fillable = [
        'incident_id',
        'root_cause_analysis'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformations::class, 'incident_id');
    }
}
