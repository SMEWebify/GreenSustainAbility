<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IndicatorsDatas;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Indicator extends Model
{
    use HasFactory;

    protected $fillable = [
        'indicator_type', 
        'source_type', 
        'source_name', 
        'source_location', 
        'measurement_unit'
    ];


    public function data_history()
    {
        return $this->hasMany(IndicatorsDatas::class, 'indicator_type_id');
    }
}
