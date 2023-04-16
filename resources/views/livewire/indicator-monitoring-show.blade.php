<div class="main-content">
    @include('includes.alert-result')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Indicator Monitoring detail for ') }}{{ $indicator->indicator_type }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-info btn-block mb-3" data-bs-toggle="modal" data-bs-target="#UpdateIndicator">
                                {{ __('Edit') }}
                            </button>
                        
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="UpdateIndicator" tabindex="-1" role="dialog" aria-labelledby="UpdateIndicator" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Update Indicator Information') }}</h5>
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
                                                            <option value="" >{{ __('Select Unit') }}</option>
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
                                                <button type="button" wire:click.prevent="updateIndicator()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                <li><strong>{{ __('Type') }} :</strong> {{ $indicator->indicator_type }}</li>
                                <li><strong>{{ __('Source type') }} :</strong> {{ $indicator->source_type }}</li>
                                <li><strong>{{ __('Source name') }} :</strong> {{ $indicator->source_name }}</li>
                                <li><strong>{{ __('Source location') }} :</strong> {{ $indicator->source_location }}</li>
                                <li><strong>{{ __('Measurement unit') }} :</strong> {{ $indicator->measurement_unit }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <ul>
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
    <div class="row ">
        <div class="col-12 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Report') }}</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <canvas id="myChart"></canvas>
                    <script>
                        
                        @php
                            $labels = [];
                            $data = [];
                            // Récupération des mois et des valeurs de l'indicateur par mois
                            // Tri des données par mois
                            $sortedData = collect($dataByMonth)->sortBy('month');
                        @endphp

                        @foreach ($sortedData as $item)
                            @php
                                $labels[] = date("F", mktime(0, 0, 0, get_object_vars($item)['month'], 1));
                                $data[] = get_object_vars($item)['sum_value']; 
                            @endphp
                        @endforeach

                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                    
                                    labels: {!! json_encode($labels) !!},
                                    datasets: [{
                                        label: {!! json_encode($indicator->measurement_unit) !!},
                                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                        borderColor: 'rgba(54, 162, 235, 1)',
                                        borderWidth: 1,
                                        data: {!! json_encode($data) !!},
                                    }]
                                },
                        }
                        );
                    </script>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ __('Alarms and notifications') }}</h6>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#Alarm">
                                {{ __('Add Alarm') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="Alarm" tabindex="-1" role="dialog" aria-labelledby="Alarm" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Alarm') }}</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group row{{ $errors->has('threshold_value') ? ' has-error' : '' }}">
                                                    <label for="threshold_value" class="col-md-4 control-label">{{ __('Threshold value') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="threshold_value" type="number" class="form-control" name="threshold_value" wire:model="threshold_value" required autofocus>
                                                        @error('threshold_value') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('comparison_operator') ? ' has-error' : '' }}">
                                                    <label for="comparison_operator"  class="col-md-4 control-label">{{ __('Comparison operator') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control @error('comparison_operator') is-invalid @enderror"  name="comparison_operator" id="comparison_operator"  wire:model="comparison_operator">
                                                            <option value="" >{{ __('Select operator') }}</option>
                                                            <option value=">">></option>
                                                            <option value="<"><</option>
                                                            <option value=">=">>=</option>
                                                            <option value="<="><=</option>
                                                            <option value="=">=</option>
                                                        </select>
                                                        @error('comparison_operator') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('notification_type') ? ' has-error' : '' }}">
                                                    <label for="notification_type"  class="col-md-4 control-label">{{ __('Notification type') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control @error('notification_type') is-invalid @enderror"  name="notification_type" id="notification_type"  wire:model="notification_type">
                                                            <option value="" >{{ __('Select type') }}</option>
                                                            <option value="without">{{ __('without') }}</option>
                                                            <option value="email">{{ __('email') }}</option>
                                                            <option value="sms">{{ __('sms') }}</option>
                                                        </select>
                                                        @error('notification_type') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('active') ? ' has-error' : '' }}">
                                                    <label for="active"  class="col-md-4 control-label">{{ __('Active') }}</label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control @error('active') is-invalid @enderror"  name="active" id="active"  wire:model="active">
                                                            <option value="" >{{ __('Select statu') }}</option>
                                                            <option value="Yes">{{ __('Yes') }}</option>
                                                            <option value="No">{{ __('No') }}</option>
                                                        </select>
                                                        @error('active') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" wire:click.prevent="storeAlarm()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Threshold value') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Comparison operator') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Notification type') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Active') }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($indicator->AlarmsNotifications as $AlarmsNotification)
                                <tr>
                                    <td>{{ $AlarmsNotification->threshold_value }}</td>
                                    <td>{{ $AlarmsNotification->comparison_operator }}</td>
                                    <td>{{ $AlarmsNotification->notification_type }}</td>
                                    <td>{{ $AlarmsNotification->active }}</td>
                                    <td><a href="#" wire:click="deleteAlarm({{ $AlarmsNotification->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></td>
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
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Indicator Monitoring Data') }}</h5>
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
                                                <div class="form-group row{{ $errors->has('indicator_value') ? ' has-error' : '' }}">
                                                    <label for="indicator_value" class="col-md-4 control-label">{{ __('Data value') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="indicator_value" type="text" class="form-control" name="indicator_value" wire:model="indicator_value" required autofocus>
                                                        @error('indicator_value') <span class="text-danger">{{ $message }}<br/></span>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row{{ $errors->has('measurement_datetime') ? ' has-error' : '' }}">
                                                    <label for="measurement_datetime" class="col-md-4 control-label">{{ __('Measurement datetime') }} :</label>
                            
                                                    <div class="col-md-6">
                                                        <input id="measurement_datetime" type="datetime-local" class="form-control" name="measurement_datetime" wire:model="measurement_datetime" required autofocus>
                                                        @error('measurement_datetime') <span class="text-danger">{{ $message }}<br/></span>@enderror
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Date time') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Value') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Unit') }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($indicator->DataHistories as $DataHistory)
                                <tr>
                                    <td>#{{ $DataHistory->id }}</td>
                                    <td>{{ $DataHistory->measurement_datetime }}</td>
                                    <td>{{ $DataHistory->indicator_value }}</td>
                                    <td>{{ $indicator->measurement_unit }}</td>
                                    <td><a href="#" wire:click="deleteData({{ $DataHistory->id  }})" ><i class="ni ni-fat-remove text-danger"></i></a></td>
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