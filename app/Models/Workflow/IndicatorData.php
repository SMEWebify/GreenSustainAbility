<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndicatorData extends Model
{
    use HasFactory;

    protected $table = 'indicator_data';
    
    protected $fillable = [
        'indicator_type',
        'indicator_value',
        'measurement_unit',
        'measurement_datetime'
    ];
}
