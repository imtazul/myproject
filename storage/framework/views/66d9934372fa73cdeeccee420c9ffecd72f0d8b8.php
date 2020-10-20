<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Employee Id</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron text-center">
            <h2>Edit Employee</h2>
            <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
            <strong><?php echo e(Session::get('success')); ?></strong>
            </div>

            <?php endif; ?>

        </div>

        <div class="section">
        <form method="post" action="<?php echo e(URL::to('update-employee/'.$employee->id)); ?>">
                <?php echo e(csrf_field()); ?>



                  <div class="form-group">
                    <label for="">Enter Name</label>
                  <input type="text" value="<?php echo e($employee->name); ?>" class="form-control" name="name">
                  </div>

                  <div class="form-group">
                    <label for="">Enter Email</label>
                    <input class="form-control" value="<?php echo e($employee->email); ?>"  type="text" name="email">
                  </div>

                <div class="form-group">
                <label for="">Select Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option <?php echo e(($employee->gender)=="Male" ? 'selected':''); ?> value="Male">Male</option>
                    <option <?php echo e(($employee->gender)=="Female" ? 'selected':''); ?> value="Female">Female</option>
                </select>

                </div>

                <div class="form-group">
                    <label for="">Salary</label>
                    <input class="form-control" value="<?php echo e($employee->salary); ?>" type="number" name="salary">
                </div>

                <div class="form-group">

                    <label for="">Description</label>
                    <textarea class="form-control" value="" name="description" id="description" cols="30" rows="10"><?php echo e($employee->description); ?></textarea>

                </div>

                <div class="form-group">

                    <input  class="btn btn-success" type="submit" value="Update">

                    <a class="btn btn-secondary" href="<?php echo e(URL::to('employees')); ?>">Back</a>
                </div>

            </form>
        </div>
    </div>



</body>
</html><?php /**PATH D:\xampp\htdocs\myproject\resources\views/employee/edit.blade.php ENDPATH**/ ?>