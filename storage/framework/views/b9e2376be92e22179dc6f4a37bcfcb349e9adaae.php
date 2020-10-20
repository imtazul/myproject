<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	<?php if(Session::has('success')): ?>
		<span style="color: green;"><?php echo e(Session::get('success')); ?></span>
	<?php endif; ?>
	<h2>Image Uploading</h2>
	<form method="post" action="<?php echo e(URL::to('uploadimage')); ?>" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<input type="file" name="filename[]" id="image" multiple="multiple"><br><br>
	
		<input type="submit" value="Submit">
	</form>
	<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<img src="<?php echo e(URL::to('/uploads/thumbnail/'.$file->filename)); ?>" alt="">
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH D:\SD\myproject\resources\views/upload.blade.php ENDPATH**/ ?>