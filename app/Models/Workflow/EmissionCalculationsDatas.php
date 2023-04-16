<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\EmissionsInventories;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmissionCalculationsDatas extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_inventorie_id',
        'emission_calculation_method',
        'emission_calculation_result',
        'date_of_calculation',
        'emission_calculation_comment',
    ];

    public function EmissionsInventorie()
    {
        return $this->belongsTo(EmissionsInventories::class, 'emission_inventorie_id');
    }
}
