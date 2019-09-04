<!DOCTYPE html>
<html>

<head>
    <title>GEM - Import</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Import database
            </div>
            <?php if(session('msg')): ?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
              </div>
            <?php endif; ?>
            <div class="card-body">
                <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="<?php echo e(route('export')); ?>">Export User Data</a>
                </form>


                <form action="<?php echo e(route('importscores')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                </form>

            </div>
            <div>

                <form action="<?php echo e(route('importmember')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import Member Data</button>
                </form>
            </div>
            <hr>
            <div><p>update table member</p></div>
            <div>

                <form action="<?php echo e(route('updatemember')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">update Member Data</button>
                    <a class="btn btn-warning" href="<?php echo e(route('exportmember')); ?>">Export User Data</a>
                </form>
            </div>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>sbd</th>
                        <th>name</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                    <th><?php echo e($member->id); ?></th>
                    <th><?php echo e($member->sbd); ?></th>
                    <th><?php echo e($member->name); ?></th>
                    <th><?php echo e($member->email); ?></th>
                    <th><?php echo e($member->day); ?></th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <td>no users found.</td>
                    <?php endif; ?>
                </tbody>
            </table>
            
        </div>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\gem\resources\views/import.blade.php ENDPATH**/ ?>