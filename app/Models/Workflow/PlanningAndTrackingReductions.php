<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanningAndTrackingReductions extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_inventorie_id',
        'reduction_target',
        'reduction_measures',
        'reduction_results',
        'date_of_implementation',
        'reduction_comment',
    ];
}
