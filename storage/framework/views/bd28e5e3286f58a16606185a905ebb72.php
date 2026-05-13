

<?php $__env->startPush('layout-css'); ?>
<link rel="stylesheet" href="/css/homepage.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('layout-content'); ?>

    <?php if (isset($component)) { $__componentOriginal23281c07c3e33e5173513b279530a6d2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23281c07c3e33e5173513b279530a6d2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-simple','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23281c07c3e33e5173513b279530a6d2)): ?>
<?php $attributes = $__attributesOriginal23281c07c3e33e5173513b279530a6d2; ?>
<?php unset($__attributesOriginal23281c07c3e33e5173513b279530a6d2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23281c07c3e33e5173513b279530a6d2)): ?>
<?php $component = $__componentOriginal23281c07c3e33e5173513b279530a6d2; ?>
<?php unset($__componentOriginal23281c07c3e33e5173513b279530a6d2); ?>
<?php endif; ?>

    <main>
        <?php echo $__env->yieldContent('page-content'); ?>
    </main>

    <?php if (isset($component)) { $__componentOriginal3c5a9ba88e7cd211a66024a8ed1f551e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c5a9ba88e7cd211a66024a8ed1f551e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer-simple','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer-simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c5a9ba88e7cd211a66024a8ed1f551e)): ?>
<?php $attributes = $__attributesOriginal3c5a9ba88e7cd211a66024a8ed1f551e; ?>
<?php unset($__attributesOriginal3c5a9ba88e7cd211a66024a8ed1f551e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c5a9ba88e7cd211a66024a8ed1f551e)): ?>
<?php $component = $__componentOriginal3c5a9ba88e7cd211a66024a8ed1f551e; ?>
<?php unset($__componentOriginal3c5a9ba88e7cd211a66024a8ed1f551e); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\phili\Documents\Dev\Web\clients\key_tree_solutions\tree_data_v2\resources\views/layouts/homepage.blade.php ENDPATH**/ ?>