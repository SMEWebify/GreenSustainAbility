<div class="main-content">
    @include('includes.alert-result')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Data Management detail') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-info btn-block mb-3" data-bs-toggle="modal" data-bs-target="#UpdateData">
                                {{ __('Edit') }}
                            </button>
                        
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="UpdateData" tabindex="-1" role="dialog" aria-labelledby="UpdateData" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Update Data Information') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf 
                                                
                                                <div class="form-group row{{ $errors->has('emission_type') ? ' has-error' : '' }}">
                                                    <label for="measurement_unit"  class="col-md-4 control-label">{{ __('Emission type') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control @error('emission_type') is-invalid @enderror"  name="emission_type" id="emission_type"  wire:model="emission_type">
                                                            <option value="" >{{ __('Select Type') }}</option>
                                                            <option value="CO2 (carbon dioxide)">{{ __('CO2 (carbon dioxide)') }}</option>
                                                            <option value="CH4 (methane)">{{ __('CH4 (methane)') }}</option>
                                                            <option value="N2O (nitrous oxide)">{{ __('N2O (nitrous oxide)') }}</option>
                                                            <option value="SO2 (sulfur dioxide)">{{ __('SO2 (sulfur dioxide)') }}</option>
                                                            <option value="NOx (nitrogen oxides)">{{ __('NOx (nitrogen oxides)') }}</option>
                                                            <option value="PM (particulate matter)">{{ __('PM (particulate matter)') }}</option>
                                                            <option value="VOCs (volatile organic compounds)">{{ __('VOCs (volatile organic compounds)') }}</option>
                                                            <option value="HFCs (hydrofluorocarbons)">{{ __('HFCs (hydrofluorocarbons)') }}</option>
                                                            <option value="PFCs (perfluorocarbons)">{{ __('PFCs (perfluorocarbons)') }}</option>
                                                            <option value="SF6 (sulfur hexafluoride)">{{ __('SF6 (sulfur hexafluoride)') }}</option>
                                                        </select>
                                                        @error('emission_type') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row{{ $errors->has('emission_source') ? ' has-error' : '' }}">
                                                    <label for="emission_source" class="col-md-4 control-label">{{ __('Emission source') }}</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="emission_source" type="text" class="form-control {{ $errors->has('emission_source') ? ' is-invalid' : '' }}" name="emission_source" wire:model="emission_source" required>
                                                        @error('emission_source') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row{{ $errors->has('emission_location') ? ' has-error' : '' }}">
                                                    <label for="emission_location"  class="col-md-4 control-label">{{ __('Emission location') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="emission_location" type="text" class="form-control{{ $errors->has('emission_location') ? ' is-invalid' : '' }}" name="emission_location" wire:model="emission_location" required autofocus>
                                                        @error('emission_location') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row{{ $errors->has('emission_amount') ? ' has-error' : '' }}">
                                                    <label for="emission_amount"  class="col-md-4 control-label">{{ __('Emission amount') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="emission_amount" type="number" class="form-control{{ $errors->has('emission_amount') ? ' is-invalid' : '' }}" name="emission_amount" wire:model="emission_amount" required autofocus>
                                                        @error('emission_amount') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('date_of_emission') ? ' has-error' : '' }}">
                                                    <label for="date_of_emission"  class="col-md-4 control-label">{{ __('Date of emission') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="date_of_emission" type="date" class="form-control{{ $errors->has('date_of_emission') ? ' is-invalid' : '' }}" name="date_of_emission" wire:model="date_of_emission" required autofocus>
                                                        @error('date_of_emission') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('emission_comment') ? ' has-error' : '' }}">
                                                    <label for="emission_comment" class="col-md-4 control-label">{{ __('Comment') }}</label>
                            
                                                    <div class="col-md-6">
                                                        <textarea id="emission_comment" class="form-control" name="emission_comment" wire:model="emission_comment" required></textarea>
                                                        @error('emission_comment') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="updateData()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                <li><strong>{{ __('Emission type') }} :</strong> {{ $data->emission_type }}</li>
                                <li><strong>{{ __('Emission source') }} :</strong> {{ $data->emission_source }}</li>
                                <li><strong>{{ __('Emission location ') }} :</strong> {{ $data->emission_location }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <ul>
                                <li><strong>{{ __('Emission amount') }} :</strong> {{ $data->emission_amount }}</li>
                                <li><strong>{{ __('Date of emission') }} :</strong> {{ $data->date_of_emission }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <ul>
                                <li><strong>{{ __('Emission comment') }} :</strong> {{ $data->emission_comment }}</li>
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
                            <h6 class="mb-0">{{ __('Emission Calculations') }}</h6>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#EmissionCalculations">
                                {{ __('Add Emission Calculations') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="EmissionCalculations" tabindex="-1" role="dialog" aria-labelledby="EmissionCalculations" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Emission Calculations') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('emission_calculation_method') ? ' has-error' : '' }}">
                                                    <label for="emission_calculation_method" class="col-md-4 control-label">{{ __('Calculation method') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="emission_calculation_method" type="text" class="form-control" name="emission_calculation_method" wire:model="emission_calculation_method" required autofocus>
                                                        @error('emission_calculation_method') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('emission_calculation_result') ? ' has-error' : '' }}">
                                                    <label for="emission_calculation_result" class="col-md-4 control-label">{{ __('Calculation result') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="emission_calculation_result" type="number" class="form-control" name="emission_calculation_result" wire:model="emission_calculation_result" required autofocus>
                                                        @error('emission_calculation_result') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('date_of_calculation') ? ' has-error' : '' }}">
                                                    <label for="date_of_calculation"  class="col-md-4 control-label">{{ __('Date of calculation') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="date_of_calculation" type="date" class="form-control{{ $errors->has('date_of_calculation') ? ' is-invalid' : '' }}" name="date_of_calculation" wire:model="date_of_calculation" required autofocus>
                                                        @error('date_of_calculation') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row{{ $errors->has('emission_calculation_comment') ? ' has-error' : '' }}">
                                                    <label for="emission_calculation_comment" class="col-md-4 control-label">{{ __('Calculation comment') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="emission_calculation_comment" type="text" class="form-control" name="emission_calculation_comment" wire:model="emission_calculation_comment" required autofocus>
                                                        @error('emission_calculation_comment') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeEmissionCalculations()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Emission calculation method') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Emission calculation result') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Date of calculation') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Note') }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data->EmissionCalculationsDatas as $EmissionCalculationsData)
                                <tr>
                                    <td>{{ $EmissionCalculationsData->emission_calculation_method }}</td>
                                    <td>{{ $EmissionCalculationsData->emission_calculation_result }} metric tons</td>
                                    <td>{{ $EmissionCalculationsData->date_of_calculation }}</td>
                                    <td>{{ $EmissionCalculationsData->emission_calculation_comment }}</td>
                                    <td><a href="#" wire:click="deleteEmissionCalculations({{ $EmissionCalculationsData->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></td>
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
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Planning and Tracking Reductions') }}</h6>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#PlanningAndTrackingReductions">
                                {{ __('Add Emission Planning and Tracking Reductions') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="PlanningAndTrackingReductions" tabindex="-1" role="dialog" aria-labelledby="PlanningAndTrackingReductions" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Emission Planning and Tracking Reductions') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('reduction_target') ? ' has-error' : '' }}">
                                                    <label for="reduction_target" class="col-md-4 control-label">{{ __('Reduction target') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="reduction_target" type="number" class="form-control" name="reduction_target" wire:model="reduction_target" required autofocus>
                                                        @error('reduction_target') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('reduction_measures') ? ' has-error' : '' }}">
                                                    <label for="reduction_measures" class="col-md-4 control-label">{{ __('Reduction measures') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="reduction_measures" type="text" class="form-control" name="reduction_measures" wire:model="reduction_measures" required autofocus>
                                                        @error('reduction_measures') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('reduction_results') ? ' has-error' : '' }}">
                                                    <label for="reduction_results" class="col-md-4 control-label">{{ __('Reduction results') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="reduction_results" type="number" class="form-control" name="reduction_results" wire:model="reduction_results" required autofocus>
                                                        @error('reduction_results') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('date_of_implementation') ? ' has-error' : '' }}">
                                                    <label for="date_of_implementation"  class="col-md-4 control-label">{{ __('Date of implementation') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="date_of_implementation" type="date" class="form-control{{ $errors->has('date_of_implementation') ? ' is-invalid' : '' }}" name="date_of_implementation" wire:model="date_of_implementation" required autofocus>
                                                        @error('date_of_implementation') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row{{ $errors->has('reduction_comment') ? ' has-error' : '' }}">
                                                    <label for="reduction_comment" class="col-md-4 control-label">{{ __('Reduction comment') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="reduction_comment" type="text" class="form-control" name="reduction_comment" wire:model="reduction_comment" required autofocus>
                                                        @error('reduction_comment') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storePlanningandTrackingReduction()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Reduction target') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Reduction measures') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Reduction results') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Date of implementation') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Notes') }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data->PlanningandTrackingReductions as $PlanningandTrackingReduction)
                                <tr>
                                    <td>{{ $PlanningandTrackingReduction->reduction_target }}</td>
                                    <td>{{ $PlanningandTrackingReduction->reduction_measures }}</td>
                                    <td>{{ $PlanningandTrackingReduction->reduction_results }}</td>
                                    <td>{{ $PlanningandTrackingReduction->date_of_implementation }}</td>
                                    <td>{{ $PlanningandTrackingReduction->reduction_comment }}</td>
                                    <td><a href="#" wire:click="deletePlanningandTrackingReduction({{ $PlanningandTrackingReduction->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></td>
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
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Regulatory Compliance') }}</h6>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#RegulatoryCompliance">
                                {{ __('Add Regulatory Compliance') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="RegulatoryCompliance" tabindex="-1" role="dialog" aria-labelledby="RegulatoryCompliance" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Regulatory Compliance') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf

                                                <div class="form-group row{{ $errors->has('regulatory_requirement') ? ' has-error' : '' }}">
                                                    <label for="regulatory_requirement" class="col-md-4 control-label">{{ __('Regulatory requirement') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="regulatory_requirement" type="text" class="form-control" name="regulatory_requirement" wire:model="regulatory_requirement" required autofocus>
                                                        @error('regulatory_requirement') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('compliance_status') ? ' has-error' : '' }}">
                                                    <label for="compliance_status" class="col-md-4 control-label">{{ __('Compliance status') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="compliance_status" type="text" class="form-control" name="compliance_status" wire:model="compliance_status" required autofocus>
                                                        @error('compliance_status') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('verification_date') ? ' has-error' : '' }}">
                                                    <label for="verification_date"  class="col-md-4 control-label">{{ __('Date of implementation') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="verification_date" type="date" class="form-control{{ $errors->has('verification_date') ? ' is-invalid' : '' }}" name="verification_date" wire:model="verification_date" required autofocus>
                                                        @error('verification_date') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row{{ $errors->has('regulatory_comment') ? ' has-error' : '' }}">
                                                    <label for="regulatory_comment" class="col-md-4 control-label">{{ __('Regulatory comment') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="regulatory_comment" type="text" class="form-control" name="regulatory_comment" wire:model="regulatory_comment" required autofocus>
                                                        @error('regulatory_comment') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeRegulatoryCompliance()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Regulatory requiremen') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Compliance status') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Date of verification') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Notes') }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data->RegulatoryCompliances as $RegulatoryCompliance)
                                <tr>
                                    <td>{{ $RegulatoryCompliance->regulatory_requirement }}</td>
                                    <td>{{ $RegulatoryCompliance->compliance_status }}</td>
                                    <td>{{ $RegulatoryCompliance->verification_date }}</td>
                                    <td>{{ $RegulatoryCompliance->regulatory_comment }}</td>
                                    <td><a href="#" wire:click="deleteRegulatoryCompliance({{ $RegulatoryCompliance->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></td>
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