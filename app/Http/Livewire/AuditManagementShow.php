<?php

namespace App\Http\Livewire;

use App\Models\Workflow\AuditSchedules;
use Livewire\Component;

class AuditManagementShow extends Component
{
    public $audit;

    //Audit Management detail
    public $idAudit;
    public  $frequency, $scope, $duration, $objectives, $resources;


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
}
