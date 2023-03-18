<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IncidentInformations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentationRelated extends Model
{
    use HasFactory;

    protected $table = 'documentation';

    protected $fillable = [
        'incident_id',
        'document_type',
        'file'
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformations::class, 'incident_id');
    }
}
