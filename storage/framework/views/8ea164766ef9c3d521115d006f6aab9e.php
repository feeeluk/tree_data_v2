

<?php $__env->startSection('page-content'); ?>

<div class="loginDiv">

    <form action="" class="loginForm">

        <table class="loginTable">

            <tr>
                <td class="loginTableCol1">Username:</td>
                <td class="loginTableCol3"><input type="text"></td>
            </tr>

            <tr>
                <td class="loginTableCol1">Password:</td>
                <td class="loginTableCol3"><input type="text"></td>
            </tr>

            <tr>
                <td class="loginTableCol1"></td>
                <td class="loginTableCol3"><input type="submit" value="Log in"><input type="button" value="Cancel"></td>
            </tr>
            
        </table>

    </form>

</div>
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homepage', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\phili\Documents\Dev\Web\clients\key_tree_solutions\tree_data_v2\resources\views/pages/home.blade.php ENDPATH**/ ?>