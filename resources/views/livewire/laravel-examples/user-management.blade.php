<div class="main-content">
    @include('includes.alert-result')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('ID') }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        {{ __('Photo') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Name') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Email') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Role') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Creation Date') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Action') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($Users as $User)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $User->id }}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/profiles/{{ $User->GetPictureProfile() }}" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        @if ($User->validate == 0)
                                            <p class="text-xs font-weight-bold mb-0"><del>{{ $User->name }}</del></p>
                                        @else
                                            <p class="text-xs font-weight-bold mb-0"> {{ $User->name }}</p>
                                        @endif
                                        
                                    </td>
                                    <td class="text-center">
                                        @if ($User->validate == 0)
                                            <p class="text-xs font-weight-bold mb-0"><del>{{ $User->email }}</del></p>
                                        @else
                                            <p class="text-xs font-weight-bold mb-0">{{ $User->email }}</p>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($User->validate == 0)
                                            <p class="text-xs font-weight-bold mb-0"><del>Admin</del></p>
                                        @else
                                            <p class="text-xs font-weight-bold mb-0">Admin</p>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($User->validate == 0)
                                            <span class="text-secondary text-xs font-weight-bold"><del>{{ $User->GetPrettyCreatedAttribute() }}</del></span>
                                        @else
                                            <span class="text-secondary text-xs font-weight-bold">{{ $User->GetPrettyCreatedAttribute() }} </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($User->validate == 0)
                                        <a href="#" wire:click="valide({{ $User->id }})" class="mx-3 " data-bs-toggle="tooltip"
                                            data-bs-original-title="Valide user">
                                            <i class="cursor-pointer  fas fa-user-check text-success"></i>
                                        </a>
                                        @else
                                        <a href="#" wire:click="invalide({{ $User->id }})" class="mx-3 " data-bs-toggle="tooltip"
                                            data-bs-original-title="Invalide user">
                                            <i class="cursor-pointer fas fa-user-alt-slash text-danger"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
