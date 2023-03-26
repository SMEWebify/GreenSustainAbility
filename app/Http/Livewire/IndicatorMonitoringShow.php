<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Workflow\Indicator;

class IndicatorMonitoringShow extends Component
{
    public $indicator;

    //Indicator Monitoring detail
    public $idIndicator;
    public  $indicator_type, $source_type, $source_name, $source_location, $measurement_unit;


    // Validation Rules
    protected $rules = [
        'indicator_type', 
        'source_type', 
        'source_name', 
        'source_location', 
        'measurement_unit'
    ];

    public function mount(Indicator $indicator)
    {
        $this->indicator = $indicator;
        $this->idIndicator = $this->indicator->id;
        $this->indicator_type = $this->indicator->indicator_type;
        $this->source_type = $this->indicator->source_type;
        $this->source_name = $this->indicator->source_name;
        $this->source_location = $this->indicator->source_location;
        $this->measurement_unit = $this->indicator->measurement_unit;

    }

    public function render()
    {
        return view('livewire.indicator-monitoring-show', [
            'indicator' => $this->indicator,
        ]);
    }
}
