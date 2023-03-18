<div class="main-content">
    <?php echo $__env->make('includes.alert-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($User->id); ?></p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/profiles/<?php echo e($User->GetPictureProfile()); ?>" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <?php if($User->validate == 0): ?>
                                            <p class="text-xs font-weight-bold mb-0"><del><?php echo e($User->name); ?></del></p>
                                        <?php else: ?>
                                            <p class="text-xs font-weight-bold mb-0"> <?php echo e($User->name); ?></p>
                                        <?php endif; ?>
                                        
                                    </td>
                                    <td class="text-center">
                                        <?php if($User->validate == 0): ?>
                                            <p class="text-xs font-weight-bold mb-0"><del><?php echo e($User->email); ?></del></p>
                                        <?php else: ?>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo e($User->email); ?></p>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if($User->validate == 0): ?>
                                            <p class="text-xs font-weight-bold mb-0"><del>Admin</del></p>
                                        <?php else: ?>
                                            <p class="text-xs font-weight-bold mb-0">Admin</p>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if($User->validate == 0): ?>
                                            <span class="text-secondary text-xs font-weight-bold"><del><?php echo e($User->GetPrettyCreatedAttribute()); ?></del></span>
                                        <?php else: ?>
                                            <span class="text-secondary text-xs font-weight-bold"><?php echo e($User->GetPrettyCreatedAttribute()); ?> </span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if($User->validate == 0): ?>
                                        <a href="#" wire:click="valide(<?php echo e($User->id); ?>)" class="mx-3 " data-bs-toggle="tooltip"
                                            data-bs-original-title="Valide user">
                                            <i class="cursor-pointer  fas fa-user-check text-success"></i>
                                        </a>
                                        <?php else: ?>
                                        <a href="#" wire:click="invalide(<?php echo e($User->id); ?>)" class="mx-3 " data-bs-toggle="tooltip"
                                            data-bs-original-title="Invalide user">
                                            <i class="cursor-pointer fas fa-user-alt-slash text-danger"></i>
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\laragon\www\GreenSustainAbility\resources\views/livewire/laravel-examples/user-management.blade.php ENDPATH**/ ?>