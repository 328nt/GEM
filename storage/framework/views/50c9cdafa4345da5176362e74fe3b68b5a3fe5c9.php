<?php $__env->startSection('title'); ?>
    Thêm thí sinh
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
                        <small>Add</small>
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
                    <form action="<?php echo e(route('addmembers')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="name" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Tên đệm</label>
                            <input class="form-control" name="lastname" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input class="form-control" type="password" name="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label> RE password</label>
                            <input class="form-control" type="password" name="repassword" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input class="form-control" name="birthday" placeholder="dd/mm/yyyy" />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="address" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Quận, huyện</label>
                            <input class="form-control" name="district" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Tỉnh, Thành</label>
                            <input class="form-control" name="city" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Lớp</label>
                            <input class="form-control" name="class" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Khối</label>
                            <input class="form-control" name="grade" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Trường</label>
                            <input class="form-control" name="school" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Họ tên phụ huynh</label>
                            <input class="form-control" name="parentname" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Điện thoại </label>
                            <input class="form-control" name="mobile" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Link dự thi</label>
                            <input class="form-control" name="link" placeholder="Please Enter Name" />
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
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
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/admin/users/addmembers.blade.php ENDPATH**/ ?>