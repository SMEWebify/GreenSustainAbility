<div class="main-content">
    @include('includes.alert-result')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Indicator List') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NewIndicator">
                            {{ __('New indicator') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewIndicator" tabindex="-1" role="dialog" aria-labelledby="NewIndicator" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Create indicator monitoring') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf 
                                                
                                                <div class="form-group row{{ $errors->has('indicator_type') ? ' has-error' : '' }}">
                                                    <label for="indicator_type" class="col-md-4 control-label">{{ __('Indicator type') }}</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="indicator_type" type="text" class="form-control" name="indicator_type" wire:model="indicator_type" required>
                                                        @error('indicator_type') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row{{ $errors->has('source_type') ? ' has-error' : '' }}">
                                                    <label for="source_type" class="col-md-4 control-label">{{ __('Source type') }}</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="source_type" type="text" class="form-control" name="source_type" wire:model="source_type" required>
                                                        @error('source_type') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row{{ $errors->has('source_name') ? ' has-error' : '' }}">
                                                    <label for="source_name"  class="col-md-4 control-label">{{ __('Source name') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="source_name" type="text" class="form-control{{ $errors->has('source_name') ? ' is-invalid' : '' }}" name="source_name" wire:model="source_name" required autofocus>
                                                        @error('source_name') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row{{ $errors->has('source_location') ? ' has-error' : '' }}">
                                                    <label for="source_location"  class="col-md-4 control-label">{{ __('Source location') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="source_location" type="text" class="form-control{{ $errors->has('source_location') ? ' is-invalid' : '' }}" name="source_location" wire:model="source_location" required autofocus>
                                                        @error('source_location') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('measurement_unit') ? ' has-error' : '' }}">
                                                    <label for="measurement_unit"  class="col-md-4 control-label">{{ __('Measurement unit') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control @error('measurement_unit') is-invalid @enderror"  name="measurement_unit" id="measurement_unit"  wire:model="measurement_unit">
                                                            <option value="" >Select Unit</option>
                                                            <option value="">{{ __('-- Energy consumption -- ') }}</option>
                                                            <option value="Kilowatt-hour (kWh)">{{ __('Kilowatt-hour (kWh)') }}</option>
                                                            <option value="Megawatt-hour (MWh)">{{ __('Megawatt-hour (MWh)') }}</option>
                                                            <option value="Joules (J)">{{ __('Joules (J)') }}</option>
                                                            <option value="Therm (th)">{{ __('Therm (th)') }}</option>
                                                            <option value="">{{ __('-- Greenhouse gas emissions -- ') }}</option>
                                                            <option value="Kilogram CO2 equivalent (kgCO2e)">{{ __('Kilogram CO2 equivalent (kgCO2e)') }}</option>
                                                            <option value="Tonne of CO2 equivalent (tCO2e)">{{ __('Tonne of CO2 equivalent (tCO2e)') }}</option>
                                                            <option value="Tonne of methane equivalent (tCH4e)">{{ __('Tonne of methane equivalent (tCH4e)') }}</option>
                                                            <option value="">{{ __('-- Water discharge -- ') }}</option>
                                                            <option value="Liter (L)">{{ __('Liter (L)') }}</option>
                                                            <option value="gallon (gal)">{{ __('gallon (gal)') }}</option>
                                                            <option value="Barrel (bbl)">{{ __('Barrel (bbl)') }}</option>
                                                            <option value="">{{ __('-- Waste -- ') }}</option>
                                                            <option value="Gram (g)">{{ __('Gram (g)') }}</option>
                                                            <option value="Kilogram (kg)">{{ __('Kilogram (kg)') }}</option>
                                                            <option value="Metric ton (t)">{{ __('Metric ton (t)') }}</option>
                                                            <option value="Pound (lb)">{{ __('Pound (lb)') }}</option>
                                                            <option value="Ounce (oz)">{{ __('Ounce (oz)') }}</option>
                                                            <option value="Short ton (st)">{{ __('Short ton (st)') }}</option>
                                                            <option value="Long ton (lt)">{{ __('Long ton (lt)') }}</option>
                                                            <option value="">{{ __('-- Air quality -- ') }}</option>
                                                            <option value="ppm (parts per million)">{{ __('ppm (parts per million)') }}</option>
                                                            <option value="µg/m3 (micrograms per cubic meter)">{{ __('µg/m3 (micrograms per cubic meter)') }}</option>
                                                            <option value="">{{ __('-- Other -- ') }}</option>
                                                            <option value="Acre (ac)">{{ __('Acre (ac)') }}</option>
                                                            <option value="Cubic inch (in3)">{{ __('Cubic inch (in3)') }}</option>
                                                            <option value="Cubic centimeter (cm3)">{{ __('Cubic centimeter (cm3)') }}</option>
                                                            <option value="Cubic meter (m3)">{{ __('Cubic meter (m3)') }}</option>
                                                            <option value="Cubic foot (ft3)">{{ __('Cubic foot (ft3)') }}</option>
                                                        </select>
                                                        @error('measurement_unit') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeIndicator()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Indicator type') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Source type') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Source name') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Source location') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Measurement unit') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Creation Date') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($indicators as $indicator)
                                    <tr>
                                        <td>#{{ $indicator->id }}</td>
                                        <td>{{ $indicator->indicator_type }}</td>
                                        <td>{{ $indicator->source_type }}</td>
                                        <td>{{ $indicator->source_name }}</td>
                                        <td>{{ $indicator->source_location }}</td>
                                        <td>{{ $indicator->measurement_unit }}</td>
                                        <td>{{ $indicator->GetPrettyCreatedAttribute() }}</td>
                                        <td>
                                            <!-- View Link -->
                                            <a href="{{ route('indicator-monitoring-show', $indicator) }}" class="btn bg-gradient-primary btn-block mb-3">{{ __('View') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $indicators->links() }}
                </div>
            </div>
        </div>
    </div>
</div>