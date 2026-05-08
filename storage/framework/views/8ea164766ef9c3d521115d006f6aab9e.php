

<?php $__env->startSection('page-content'); ?>

    <h1>Home page</h1>

    <?php if (isset($component)) { $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8d22cb0bbc2c20a18faee8523755af5 = $attributes; } ?>
<?php $component = App\View\Components\Box::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Box::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        This is inside the box.
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8d22cb0bbc2c20a18faee8523755af5)): ?>
<?php $attributes = $__attributesOriginalf8d22cb0bbc2c20a18faee8523755af5; ?>
<?php unset($__attributesOriginalf8d22cb0bbc2c20a18faee8523755af5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5)): ?>
<?php $component = $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5; ?>
<?php unset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8d22cb0bbc2c20a18faee8523755af5 = $attributes; } ?>
<?php $component = App\View\Components\Box::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Box::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        This is another box.
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8d22cb0bbc2c20a18faee8523755af5)): ?>
<?php $attributes = $__attributesOriginalf8d22cb0bbc2c20a18faee8523755af5; ?>
<?php unset($__attributesOriginalf8d22cb0bbc2c20a18faee8523755af5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5)): ?>
<?php $component = $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5; ?>
<?php unset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homepage', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\phili\Documents\Dev\Web\clients\key_tree_solutions\tree_data_v2\resources\views/pages/home.blade.php ENDPATH**/ ?>