<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Workflow\EmissionsInventories;
use App\Models\Workflow\RegulatoryCompliance;
use App\Models\Workflow\EmissionCalculationsDatas;
use App\Models\Workflow\PlanningAndTrackingReductions;

class DataManagementShow extends Component
{
    public $data;

    //Emission Management detail
    public $idEmission;
    public $emission_type, $emission_source, $emission_location, $emission_amount, $date_of_emission, $emission_comment;

    //Emission Calculations
    public $emission_calculation_method, $emission_calculation_result, $date_of_calculation, $emission_calculation_comment;
    
    //Planning and Tracking Reductions
    public $reduction_target, $reduction_measures, $reduction_results, $date_of_implementation, $reduction_comment;

    //Regulatory Compliance
    public $regulatory_requirement, $compliance_status, $verification_date, $regulatory_comment;

    // Validation Rules
    protected $rules = [
        'emission_type' =>'required',
        'emission_source'=>'required',
        'emission_location'=>'required',
        'emission_amount'=>'required',
        'date_of_emission'=>'required',
    ];

    public function mount(EmissionsInventories $data)
    {
        $this->data = $data;
        $this->idEmission = $this->data->id;
        $this->emission_type = $this->data->emission_type;
        $this->emission_source = $this->data->emission_source;
        $this->emission_location = $this->data->emission_location;
        $this->emission_amount = $this->data->emission_amount;
        $this->date_of_emission = $this->data->date_of_emission;
        $this->emission_comment = $this->data->emission_comment;

    }

    public function render()
    {
        return view('livewire.data-management-show', [
            'data' => $this->data,
        ]);
    }

    public function updateData()
    {
        // Validate request
        $this->validate();
        // Update line
        EmissionsInventories::find($this->idEmission)->fill([
            'emission_type'=>$this->emission_type,
            'emission_source'=>$this->emission_source,
            'emission_location'=>$this->emission_location,
            'emission_amount'=>$this->emission_amount,
            'date_of_emission'=>$this->date_of_emission,
            'emission_comment'=>$this->emission_comment,
        ])->save();

        return redirect()->route('data-management-show', ['data' => $this->idEmission])->with('success', 'Successfully update Data');
    }

    public function storeEmissionCalculations()
    {

        $validatedData = $this->validate([
            'emission_calculation_method' => 'required',
            'emission_calculation_result' => 'required',
            'date_of_calculation' => 'required',
        ]);
 
        EmissionCalculationsDatas::create([
            'emission_inventorie_id'=>$this->idEmission, 
            'emission_calculation_method'=>$this->emission_calculation_method,
            'emission_calculation_result'=>$this->emission_calculation_result, 
            'date_of_calculation'=>$this->date_of_calculation, 
            'emission_calculation_comment'=>$this->emission_calculation_comment,
        ]);

        return redirect()->route('data-management-show', ['data' => $this->idEmission])->with('success', 'New emission calculation added successfully');
    }

    public function deleteEmissionCalculations($id){
        try{
            EmissionCalculationsDatas::find($id)->delete();
            $this->data->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }

    public function storePlanningandTrackingReduction()
    {

        $validatedData = $this->validate([
            'reduction_target' => 'required',
            'reduction_measures' => 'required',
            'reduction_results' => 'required',
            'date_of_implementation' => 'required',
        ]);
 
        PlanningAndTrackingReductions::create([
            'emission_inventorie_id'=>$this->idEmission, 
            'reduction_target'=>$this->reduction_target,
            'reduction_measures'=>$this->reduction_measures, 
            'reduction_results'=>$this->reduction_results, 
            'date_of_implementation'=>$this->date_of_implementation, 
            'reduction_comment'=>$this->reduction_comment,
        ]);

        return redirect()->route('data-management-show', ['data' => $this->idEmission])->with('success', 'New planning and tracking reductions added successfully');
    }

    public function deletePlanningandTrackingReduction($id){
        try{
            PlanningAndTrackingReductions::find($id)->delete();
            $this->data->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }

    public function storeRegulatoryCompliance()
    {
        $validatedData = $this->validate([
            'regulatory_requirement' => 'required',
            'compliance_status' => 'required',
            'verification_date' => 'required',
        ]);
 
        RegulatoryCompliance::create([
            'emission_inventorie_id'=>$this->idEmission, 
            'regulatory_requirement'=>$this->regulatory_requirement,
            'compliance_status'=>$this->compliance_status, 
            'verification_date'=>$this->verification_date, 
            'regulatory_comment'=>$this->regulatory_comment, 
        ]);

        return redirect()->route('data-management-show', ['data' => $this->idEmission])->with('success', 'New regulatory compliance added successfully');
    }

    public function deleteRegulatoryCompliance($id){
        try{
            RegulatoryCompliance::find($id)->delete();
            $this->data->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }
}
