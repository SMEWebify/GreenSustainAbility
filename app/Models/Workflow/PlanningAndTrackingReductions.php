<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\EmissionsInventories;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function EmissionsInventorie()
    {
        return $this->belongsTo(EmissionsInventories::class, 'emission_inventorie_id');
    }
}
