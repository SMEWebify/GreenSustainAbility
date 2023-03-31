<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Workflow\AuditSchedules;

class AuditManagement extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $frequency, $scope, $duration, $objectives, $resources;
    
        // Validation Rules
        protected $rules = [
            'frequency' =>'required',
            'scope'=>'required',
            'duration'=>'required',
            'objectives'=>'required',
            'resources'=>'required',
        ];

    public function render()
    {
        $AuditSchedules = AuditSchedules::orderBy('id', 'desc')->paginate(10);

        return view('livewire.audit-management', [
            'AuditSchedules' => $AuditSchedules,
        ]);
    }

    public function storeAudit(){

        $this->validate();
        // Create Line
        $AuditCreated = AuditSchedules::create([
            'frequency'=>$this->frequency, 
            'scope'=>$this->scope,
            'duration'=>$this->duration,
            'objectives'=>$this->objectives,
            'resources'=>$this->resources, 
        ]);

        return redirect()->route('audit-management-show', ['audit' => $AuditCreated->id])->with('success', 'Successfully created new audit.');
    }
}
