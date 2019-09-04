<?php $__env->startSection('title'); ?>
Kết quả tra cứu
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h4><b>Ket qua: <?php echo e($search); ?></b></h4>
                </div>
                
                <?php if($user == null): ?>
                    Không có thí sinh nào mang số báo danh
                <?php else: ?>

                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                Thí sinh: <?php echo e($u->name); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <br>
                <?php $__currentLoopData = $scores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 Đã đạt <?php echo e($s->scores); ?> Điểm
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                <?php endif; ?>

            </div>
        </div>

    </div>

</div>
<!-- end Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.authetication.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/frontend/pages/result.blade.php ENDPATH**/ ?>