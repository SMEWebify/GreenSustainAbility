<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanningAndTrackingReductions extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_type',
        'emission_source',
        'reduction_target',
        'reduction_measures',
        'reduction_results',
        'implementation_date',
        'notes',
    ];
}
