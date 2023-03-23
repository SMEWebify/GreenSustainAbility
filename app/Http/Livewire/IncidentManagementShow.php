<?php

namespace App\Http\Livewire;

use App\Models\Workflow\DocumentationRelated;
use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Workflow\FollowUpActions;
use App\Models\Workflow\ImpactAssessment;
use App\Models\Workflow\IncidentInformations;
use App\Models\Workflow\MeasuresTaken;
use App\Models\Workflow\RootCauseAnalysis;
use App\Models\Workflow\StakeholderInformation;

class IncidentManagementShow extends Component
{
    use WithFileUploads;

    public $incidentInformation;

    //Incident Management detail
    public $idIncident;
    public  $date, $time, $location, $description, $material_type, $quantity, $statu;

    //Measures Taken to Manage the Incident
    public $action_taken, $teams_involved;
    //Follow-up of Corrective Actions
    public $corrective_action_description, $implementation_timetable;
    //Stakeholder Information
    public $name, $contact_details, $authorities_notified;
    //Documentation Related to the Incident
    public $original_file_name, $new_name_file, $type, $size;
    //Environmental Impact Assessment
    public $impact_assessment;
    //Root Cause Analysis
    public $root_cause_analysis;

    // Validation Rules
    protected $rules = [
        'date' =>'required',
        'time'=>'required',
        'location'=>'required',
        'description'=>'required',
        'material_type'=>'required',
        'quantity'=>'required',
    ];
    
    public function mount(IncidentInformations $incidentInformation)
    {
        $this->incidentInformation = $incidentInformation;
        $this->idIncident = $this->incidentInformation->id;
        $this->date = $this->incidentInformation->date;
        $this->time = $this->incidentInformation->time;
        $this->location = $this->incidentInformation->location;
        $this->description = $this->incidentInformation->description;
        $this->material_type = $this->incidentInformation->material_type;
        $this->quantity = $this->incidentInformation->quantity;
        $this->statu = $this->incidentInformation->statu;

    }

    public function render()
    {
        return view('livewire.incident-management-show', [
            'incidentInformation' => $this->incidentInformation,
        ]);
    }

    public function updateIncident()
    {
        // Validate request
        $this->validate();
        // Update line
        IncidentInformations::find($this->idIncident)->fill([
            'date'=>$this->date,
            'time'=>$this->time,
            'location'=>$this->location,
            'description'=>$this->description,
            'material_type'=>$this->material_type,
            'quantity'=>$this->quantity,
        ])->save();

        return redirect()->route('incident-management-show', ['incidentInformation' => $this->idIncident])->with('success', 'Successfully update incident');
    }

    public function newMeasure(){

        $validatedData = $this->validate([
            'action_taken' => 'required',
            'teams_involved' => 'required',
        ]);
 
        MeasuresTaken::create([
            'incident_informations_id'=>$this->idIncident, 
            'action_taken'=>$this->action_taken,
            'teams_involved'=>$this->teams_involved, 
        ]);

        return redirect()->route('incident-management-show', ['incidentInformation' => $this->idIncident])->with('success', 'New action add successfully');
    }

    public function storeCorrectiveActions(){

        $validatedData = $this->validate([
            'corrective_action_description' => 'required',
            'implementation_timetable' => 'required',
        ]);
 
        FollowUpActions::create([
            'incident_informations_id'=>$this->idIncident, 
            'corrective_action_description'=>$this->corrective_action_description,
            'implementation_timetable'=>$this->implementation_timetable, 
        ]);

        return redirect()->route('incident-management-show', ['incidentInformation' => $this->idIncident])->with('success', 'New follow up add successfully');
    }

    public function storeStakeholder(){

        $validatedData = $this->validate([
            'name' => 'required',
            'contact_details' => 'required',
            'authorities_notified' => 'required',
        ]);
 
        StakeholderInformation::create([
            'incident_informations_id'=>$this->idIncident, 
            'name'=>$this->name,
            'contact_details'=>$this->contact_details, 
            'authorities_notified'=>$this->authorities_notified, 
        ]);

        return redirect()->route('incident-management-show', ['incidentInformation' => $this->idIncident])->with('success', 'New stakeholder information add successfully');
    }
    
    public function storeDocument(){

        $validatedData = $this->validate([
            'original_file_name' =>  'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip'
        ]);

        $this->new_name_file = auth()->id() . '_' . time() . '.'. $this->original_file_name->extension();  
        $oringalFileName = $this->original_file_name->getClientOriginalName();
        $this->type = $this->original_file_name->getClientMimeType();
        $this->size = $this->original_file_name->getSize();
        $this->original_file_name->storePubliclyAs('incident-management', $this->new_name_file , 'public');

        DocumentationRelated::create([
            'incident_informations_id'=>$this->idIncident,
            'original_file_name'=>$oringalFileName, 
            'name'=>$this->new_name_file,
            'type'=>$this->type, 
            'size'=>$this->size,
        ]);

        return redirect()->route('incident-management-show', ['incidentInformation' => $this->idIncident])->with('success', 'New document add successfully');
    }

    public function storeImpactAssessment(){

        $validatedData = $this->validate([
            'impact_assessment' => 'required',
        ]);
 
        ImpactAssessment::create([
            'incident_informations_id'=>$this->idIncident, 
            'impact_assessment'=>$this->impact_assessment,
        ]);

        return redirect()->route('incident-management-show', ['incidentInformation' => $this->idIncident])->with('success', 'New impact assessment add successfully');
    }

    public function storeRootCauseAnalyses(){

        $validatedData = $this->validate([
            'root_cause_analysis' => 'required',
        ]);
 
        RootCauseAnalysis::create([
            'incident_informations_id'=>$this->idIncident, 
            'root_cause_analysis'=>$this->root_cause_analysis,
        ]);

        return redirect()->route('incident-management-show', ['incidentInformation' => $this->idIncident])->with('success', 'New root cause add successfully');
    }
    
    public function deleteMeasure($id){
            try{
                MeasuresTaken::find($id)->delete();
                $this->incidentInformation->refresh();
                session()->flash('success',"Line deleted Successfully !");
            }catch(\Exception $e){
                session()->flash('error',"Something goes wrong while deleting Line");
            }
    }

    public function deleteCorrectiveActions($id){
        try{
            FollowUpActions::find($id)->delete();
            $this->incidentInformation->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }

    public function deleteStakeholder($id){
        try{
            StakeholderInformation::find($id)->delete();
            $this->incidentInformation->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }
    
    public function deleteDocument($id){
        try{
            DocumentationRelated::find($id)->delete();
            $this->incidentInformation->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }
    
    public function deleteImpactAssessment($id){
        try{
            ImpactAssessment::find($id)->delete();
            $this->incidentInformation->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }
    
    public function deleteRootCauseAnalyses($id){
        try{
            RootCauseAnalysis::find($id)->delete();
            $this->incidentInformation->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }

    public function changeStatu($statuNumber){
        try{
            IncidentInformations::where('id',$this->idIncident)->update(['statu'=>$statuNumber]);
            $this->incidentInformation->refresh();
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong on update statu");
        }
    }
}
