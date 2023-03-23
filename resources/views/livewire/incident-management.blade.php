<div class="main-content">
    @include('includes.alert-result')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('Incidents List') }}</h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NewIncident">
                            {{ __('New Incident') }}
                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewIncident" tabindex="-1" role="dialog" aria-labelledby="NewIncident" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Create Incident Information') }}</h5>
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
                                                <button type="button" wire:click.prevent="storeIncident()" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Date') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Time') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Location') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Description') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Material Type') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Quantity') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Statu') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Creation Date') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($incidents as $incident)
                                    <tr>
                                        <td>{{ $incident->date }}</td>
                                        <td>{{ $incident->time }}</td>
                                        <td>{{ $incident->location }}</td>
                                        <td>{{ $incident->description }}</td>
                                        <td>{{ $incident->material_type }}</td>
                                        <td>{{ $incident->quantity }}</td>
                                        <td>{{ $incident->GetPrettyStatu() }}</td>
                                        <td>{{ $incident->GetPrettyCreatedAttribute() }}</td>
                                        <td>
                                            <!-- View Link -->
                                            <a href="{{ route('incident-management-show', $incident) }}" class="btn bg-gradient-primary btn-block mb-3">{{ __('View') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $incidents->links() }}
                </div>
            </div>
        </div>
    </div>
</div>