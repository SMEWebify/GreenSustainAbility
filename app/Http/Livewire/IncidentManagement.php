<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Workflow\IncidentInformations;

class IncidentManagement extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $date, $time, $location, $description, $material_type, $quantity, $unit;

    // Validation Rules
    protected $rules = [
        'date' =>'required',
        'time'=>'required',
        'location'=>'required',
        'description'=>'required',
        'material_type'=>'required',
        'quantity'=>'required',
        'unit'=>'required',
    ];

    public function render()
    {
        $incidents = IncidentInformations::orderBy('date', 'desc')->paginate(10);
        return view('livewire.incident-management', [
            'incidents' => $incidents,
        ]);
    }

    public function storeIncident(){

        $this->validate();
        // Create Line
        $IncidentInformationsCreated = IncidentInformations::create([
            'date'=>$this->date, 
            'time'=>$this->time,
            'location'=>$this->location,
            'description'=>$this->description,
            'material_type'=>$this->material_type, 
            'quantity'=>$this->quantity, 
            'unit'=>$this->unit, 
        ]);

        return redirect()->route('incident-management-show', ['incidentInformation' => $IncidentInformationsCreated->id])->with('success', 'Successfully created new incident');
    }

 
}
