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
                                                    <label for="results" class="col-md-4 control-label">{{ __('Findings') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="findings" type="text" class="form-control" name="findings" wire:model="findings" required autofocus>
                                                        @error('findings') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('recommendations') ? ' has-error' : '' }}">
                                                    <label for="results" class="col-md-4 control-label">{{ __('Recommendations') }} :</label>
                            
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Auditor</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Audit type</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Results</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Findings</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Recommendations</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($audit->auditData as $auditData)
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
                                @empty
                                <tr>
                                    <td></td>
                                    <td>No entry</td>
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
</div>