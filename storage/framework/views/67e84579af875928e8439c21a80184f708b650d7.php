<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Employee List</title>

    <style>
        .modal{
            color: #000;
}
    </style>

</head>
<body>

    <div class="container">
        <div class="jumbotron text-center">
            <h2>List of Employee</h2>
            

            <div class="section">

<div class="table-responsive">
<a class="btn btn-primary" href="<?php echo e(URL::to('employee-add')); ?>">Add</a>
<table class="table table-hover table-dark">

    <thead>

        <th> Name</th>
        <th>Email </th>
        <th>Gender</th>
        <th>Salary</th>
        <th>Description </th>
        <th> Actions </th>
    </thead>

    <tbody>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

       <tr>
       <td> <?php echo e($e->name); ?></>
        <td> <?php echo e($e->email); ?></td>
        <td> <?php echo e($e->gender); ?></td>
        <td><?php echo e($e->salary); ?> </td>
        <td> <?php echo e($e->description); ?></td>
        <td>
                        <a class="btn btn-secondary" href="<?php echo e(URL::to('edit-employee/'.$e->id)); ?> ">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal<?php echo e($e->id); ?>">Delete </button>

                        <!-- The Modal -->
                    <div class="modal" id="modal<?php echo e($e->id); ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Confirmation</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                              are you sure to delete <b> <i><?php echo e($e->name); ?></i></b> ?
                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                              <a class="btn btn-success" href="<?php echo e(URL::to('delete-employee/'.$e->id)); ?>">Yes</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>

                            </div>
                          </div>
                        </div>
                    </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
</div>

</div>
</div>
</body>
</html><?php /**PATH D:\xampp\htdocs\myproject\resources\views/employee/list.blade.php ENDPATH**/ ?>