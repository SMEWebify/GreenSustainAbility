<div <?php echo e($attributes->merge(['class' => $makeAlertClass()])); ?>>

    
        
        <?php if(! empty($title) || ! empty($icon)): ?>
                <?php if(! empty($icon)): ?>
                <span class="alert-icon"><i class="icon <?php echo e($icon); ?>"></i></span>
                <?php endif; ?>

                <?php if(! empty($title)): ?>
                <strong><?php echo e($title); ?></strong>
                <?php endif; ?>
        <?php endif; ?>

    <span class="alert-text">
        
        <?php echo e($slot); ?>

    </span>

    
    <?php if(isset($dismissable)): ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <?php endif; ?>
</div><?php /**PATH C:\laragon\www\GreenSustainAbility\resources\views/components/widget/alert.blade.php ENDPATH**/ ?>