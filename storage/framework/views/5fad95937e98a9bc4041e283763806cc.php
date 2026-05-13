

<?php $__env->startSection('page-content'); ?>

    <h1>Example of what an admin user might see when they are logged in:</h1>

    <div class="box_container">

        <?php if (isset($component)) { $__componentOriginalb823c3edc6fddf766a702863b793dcc6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb823c3edc6fddf766a702863b793dcc6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.box','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            Example of a business
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb823c3edc6fddf766a702863b793dcc6)): ?>
<?php $attributes = $__attributesOriginalb823c3edc6fddf766a702863b793dcc6; ?>
<?php unset($__attributesOriginalb823c3edc6fddf766a702863b793dcc6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb823c3edc6fddf766a702863b793dcc6)): ?>
<?php $component = $__componentOriginalb823c3edc6fddf766a702863b793dcc6; ?>
<?php unset($__componentOriginalb823c3edc6fddf766a702863b793dcc6); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalb823c3edc6fddf766a702863b793dcc6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb823c3edc6fddf766a702863b793dcc6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.box','data' => ['title' => 'Test','name' => 'Phil','date' => 'Today']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Test','name' => 'Phil','date' => 'Today']); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb823c3edc6fddf766a702863b793dcc6)): ?>
<?php $attributes = $__attributesOriginalb823c3edc6fddf766a702863b793dcc6; ?>
<?php unset($__attributesOriginalb823c3edc6fddf766a702863b793dcc6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb823c3edc6fddf766a702863b793dcc6)): ?>
<?php $component = $__componentOriginalb823c3edc6fddf766a702863b793dcc6; ?>
<?php unset($__componentOriginalb823c3edc6fddf766a702863b793dcc6); ?>
<?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\phili\Documents\Dev\Web\clients\key_tree_solutions\tree_data_v2\resources\views/pages/test.blade.php ENDPATH**/ ?>