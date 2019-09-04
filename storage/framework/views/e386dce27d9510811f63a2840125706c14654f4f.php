<?php $__env->startSection('title'); ?>
Danh sách thí sinh
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div style="overflow-x:auto;" class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DANH SÁCH QUẢN TRỊ
                </h1>
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
                        <th>Email</th>
                        <th>role</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="left">
                        <td><?php echo e($u->id); ?></td>
                        <td><?php echo e($u->name); ?></td>
                        <td><?php echo e($u->email); ?></td>
                        <td>
                                <?php if($u->role == 1): ?>
                                <?php echo e("admin"); ?>

                        <?php else: ?>
                        <?php echo e("member"); ?>

                        <?php endif; ?>

                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/<?php echo e($u->id); ?>">
                                Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/user/edit/<?php echo e($u->id); ?>">Edit</a></td>
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
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/admin/users/listad.blade.php ENDPATH**/ ?>