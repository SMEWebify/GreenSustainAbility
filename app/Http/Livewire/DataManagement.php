<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Workflow\EmissionsInventories;

class DataManagement extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $emission_type, $emission_source, $emission_location, $emission_amount, $date_of_emission, $emission_comment;

    // Validation Rules
    protected $rules = [
        'emission_type' =>'required',
        'emission_source'=>'required',
        'emission_location'=>'required',
        'emission_amount'=>'required',
        'date_of_emission'=>'required',
    ];

    public function render()
    {
        $emissions = EmissionsInventories::orderBy('id', 'desc')->paginate(10);

        return view('livewire.data-management', [
            'emissions' => $emissions,
        ]);
    }

    public function storeEmission(){

        $this->validate();
        // Create Line
        $emissionCreated = EmissionsInventories::create([
            'emission_type'=>$this->emission_type, 
            'emission_source'=>$this->emission_source,
            'emission_location'=>$this->emission_location,
            'emission_amount'=>$this->emission_amount,
            'date_of_emission'=>$this->date_of_emission, 
            'emission_comment'=>$this->emission_comment, 
        ]);

        return redirect()->route('data-management-show', ['data' => $emissionCreated->id])->with('success', 'Successfully created new data.');
    }
}
