<div class="main-content">
    @include('includes.alert-result')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Data List') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NewData">
                            {{ __('New data') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewData" tabindex="-1" role="dialog" aria-labelledby="NewData" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Create data emission') }}</h5>
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
                                                <button type="button" wire:click.prevent="storeEmission()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th ></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Emission type') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Emission source') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Emission location') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Emission amount') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Date of emission') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Comment') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($emissions as $emission)
                                    <tr>
                                        <td>#{{ $emission->id }}</td>
                                        <td>{{ $emission->emission_type }}</td>
                                        <td>{{ $emission->emission_source }}</td>
                                        <td>{{ $emission->emission_location }}</td>
                                        <td>{{ $emission->emission_amount }} {{ __('metric tons') }}</td>
                                        <td>{{ $emission->date_of_emission }}</td>
                                        <td>{{ $emission->emission_comment }}</td>
                                        <td>
                                            <!-- View Link -->
                                            <a href="{{ route('data-management-show', $emission) }}" class="btn bg-gradient-primary btn-block mb-3">{{ __('View') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $emissions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>