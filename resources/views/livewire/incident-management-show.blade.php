<div class="main-content">
    @include('includes.alert-result')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Incident Management detail') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-info btn-block mb-3" data-bs-toggle="modal" data-bs-target="#UpdateIncident">
                                Edit
                            </button>
                        
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="UpdateIncident" tabindex="-1" role="dialog" aria-labelledby="UpdateIncident" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Update Incident Information') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                            
                                                <div class="form-group row{{ $errors->has('date') ? ' has-error' : '' }}">
                                                    <label for="date" class="col-md-4 control-label">{{ __('Date') }}</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="date" type="date" class="form-control" name="date" wire:model="date" required autofocus>
                                                        @error('date') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row{{ $errors->has('time') ? ' has-error' : '' }}">
                                                    <label for="time" class="col-md-4 control-label">{{ __('Time') }}</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="time" type="time" class="form-control" name="time" wire:model="time" required>
                                                        @error('time') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row{{ $errors->has('location') ? ' has-error' : '' }}">
                                                    <label for="location" class="col-md-4 control-label">{{ __('Location') }}</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="location" type="text" class="form-control" name="location" wire:model="location" required>
                                                        @error('location') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row{{ $errors->has('description') ? ' has-error' : '' }}">
                                                    <label for="description" class="col-md-4 control-label">{{ __('Description') }}</label>
                            
                                                    <div class="col-md-6">
                                                        <textarea id="description" class="form-control" name="description" wire:model="description" required></textarea>
                                                        @error('description') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row{{ $errors->has('material_type') ? ' has-error' : '' }}">
                                                    <label for="material_type"  class="col-md-4 control-label">{{ __('Material Type') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="material_type" type="text" class="form-control{{ $errors->has('material_type') ? ' is-invalid' : '' }}" name="material_type" wire:model="material_type" required autofocus>
                                                        @error('material_type') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                                    <label for="quantity"  class="col-md-4 control-label">{{ __('Quantity') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="quantity" type="number" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" wire:model="quantity" required>
                                                        @error('quantity') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="updateIncident()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <ul>
                                <li><strong>{{ __('Date') }} :</strong> {{ $incidentInformation->date }}</li>
                                <li><strong>{{ __('Time') }} :</strong> {{ $incidentInformation->time }}</li>
                                <li><strong>{{ __('Location') }} :</strong> {{ $incidentInformation->location }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <ul>
                                <li><strong>{{ __('Description') }} :</strong> {{ $incidentInformation->description }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <ul>
                                <li><strong>{{ __('Material Type') }} :</strong> {{ $incidentInformation->material_type }}</li>
                                <li><strong>{{ __('Quantity') }} :</strong> {{ $incidentInformation->quantity }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row ">
        <div class="col-12 mt-4">
            <div class="arrow-steps clearfix">
                <div class="step {{ $incidentInformation->statu == 1 ? 'current' : '' }} {{ $incidentInformation->statu <= 1 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu(1)" >Open</a></span> </div>
                <div class="step {{ $incidentInformation->statu == 2 ? 'current' : '' }} {{ $incidentInformation->statu <= 2 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu(2)">In process</a></span> </div>
                <div class="step {{ $incidentInformation->statu == 3 ? 'current' : '' }} {{ $incidentInformation->statu <= 3 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu(3)">Corrective Actions</a></span> </div>
                <div class="step {{ $incidentInformation->statu == 4 ? 'current' : '' }} {{ $incidentInformation->statu <= 4 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu(4)">Resolved</a><span> </div>
                <div class="step {{ $incidentInformation->statu == 5 ? 'current' : '' }} {{ $incidentInformation->statu <= 5 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu(5)">Pending</a><span> </div>
                <div class="step {{ $incidentInformation->statu == 6 ? 'current' : '' }} {{ $incidentInformation->statu <= 6 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu(6)">Closed</a><span> </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Measures Taken to Manage the Incident') }}</h6>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NewMeasure">
                                {{ __('Add Measure') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewMeasure" tabindex="-1" role="dialog" aria-labelledby="NewMeasure" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('AddMeasure') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('action_taken') ? ' has-error' : '' }}">
                                                    <label for="action_taken" class="col-md-4 control-label">{{ __('Taken actions') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="action_taken" type="text" class="form-control" name="action_taken" wire:model="action_taken" required autofocus>
                                                        @error('action_taken') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('teams_involved') ? ' has-error' : '' }}">
                                                    <label for="teams_involved" class="col-md-4 control-label">{{ __('Teams involved') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="teams_involved" type="text" class="form-control" name="teams_involved" wire:model="teams_involved" required autofocus>
                                                        @error('teams_involved') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="newMeasure()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul>
                        @forelse($incidentInformation->measuresTaken as $measure)
                        <li>{{ $measure->action_taken }} ({{ $measure->teams_involved }}) - <a href="#" wire:click="deleteMeasure({{ $measure->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></li>
                        @empty
                        <li>{{ __('No entry') }}</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Follow-up of Corrective Actions') }}</h6>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#CorrectiveActions">
                                {{ __('New Corrective Actions') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="CorrectiveActions" tabindex="-1" role="dialog" aria-labelledby="CorrectiveActions" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Corrective Actions') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('corrective_action_description') ? ' has-error' : '' }}">
                                                    <label for="corrective_action_description" class="col-md-4 control-label">{{ __('Description') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="corrective_action_description" type="text" class="form-control" name="corrective_action_description" wire:model="corrective_action_description" required autofocus>
                                                        @error('corrective_action_description') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('implementation_timetable') ? ' has-error' : '' }}">
                                                    <label for="implementation_timetable" class="col-md-4 control-label">{{ __('Implementation timetable') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="implementation_timetable" type="datetime-local" class="form-control" name="implementation_timetable" wire:model="implementation_timetable" required autofocus>
                                                        @error('implementation_timetable') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeCorrectiveActions()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul>
                        @forelse($incidentInformation->followUp as $correctiveAction)
                        <li>{{ $correctiveAction->corrective_action_description }} ({{ $correctiveAction->implementation_timetable }}) - <a href="#" wire:click="deleteCorrectiveActions({{ $correctiveAction->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></li>
                        @empty
                        <li>{{ __('No entry') }}</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Stakeholder Information') }}</h6>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#Stakeholder">
                                {{ __('Add Stakeholder') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="Stakeholder" tabindex="-1" role="dialog" aria-labelledby="Stakeholder" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Stakeholder') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="name" class="col-md-4 control-label">{{ __('Name') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control" name="name" wire:model="name" required autofocus>
                                                        @error('name') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('contact_details') ? ' has-error' : '' }}">
                                                    <label for="contact_details" class="col-md-4 control-label">{{ __('Contact details') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="contact_details" type="text" class="form-control" name="contact_details" wire:model="contact_details" required autofocus>
                                                        @error('contact_details') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('authorities_notified') ? ' has-error' : '' }}">
                                                    <label for="authorities_notified" class="col-md-4 control-label">{{ __('Authorities notified') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="authorities_notified" type="text" class="form-control" name="authorities_notified" wire:model="authorities_notified" required autofocus>
                                                        @error('authorities_notified') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeStakeholder()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul>
                        @forelse($incidentInformation->stakeholders as $stakeholder)
                        <li>{{ $stakeholder->name }} ({{ $stakeholder->contact_details }}) Authorities notified: {{ $stakeholder->authorities_notified }} - <a href="#" wire:click="deleteStakeholder({{ $stakeholder->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></li>
                        @empty
                        <li>{{ __('No entry') }}</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Documentation Related to the Incident') }}</h6>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#Documentation">
                                {{ __('Add Documentation') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="Documentation" tabindex="-1" role="dialog" aria-labelledby="Documentation" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Documentation') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('original_file_name') ? ' has-error' : '' }}">
                                                    <label for="original_file_name" class="col-md-4 control-label">{{ __('File') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="original_file_name" type="file" class="form-control" name="original_file_name" wire:model="original_file_name" required autofocus>
                                                        @error('original_file_name') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeDocument()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul>
                        @forelse($incidentInformation->documentation as $document)
                        <li>{{ $document->original_file_name }} ({{ $document->GetPrettySize() }}) - <a href="#" wire:click="deleteDocument({{ $document->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></li>
                        @empty
                        <li>{{ __('No entry') }}</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Environmental Impact Assessment') }}</h6>
                        </div>
                        
                        @empty($incidentInformation->impactAssessment->impact_assessment)
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#Impact">
                                {{ __('Add Impact') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="Impact" tabindex="-1" role="dialog" aria-labelledby="Impact" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Impact') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('impact_assessment') ? ' has-error' : '' }}">
                                                    <label for="impact_assessment" class="col-md-4 control-label">{{ __('Impact assessment') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="impact_assessment" type="text" class="form-control" name="impact_assessment" wire:model="impact_assessment" required autofocus>
                                                        @error('impact_assessment') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeImpactAssessment()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul>
                        @empty($incidentInformation->impactAssessment->impact_assessment)
                        <li>{{ __('No entry') }}</li>
                        @else
                        <li>{{ $incidentInformation->impactAssessment->impact_assessment }} - <a href="#" wire:click="deleteImpactAssessment({{ $incidentInformation->impactAssessment->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Root Cause Analysis') }}</h6>
                        </div>
                        @empty($incidentInformation->rootCauseAnalysis->root_cause_analysis)
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#Cause">
                                {{ __('Add Cause') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="Cause" tabindex="-1" role="dialog" aria-labelledby="Cause" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Cause') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('root_cause_analysis') ? ' has-error' : '' }}">
                                                    <label for="root_cause_analysis" class="col-md-4 control-label">{{ __('Root Cause Analysis') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="root_cause_analysis" type="text" class="form-control" name="root_cause_analysis" wire:model="root_cause_analysis" required autofocus>
                                                        @error('root_cause_analysis') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeRootCauseAnalyses()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul>
                        @empty($incidentInformation->rootCauseAnalysis->root_cause_analysis)
                        <li>{{ __('No entry') }}</li>
                        @else
                        <li>{{ $incidentInformation->rootCauseAnalysis->root_cause_analysis }} - <a href="#" wire:click="deleteRootCauseAnalyses({{ $incidentInformation->rootCauseAnalysis->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>