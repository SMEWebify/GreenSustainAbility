<?php

namespace App\Http\Livewire;

use App\Models\Workflow\AuditData;
use App\Models\Workflow\AuditSchedules;
use Livewire\Component;

class AuditManagementShow extends Component
{
    public $audit;

    //Audit Management detail
    public $idAudit;
    public  $frequency, $scope, $duration, $objectives, $resources;

    //Audit Data
    public  $audit_schedule_id, $date, $auditor, $audit_type, $results, $findings, $recommendations;

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
        return view('livewire.audit-management-show', [
            'audit' => $this->audit,
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
            AuditData::find($id)->delete();
            $this->audit->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }
}
