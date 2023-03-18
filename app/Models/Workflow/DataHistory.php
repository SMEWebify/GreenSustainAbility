<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHistory extends Model
{
    use HasFactory;

    protected $table = 'data_history';
    
    protected $fillable = [
        'indicator_type',
        'indicator_value',
        'measurement_unit',
        'measurement_datetime'
    ];

}
