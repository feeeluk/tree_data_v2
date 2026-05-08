<?php if (isset($component)) { $__componentOriginalcc6cf8c0c767853c1d6c226b0af7de7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc6cf8c0c767853c1d6c226b0af7de7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.user','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1>About page</h1>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc6cf8c0c767853c1d6c226b0af7de7d)): ?>
<?php $attributes = $__attributesOriginalcc6cf8c0c767853c1d6c226b0af7de7d; ?>
<?php unset($__attributesOriginalcc6cf8c0c767853c1d6c226b0af7de7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc6cf8c0c767853c1d6c226b0af7de7d)): ?>
<?php $component = $__componentOriginalcc6cf8c0c767853c1d6c226b0af7de7d; ?>
<?php unset($__componentOriginalcc6cf8c0c767853c1d6c226b0af7de7d); ?>
<?php endif; ?>
<?php /**PATH C:\Users\phili\Documents\Dev\Web\clients\key_tree_solutions\tree_data_v2\resources\views/pages/about.blade.php ENDPATH**/ ?>