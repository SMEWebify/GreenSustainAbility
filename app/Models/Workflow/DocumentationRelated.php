<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(IncidentInformation::class, 'incident_id');
    }
}
