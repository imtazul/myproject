<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>All students</h2>
        <table class="table table-bordered", id="studentstbl">
            <thead class="thead-dark" >
                <th> Name </th>
                <th> Email </th>
                <th> DOB </th>
                <th> Salary </th>
                <th> Contact </th>
                <th> City </th>
                <th> Ip </th>

            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr> 
                    <td><?php echo e($s->name); ?></td>
                    <td><?php echo e($s->email); ?></td>
                    <td><?php echo e($s->dob); ?></td>
                    <td><?php echo e($s->salary); ?></td>
                    <td><?php echo e($s->contact); ?></td>
                    <td><?php echo e($s->city); ?></dh>
                    <td><?php echo e($s->ip_address); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
    
    <script>
        //show datable in DaaTable Style
       $(document).ready(function() {
        $('#studentstbl').DataTable();
       });
    </script>
</body>
</html><?php /**PATH D:\xampp\htdocs\myproject\resources\views/students.blade.php ENDPATH**/ ?>