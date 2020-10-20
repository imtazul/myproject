<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Employee Add</title>
</head>
<body>


    <div class="container">
        <div class="jumbotron text-center">
            <h2>Add Employee</h2>
            <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
            <strong><?php echo e(Session::get('success')); ?></strong>
            </div>

            <?php endif; ?>

        </div>

        <div class="section col-md-8 offset-md-2">
        <form method="post" action="<?php echo e(URL::to('store-employee')); ?>">
                <?php echo e(csrf_field()); ?>


                  <div class="form-group">
                    <label for="">Enter Name</label>
                  <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name" >
                    <?php if($errors->first('name')): ?>
                    <div class="alert alert-danger">
                        <?php echo e($errors->first('name')); ?>

                    </div>
                        <?php endif; ?>
                  </div>

                  <div class="form-group">
                    <label for="">Enter Email</label>
                    <input class="form-control" type="text" value="<?php echo e(old('email')); ?>" name="email" >
                    <?php if($errors->first('email')): ?>
                    <div class="alert alert-danger">
                        <?php echo e($errors->first('email')); ?>

                    </div>
                        <?php endif; ?>
                  </div>

                <div class="form-group">

                <label for="">Select Gender</label>
                <select class="form-control" name="gender" value="<?php echo e(old('gender')); ?>" id="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <?php if($errors->first('gender')): ?>
                <div class="alert alert-danger">
                        <?php echo e($errors->first('gender')); ?>

                    </div>
                        <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="">Salary</label>
                    <input class="form-control" type="number" value="<?php echo e(old('salary')); ?>" name="salary" id="">

                    <?php if($errors->first('salary')): ?>
                    <div class="alert alert-danger">
                        <?php echo e($errors->first('salary')); ?>

                    </div>
                        <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="">Date of Birth</label>
                    <input class="form-control" type="date" value="<?php echo e(old('name')); ?>" name="dob" id="">
                    <?php if($errors->first('dob')): ?>
                    <div class="alert alert-danger">
                        <?php echo e($errors->first('dob')); ?>

                    </div>
                        <?php endif; ?>
                </div>


                <!-- <div class="form-group">

                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

                </div> -->

                <div class="form-group">

                    <input  class="btn btn-success" type="submit" value="Add">
                </div>

            </form>
            
            <div>
                <!--show validation error-->

        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
         </div>
        <?php endif; ?>
            
</div>
            
        </div>
    </div>

</body>
</html><?php /**PATH D:\SD\myproject\resources\views/employee/add.blade.php ENDPATH**/ ?>