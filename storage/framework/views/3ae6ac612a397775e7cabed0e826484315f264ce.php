        <?php if(session('success')): ?>
        <?php if (isset($component)) { $__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Widget\Alert::class, ['theme' => 'success','title' => 'Done','dismissable' => true] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Widget\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(session('success')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7)): ?>
<?php $component = $__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7; ?>
<?php unset($__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if($errors->count()): ?>
            <?php if (isset($component)) { $__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Widget\Alert::class, ['theme' => 'info','title' => 'Warning','dismissable' => true] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Widget\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> <?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7)): ?>
<?php $component = $__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7; ?>
<?php unset($__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
            <?php if (isset($component)) { $__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Widget\Alert::class, ['theme' => 'warning','title' => 'Warning','dismissable' => true] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Widget\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php echo e(session('error')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7)): ?>
<?php $component = $__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7; ?>
<?php unset($__componentOriginalcf202661934b36f26e144a33752693ef3f3870c7); ?>
<?php endif; ?>
        <?php endif; ?><?php /**PATH C:\laragon\www\GreenSustainAbility\resources\views/includes/alert-result.blade.php ENDPATH**/ ?>