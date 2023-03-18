<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(IncidentInformation::class, 'incident_id');
    }
}
