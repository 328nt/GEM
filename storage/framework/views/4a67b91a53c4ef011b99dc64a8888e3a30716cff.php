<?php $__env->startSection('title'); ?>
    Sửa thí sinh
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
                        <small>edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php if(count($errors) > 0): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger">
                            <?php echo e($err); ?>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <?php if(session('msg')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('msg')); ?>

                    </div>
                    <?php endif; ?>
                    <form action="admin/user/edit/<?php echo e($user->id); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label>name</label>
                            <input class="form-control" name="name" placeholder="Please Enter Name" value="<?php echo e($user->name); ?>" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Please Enter Email" readonly="" value="<?php echo e($user->email); ?>" />
                        </div>
                        <input type="checkbox" name="changepass" id="changepassword">
                        <div class="form-group">
                            <label>Change password</label>
                            <input class="form-control password" type="password" name="password" placeholder="Please Enter Password" disabled="" />
                        </div>
                        <div class="form-group">
                            <label> RE password</label>
                            <input class="form-control password" type="password" name="repassword" placeholder="Please Enter Password" disabled="" />
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="role" class="form-control" >
                                <option
                                <?php if($user->role == 0): ?>
                                <?php echo e("selected"); ?>

                                <?php endif; ?>

                                 value="0">Member</option>
                                <option
                                <?php if($user->role == 1): ?>
                                <?php echo e("selected"); ?>

                                <?php endif; ?> value="1">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">User Edit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function(){
        $("#changepassword").change(function(){
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
            }
            else
            {
                $(".password").attr('disabled','');
            }
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>