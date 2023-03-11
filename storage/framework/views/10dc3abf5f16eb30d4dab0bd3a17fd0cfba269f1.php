<?php if (isset($component)) { $__componentOriginald8bdefe537b868c30952851c478827a760077823 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layouts\Base::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Layouts\Base::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    <?php if(auth()->guard()->check()): ?>
        
        <?php if(in_array(request()->route()->getName(),['static-sign-up', 'sign-up'],)): ?>
            <?php echo $__env->make('layouts.navbars.guest.sign-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e($slot); ?>

            <?php echo $__env->make('layouts.footers.guest.with-socials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        <?php elseif(in_array(request()->route()->getName(),['sign-in', 'login'],)): ?>
            <?php echo $__env->make('layouts.navbars.guest.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e($slot); ?>

            <?php echo $__env->make('layouts.footers.guest.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif(in_array(request()->route()->getName(),['profile', 'my-profile'],)): ?>
            <?php echo $__env->make('layouts.navbars.auth.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="main-content position-relative bg-green-light">
                <?php echo $__env->make('layouts.navbars.auth.nav-profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div>
                    <?php echo e($slot); ?>

                    <?php echo $__env->make('layouts.footers.auth.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php else: ?>
            <?php echo $__env->make('layouts.navbars.auth.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.navbars.auth.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e($slot); ?>

            <main>
                <div class="container-fluid">
                    <div class="row">
                        <?php echo $__env->make('layouts.footers.auth.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </main>
        <?php endif; ?>
    <?php endif; ?>

    
    <?php if(auth()->guard()->guest()): ?>
        
        <?php if(!auth()->check() && in_array(request()->route()->getName(),['login'],)): ?>
            <?php echo $__env->make('layouts.navbars.guest.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e($slot); ?>

            <div class="mt-5">
                <?php echo $__env->make('layouts.footers.guest.with-socials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            
        <?php elseif(!auth()->check() && in_array(request()->route()->getName(),['sign-up'],)): ?>
            <div>
                <?php echo $__env->make('layouts.navbars.guest.sign-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo e($slot); ?>

                <?php echo $__env->make('layouts.footers.guest.with-socials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8bdefe537b868c30952851c478827a760077823)): ?>
<?php $component = $__componentOriginald8bdefe537b868c30952851c478827a760077823; ?>
<?php unset($__componentOriginald8bdefe537b868c30952851c478827a760077823); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\GreenSustainAbility\resources\views/layouts/app.blade.php ENDPATH**/ ?>