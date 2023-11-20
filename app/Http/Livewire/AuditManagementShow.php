<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Workflow\AuditData;
use App\Models\Workflow\AuditSchedules;
use App\Models\Workflow\FollowUpActionsAudit;
use App\Models\Workflow\NonConformities;

class AuditManagementShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $audit;

    //Audit Management detail
    public $idAudit;
    public  $frequency, $scope, $duration, $objectives, $resources;

    //Audit Data
    public  $audit_schedule_id, $date, $auditor, $audit_type, $results, $findings, $recommendations;
    //Follow Up Actions Audit
    public  $action_description, $responsible_party, $due_date, $completion_date, $status;
    //Non Conformities
    public  $non_conformity_description, $corrective_actions, $preventive_actions, $is_closed;

    // Validation Rules
    protected $rules = [
        'frequency' =>'required',
        'scope'=>'required',
        'duration'=>'required',
        'objectives'=>'required',
        'resources'=>'required',
    ];

    public function mount(AuditSchedules $audit)
    {
        $this->audit = $audit;
        $this->idAudit = $this->audit->id;
        $this->frequency = $this->audit->frequency;
        $this->scope = $this->audit->scope;
        $this->duration = $this->audit->duration;
        $this->objectives = $this->audit->objectives;
        $this->resources = $this->audit->resources;
    }

    public function render()
    {
        $auditDatas = $this->audit->auditData();
        return view('livewire.audit-management-show', [
            'audit' => $this->audit,
            'auditDatas' => $auditDatas->paginate(1),
        ]);
    }

    public function updateAudit()
    {
        // Validate request
        $this->validate();
        // Update line
        AuditSchedules::find($this->idAudit)->fill([
            'frequency'=>$this->frequency,
            'scope'=>$this->scope,
            'duration'=>$this->duration,
            'objectives'=>$this->objectives,
            'resources'=>$this->resources,
        ])->save();

        return redirect()->route('audit-management-show', ['audit' => $this->idAudit])->with('success', 'Successfully update audit');
    }

    public function storeData(){

        $validatedData = $this->validate([
            'date' => 'required',
            'auditor' => 'required',
            'audit_type' => 'required',
            'results' => 'required',
            'findings' => 'required',
            'recommendations' => 'required',
        ]);
 
        AuditData::create([
            'audit_schedule_id'=>$this->idAudit, 
            'date'=>$this->date,
            'auditor'=>$this->auditor, 
            'audit_type'=>$this->audit_type, 
            'results'=>$this->results,
            'findings'=>$this->findings, 
            'recommendations'=>$this->recommendations, 
        ]);

        return redirect()->route('audit-management-show', ['audit' => $this->idAudit])->with('success', 'New data added successfully');
    }

    public function deleteData($id){
        try{
            FollowUpActionsAudit::where('audit_data_id', $id)->delete();
            NonConformities::where('audit_data_id', $id)->delete();
            AuditData::find($id)->delete();
            //FollowUpActionsAudit
            $this->audit->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }

    public function storeAction($idData){

        dd('v');
        $validatedData = $this->validate([
            'action_description' => 'required',
            'responsible_party' => 'required',
            'due_date' => 'required',
        ]);
 
        FollowUpActionsAudit::create([
            'audit_data_id'=>$idData, 
            'action_description'=>$this->action_description,
            'responsible_party'=>$this->responsible_party, 
            'due_date'=>$this->due_date,
        ]);

        $this->audit->refresh();
        session()->flash('success',"New follow up add successfully !");
    }

    public function storeNonConformities($idData){

        $validatedData = $this->validate([
            'non_conformity_description' => 'required',
            'corrective_actions' => 'required',
            'preventive_actions' => 'required',
        ]);
 
        NonConformities::create([
            'audit_data_id'=>$idData, 
            'non_conformity_description'=>$this->non_conformity_description,
            'corrective_actions'=>$this->corrective_actions, 
            'preventive_actions'=>$this->preventive_actions,
        ]);
        $this->audit->refresh();
        session()->flash('success',"New non conformities add successfully !");
    }

    public function deleteAction($id){
        try{
            FollowUpActionsAudit::find($id)->delete();
            //FollowUpActionsAudit
            $this->audit->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }

    public function deleteNonConformities($id){
        try{
            NonConformities::find($id)->delete();
            //FollowUpActionsAudit
            $this->audit->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }

    public function changeStatu($idAction, $statuNumber){
        try{
            FollowUpActionsAudit::where('id',$idAction)->update(['status'=>$statuNumber]);
            $this->audit->refresh();
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong on update statu");
        }
    }
}
