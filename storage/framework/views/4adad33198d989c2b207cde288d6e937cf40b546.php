<?php $__env->startSection('title'); ?>
Danh sách thí sinh
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div style="overflow-x:auto;" class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>

            <div style="text-align: right; padding-right: 40px;">
                <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input style="width:30%; display:inline" type="file" name="file" class="form-control">
                    <br><br>
                    <button class="btn btn-success">Nhập dữ liệu thí sinh</button>
                    <a class="btn btn-warning" href="<?php echo e(route('export')); ?>">Xuất danh sách thí sinh</a>
                </form>
                <br>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(session('msg')): ?>
            <div class="alert alert-success">
                <?php echo e(session('msg')); ?>

            </div>
            <?php endif; ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Full Name</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th>Lớp</th>
                        <th>Khối</th>
                        <th>trường</th>
                        <th>Họ tên bố, mẹ</th>
                        <th>Email</th>
                        <th>sđt</th>
                        <th>link</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="left">
                        <td><?php echo e($u->id); ?></td>
                        <td><?php echo e($u->name); ?></td>
                        <td><?php echo e($u->fullname); ?></td>
                        <td><?php echo e($u->birthday); ?></td>
                        <td><?php echo e($u->address); ?></td>
                        <td><?php echo e($u->class); ?></td>
                        <td><?php echo e($u->grade); ?></td>
                        <td><?php echo e($u->school); ?></td>
                        <td><?php echo e($u->parentname); ?></td>
                        <td><?php echo e($u->email); ?></td>
                        <td><?php echo e($u->mobile); ?></td>
                        <td><?php echo e($u->link); ?></td>
                        
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/<?php echo e($u->id); ?>">
                                Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/user/editmembers/<?php echo e($u->id); ?>">Edit</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php $__env->startSection('script'); ?>
        <script>
                $(function () {
                  $('#example1').DataTable()
                  $('#example2').DataTable({
                    'paging'      : true,
                    'lengthChange': false,
                    'searching'   : false,
                    'ordering'    : true,
                    'info'        : true,
                    'autoWidth'   : false
                  })
                })
              </script>
        <?php $__env->stopSection(); ?>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/admin/users/list.blade.php ENDPATH**/ ?>