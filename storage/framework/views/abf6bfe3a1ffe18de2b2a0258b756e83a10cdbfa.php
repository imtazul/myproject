<!DOCTYPE html>
<html lang="en">
    <head>
       <?php echo $__env->make('admin.includes.double.head ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body class="sb-nav-fixed">
    <?php echo $__env->make('admin.includes.double.nav ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="layoutSidenav">
        
            <?php echo $__env->make('admin.includes.double.sidebar ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="layoutSidenav_content">
               
                <?php echo $__env->yieldContent('content'); ?>
                <?php echo $__env->make('admin.includes.double.footer ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
            </div>
        </div>
        <?php echo $__env->make('admin.includes.double.scripts ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\myproject\resources\views/admin/layouts/double.blade.php ENDPATH**/ ?>