<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\RegulatoryCompliance;
use App\Models\Workflow\EmissionCalculationsDatas;
use App\Models\Workflow\PlanningAndTrackingReductions;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmissionsInventories extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_type',
        'emission_source',
        'emission_location',
        'emission_amount',
        'date_of_emission',
        'emission_comment',
    ];

    public function EmissionCalculationsDatas()
    {
        return $this->hasMany(EmissionCalculationsDatas::class, 'emission_inventorie_id');
    }

    public function PlanningandTrackingReductions()
    {
        return $this->hasMany(PlanningAndTrackingReductions::class, 'emission_inventorie_id');
    }

    public function RegulatoryCompliances()
    {
        return $this->hasMany(RegulatoryCompliance::class, 'emission_inventorie_id');
    }
}
