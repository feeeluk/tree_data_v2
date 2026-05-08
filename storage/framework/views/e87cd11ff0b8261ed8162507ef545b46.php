<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?php echo e($environmentLabel); ?> | <?php echo $__env->yieldContent('title'); ?></title>

    
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/general.css">

    
    <?php echo $__env->yieldPushContent('layout-css'); ?>
</head>

<body>
    <?php echo $__env->yieldContent('layout-content'); ?>
</body>
</html>
<?php /**PATH C:\Users\phili\Documents\Dev\Web\clients\key_tree_solutions\tree_data_v2\resources\views/layouts/base.blade.php ENDPATH**/ ?>