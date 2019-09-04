<?php $__env->startSection('title'); ?>
    Tra cứu điểm thi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
<form action="search" method="post">
    <?php echo e(csrf_field()); ?>

    <div>
      <input type="text" name="search" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.authetication.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/frontend/pages/search.blade.php ENDPATH**/ ?>