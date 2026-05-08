<?php if (isset($component)) { $__componentOriginal829a0ceedc946fd57ec91197d41fb436 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal829a0ceedc946fd57ec91197d41fb436 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.homepage','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.homepage'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal829a0ceedc946fd57ec91197d41fb436)): ?>
<?php $attributes = $__attributesOriginal829a0ceedc946fd57ec91197d41fb436; ?>
<?php unset($__attributesOriginal829a0ceedc946fd57ec91197d41fb436); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal829a0ceedc946fd57ec91197d41fb436)): ?>
<?php $component = $__componentOriginal829a0ceedc946fd57ec91197d41fb436; ?>
<?php unset($__componentOriginal829a0ceedc946fd57ec91197d41fb436); ?>
<?php endif; ?>
<?php /**PATH C:\Users\phili\Documents\Dev\Web\clients\key_tree_solutions\tree_data_v2\resources\views/pages/home.blade.php ENDPATH**/ ?>