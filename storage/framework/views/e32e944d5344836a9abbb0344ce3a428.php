<?php if (isset($component)) { $__componentOriginal6601e235b7936ceff41ebaad4ee4bfb7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6601e235b7936ceff41ebaad4ee4bfb7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.logged_on','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.logged_on'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1>About page</h1>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6601e235b7936ceff41ebaad4ee4bfb7)): ?>
<?php $attributes = $__attributesOriginal6601e235b7936ceff41ebaad4ee4bfb7; ?>
<?php unset($__attributesOriginal6601e235b7936ceff41ebaad4ee4bfb7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6601e235b7936ceff41ebaad4ee4bfb7)): ?>
<?php $component = $__componentOriginal6601e235b7936ceff41ebaad4ee4bfb7; ?>
<?php unset($__componentOriginal6601e235b7936ceff41ebaad4ee4bfb7); ?>
<?php endif; ?>
<?php /**PATH C:\Users\phili\Documents\Dev\Web\clients\key_tree_solutions\tree_data_v2\resources\views/pages/about.blade.php ENDPATH**/ ?>