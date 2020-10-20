
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php echo $__env->make('admin.includes.single.head ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body class="bg-primary">
        
    <?php echo $__env->yieldContent('login'); ?>
        
    </body>
    <?php echo $__env->make('admin.includes.single.scripts ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>
<?php /**PATH D:\xampp\htdocs\myproject\resources\views/admin/layouts/single.blade.php ENDPATH**/ ?>