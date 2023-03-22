<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IncidentInformations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentationRelated extends Model
{
    use HasFactory;

    protected $table = 'documentation_related';

    protected $fillable = [
        'incident_informations_id',
        'original_file_name',
        'name',
        'type',
        'size',
    ];

    public function incidentInformation()
    {
        return $this->belongsTo(IncidentInformations::class, 'incident_informations_id');
    }

    public function GetPrettySize()
    {
        return round($this->size / 1000 ,2) .' Ko';
    }

    public function GetPrettyCreatedAttribute()
    {
        return date('d F Y', strtotime($this->created_at));
    }
}
