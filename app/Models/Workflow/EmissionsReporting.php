<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionsReporting extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_type',
        'emission_source',
        'emission_amount',
        'emission_date',
        'time_period',
        'emissions_trend',
        'notes',
    ];
}
