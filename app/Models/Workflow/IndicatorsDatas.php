<?php

namespace App\Models\Workflow;

use App\Models\Workflow\Indicator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IndicatorsDatas extends Model
{
    use HasFactory;

    protected $fillable = [
        'indicator_id', 
        'indicator_value', 
        'measurement_datetime'
    ];

    public function indicator()
    {
        return $this->belongsTo(Indicator::class, 'indicator_id');
    }
}
