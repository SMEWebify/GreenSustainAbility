<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionCalculationsDatas extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_type',
        'emission_source',
        'calculation_method',
        'calculation_result',
        'calculation_date',
        'notes',
    ];
}
