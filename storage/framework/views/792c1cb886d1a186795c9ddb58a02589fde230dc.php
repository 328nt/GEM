<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <?php if(session('msg')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('msg')); ?>

                </div>
                <?php endif; ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>View</th>
                            <th>Hightlight</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd gradeX" align="left">
                            <td><?php echo e($ns->id); ?></td>
                            <td>
                            <img width="100px" src="upload/news/<?php echo e($ns->image); ?>" /></td>
                            <td><?php echo e($ns->title); ?></td>
                            <td style="border: 1px solid #00000"><?php echo e($ns->description); ?></td>
                            <td><?php echo e($ns->view); ?></td>
                            <td>
                            <?php if($ns->hightlight == 0): ?>
                            <?php echo e('khong'); ?>

                            <?php else: ?>
                            <?php echo e('co'); ?>

                            <?php endif; ?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/delete/<?php echo e($ns->id); ?>"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/edit/<?php echo e($ns->id); ?>">Edit</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/admin/news/list.blade.php ENDPATH**/ ?>