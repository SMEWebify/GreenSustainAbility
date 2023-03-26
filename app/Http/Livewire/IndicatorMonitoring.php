<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Workflow\Indicator;

class IndicatorMonitoring extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $indicator_type, $source_type, $source_name, $source_location, $measurement_unit;

    // Validation Rules
    protected $rules = [
        'indicator_type' =>'required',
        'source_type'=>'required',
        'source_name'=>'required',
        'source_location'=>'required',
        'measurement_unit'=>'required',
    ];
    
    public function render()
    {
        $indicators = Indicator::orderBy('id', 'desc')->paginate(10);

        return view('livewire.indicator-monitoring', [
            'indicators' => $indicators,
        ]);
    }

    public function storeIndicator(){

        $this->validate();
        // Create Line
        $indicatorCreated = Indicator::create([
            'indicator_type'=>$this->indicator_type, 
            'source_type'=>$this->source_type,
            'source_name'=>$this->source_name,
            'source_location'=>$this->source_location,
            'measurement_unit'=>$this->measurement_unit, 
        ]);

        return redirect()->route('indicator-monitoring-show', ['indicator' => $indicatorCreated->id])->with('success', 'Successfully created new indicator.');
    }
}
