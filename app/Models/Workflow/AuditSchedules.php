<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditSchedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'frequency', 
        'scope', 
        'duration', 
        'objectives', 
        'resources'
    ];

}
