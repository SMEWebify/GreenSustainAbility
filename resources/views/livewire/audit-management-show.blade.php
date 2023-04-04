<div class="main-content">
    @include('includes.alert-result')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Audit detail') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-info btn-block mb-3" data-bs-toggle="modal" data-bs-target="#UpdateAudit">
                                {{ __('Edit') }}
                            </button>
                        
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="UpdateAudit" tabindex="-1" role="dialog" aria-labelledby="UpdateAudit" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Update Audit Information') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('frequency') ? ' has-error' : '' }}">
                                                    <label for="frequency"  class="col-md-4 control-label">{{ __('Frequency') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control @error('frequency') is-invalid @enderror"  name="frequency" id="frequency"  wire:model="frequency">
                                                            <option value="">{{ __('Select frequency') }}</option>
                                                            <option value="Annually">{{ __('Annually') }}</option>
                                                            <option value="Bi-annually">{{ __('Bi-annually') }}</option>
                                                            <option value="Quarterly">{{ __('Quarterly') }}</option>
                                                            <option value="Monthly">{{ __('Monthly') }}</option>
                                                            <option value="Bi-monthly">{{ __('Bi-monthly') }}</option>
                                                            <option value="Weekly">{{ __('Weekly') }}</option>
                                                            <option value="Daily">{{ __('Daily') }}</option>
                                                        </select>
                                                        @error('frequency') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('scope') ? ' has-error' : '' }}">
                                                    <label for="scope" class="col-md-4 control-label">{{ __('Scope') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="scope" type="text" class="form-control" name="scope" wire:model="scope" required>
                                                        @error('scope') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('duration') ? ' has-error' : '' }}">
                                                    <label for="duration"  class="col-md-4 control-label">{{ __('Duration') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control @error('duration') is-invalid @enderror"  name="duration" id="duration"  wire:model="duration">
                                                            <option value="">{{ __('Select duration') }}</option>
                                                            <option value="1 day">1 {{ __('Day') }}</option>
                                                            <option value="2 days">2 {{ __('Days') }}</option>
                                                            <option value="3 days">3 {{ __('Days') }}</option>
                                                            <option value="4 days">4 {{ __('Days') }}</option>
                                                            <option value="5 days">5 {{ __('Days') }}</option>
                                                            <option value="6 days">6 {{ __('Days') }}</option>
                                                            <option value="1 week">1 {{ __('Week') }}</option>
                                                            <option value="2 weeks">2 {{ __('Weeks') }}</option>
                                                            <option value="3 weeks">3 {{ __('Weeks') }}</option>
                                                            <option value="1 month">1 {{ __('Month') }}</option>
                                                            <option value="2 months">2 {{ __('Months') }}</option>
                                                            <option value="3 months">3 {{ __('Months') }}</option>
                                                            <option value="6 months">6 {{ __('Months') }}</option>
                                                            <option value="1 year">1 {{ __('Year') }}</option>
                                                            <option value="2 years">2 {{ __('Years') }}</option>
                                                            <option value="3 years">3 {{ __('Years') }}</option>
                                                        </select>
                                                        @error('duration') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('objectives') ? ' has-error' : '' }}">
                                                    <label for="objectives"  class="col-md-4 control-label">{{ __('Objectives') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="objectives" type="text" class="form-control{{ $errors->has('objectives') ? ' is-invalid' : '' }}" name="objectives" wire:model="objectives" required autofocus>
                                                        @error('objectives') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row{{ $errors->has('resources') ? ' has-error' : '' }}">
                                                    <label for="resources"  class="col-md-4 control-label">{{ __('Resources') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="resources" type="text" class="form-control{{ $errors->has('resources') ? ' is-invalid' : '' }}" name="resources" wire:model="resources" required>
                                                        @error('resources') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="updateAudit()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                <li><strong>{{ __('Frequency') }} :</strong> {{ $audit->frequency }}</li>
                                <li><strong>{{ __('Scope') }} :</strong> {{ $audit->scope }}</li>
                                <li><strong>{{ __('Duration') }} :</strong> {{ $audit->duration }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <ul>
                                <li><strong>{{ __('Objectives') }} :</strong> {{ $audit->objectives }}</li>
                                <li><strong>{{ __('Resources') }} :</strong> {{ $audit->resources }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Audit Data') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#Data">
                                {{ __('Add Data') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="Data" tabindex="-1" role="dialog" aria-labelledby="Data" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Data') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf

                                                <div class="form-group row{{ $errors->has('date') ? ' has-error' : '' }}">
                                                    <label for="date" class="col-md-4 control-label">{{ __('Date') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="date" type="date" class="form-control" name="date" wire:model="date" required autofocus>
                                                        @error('date') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('auditor') ? ' has-error' : '' }}">
                                                    <label for="auditor" class="col-md-4 control-label">{{ __('Auditor') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="auditor" type="text" class="form-control" name="auditor" wire:model="auditor" required autofocus>
                                                        @error('auditor') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('audit_type') ? ' has-error' : '' }}">
                                                    <label for="audit_type"  class="col-md-4 control-label">{{ __('Audit type') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control @error('audit_type') is-invalid @enderror"  name="audit_type" id="audit_type"  wire:model="audit_type">
                                                            <option value="">{{ __('Select type') }}</option>
                                                            <option value="Compliance audit">{{ __('Compliance audit') }}</option>
                                                            <option value="Regulatory audit">{{ __('Regulatory audit') }}</option>
                                                            <option value="Sustainability audit">{{ __('Sustainability audit') }}</option>
                                                            <option value="Energy audit">{{ __('Energy audit') }}</option>
                                                            <option value="Environmental audit">{{ __('Environmental audit') }}</option>
                                                            <option value="Health and safety audit">{{ __('Health and safety audit') }}</option>
                                                            <option value="Social audit">{{ __('Social audit') }}</option>
                                                            <option value="Supply chain audit">{{ __('Supply chain audit') }}</option>
                                                            <option value="Other ">{{ __('Other ') }}</option>
                                                        </select>
                                                        @error('audit_type') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row{{ $errors->has('results') ? ' has-error' : '' }}">
                                                    <label for="results" class="col-md-4 control-label">{{ __('Results') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="results" type="text" class="form-control" name="results" wire:model="results" required autofocus>
                                                        @error('results') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('findings') ? ' has-error' : '' }}">
                                                    <label for="findings" class="col-md-4 control-label">{{ __('Findings') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="findings" type="text" class="form-control" name="findings" wire:model="findings" required autofocus>
                                                        @error('findings') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('recommendations') ? ' has-error' : '' }}">
                                                    <label for="recommendations" class="col-md-4 control-label">{{ __('Recommendations') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="recommendations" type="text" class="form-control" name="recommendations" wire:model="recommendations" required autofocus>
                                                        @error('recommendations') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeData()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Date') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Auditor') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Audit type') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Results') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Findings') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Recommendations') }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($auditDatas as $auditData)
                                <tr>
                                    <td>#{{ $auditData->id }}</td>
                                    <td>{{ $auditData->date }}</td>
                                    <td>{{ $auditData->auditor }}</td>
                                    <td>{{ $auditData->audit_type }}</td>
                                    <td>{{ $auditData->results }}</td>
                                    <td>{{ $auditData->findings }}</td>
                                    <td>{{ $auditData->recommendations }}</td>
                                    <td><a href="#" wire:click="deleteData({{ $auditData->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Follow-up of Actions') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-secondary btn-block mb-3" data-bs-toggle="modal" data-bs-target="#Follow">
                                {{ __('Add Action') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="Follow" tabindex="-1" role="dialog" aria-labelledby="Follow" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Action') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf

                                                <div class="form-group row{{ $errors->has('action_description') ? ' has-error' : '' }}">
                                                    <label for="action_description" class="col-md-4 control-label">{{ __('Action description') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="action_description" type="text" class="form-control" name="action_description" wire:model="action_description" required autofocus>
                                                        @error('action_description') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('responsible_party') ? ' has-error' : '' }}">
                                                    <label for="responsible_party" class="col-md-4 control-label">{{ __('Responsible party') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="responsible_party" type="text" class="form-control" name="responsible_party" wire:model="responsible_party" required autofocus>
                                                        @error('responsible_party') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row{{ $errors->has('due_date') ? ' has-error' : '' }}">
                                                    <label for="due_date" class="col-md-4 control-label">{{ __('Due date') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="due_date" type="date" class="form-control" name="due_date" wire:model="due_date" required autofocus>
                                                        @error('due_date') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeAction({{ $auditData->id  }})" class="btn bg-gradient-primary"  data-bs-dismiss="modal">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Action description') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Responsible party') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Due date') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Completion date') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Status') }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($auditData->FollowUpActions as $followUpAction)
                                <tr>
                                    <td>#{{ $followUpAction->id }}</td>
                                    <td>{{ $followUpAction->action_description }}</td>
                                    <td>{{ $followUpAction->responsible_party }}</td>
                                    <td>{{ $followUpAction->due_date }}</td>
                                    <td>{!! $followUpAction->GetPrettyCompletionDate() !!}</td>
                                    <td>{!! $followUpAction->GetPrettyStatu() !!}</td>
                                    <td><a href="#" wire:click="deleteAction({{ $followUpAction->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="row">
                                                <div class="arrow-steps clearfix border">
                                                    <div class="step {{ $followUpAction->status == 1 ? 'current' : '' }} {{ $followUpAction->status <= 1 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu({{ $followUpAction->id  }},1)">{{ __('Open') }}</a></span> </div>
                                                    <div class="step {{ $followUpAction->status == 2 ? 'current' : '' }} {{ $followUpAction->status <= 2 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu({{ $followUpAction->id  }},2)">{{ __('In process') }}</a></span> </div>
                                                    <div class="step {{ $followUpAction->status == 3 ? 'current' : '' }} {{ $followUpAction->status <= 3 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu({{ $followUpAction->id  }},3)">{{ __('Canceled') }}</a></span> </div>
                                                    <div class="step {{ $followUpAction->status == 4 ? 'current' : '' }} {{ $followUpAction->status <= 4 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu({{ $followUpAction->id  }},4)">{{ __('Ended') }}</a><span> </div>
                                                    <div class="step {{ $followUpAction->status == 5 ? 'current' : '' }} {{ $followUpAction->status <= 5 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu({{ $followUpAction->id  }},5)">{{ __('Pending') }}</a><span> </div>
                                                    <div class="step {{ $followUpAction->status == 6 ? 'current' : '' }} {{ $followUpAction->status <= 6 ? ' ' : 'done' }}"> <span><a href="#" wire:click="changeStatu({{ $followUpAction->id  }},6)">{{ __('Closed') }}</a><span> </div>
                                                </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td></td>
                                    <td>No entry</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Management of Non-Conformities') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-secondary btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NonConformities">
                                {{ __('Add Non-Conformitie') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NonConformities" tabindex="-1" role="dialog" aria-labelledby="NonConformities" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Non-Conformities') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf

                                                <div class="form-group row{{ $errors->has('non_conformity_description') ? ' has-error' : '' }}">
                                                    <label for="non_conformity_description" class="col-md-4 control-label">{{ __('Description') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="non_conformity_description" type="text" class="form-control" name="non_conformity_description" wire:model="non_conformity_description" required autofocus>
                                                        @error('non_conformity_description') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('corrective_actions') ? ' has-error' : '' }}">
                                                    <label for="corrective_actions" class="col-md-4 control-label">{{ __('Corrective actions') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="corrective_actions" type="text" class="form-control" name="corrective_actions" wire:model="corrective_actions" required autofocus>
                                                        @error('corrective_actions') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row{{ $errors->has('preventive_actions') ? ' has-error' : '' }}">
                                                    <label for="preventive_actions" class="col-md-4 control-label">{{ __('Preventive actions') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="preventive_actions" type="text" class="form-control" name="preventive_actions" wire:model="preventive_actions" required autofocus>
                                                        @error('preventive_actions') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeNonConformities({{ $auditData->id  }})" class="btn bg-gradient-primary" data-bs-dismiss="modal">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Non conformity description') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Corrective actions') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Preventive actions') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Is closed') }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($auditData->nonConformities as $nonConformitie)
                                <tr>
                                    <td>#{{ $nonConformitie->id }}</td>
                                    <td>{{ $nonConformitie->non_conformity_description }}</td>
                                    <td>{{ $nonConformitie->corrective_actions }}</td>
                                    <td>{{ $nonConformitie->preventive_actions }}</td>
                                    <td>{!! $nonConformitie->GetPrettyStatu() !!}</td>
                                    <td><a href="#" wire:click="deleteNonConformities({{ $nonConformitie->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td></td>
                                    <td>No entry</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
                                <tr>
                                    <td></td>
                                    <td>No entry</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
                @endforelse
    {{ $auditDatas->links() }}
</div>
