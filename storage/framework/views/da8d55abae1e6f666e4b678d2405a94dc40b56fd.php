<?php $__env->startSection('title'); ?>
Thông tin thí sinh
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">

<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row carousel-holder">
            <?php if(count($errors)>0): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger">
                        <?php echo e($err); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php if(session('msg')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('msg')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
            <?php endif; ?>
        </div>
    <div class="row carousel-holder">
        <div class="col-md-4">
            <?php if($scores == Null): ?>
                Banj chwa co didemr
            <?php else: ?>
                
            <p>Điểm của bạn là: <?php echo e($scores); ?> </p>
            <?php endif; ?>
            <?php if($user->link == null): ?>

            <p>Bạn chưa cập nhật link video bài thi</p>
            <?php else: ?>
            <p>Link dự thi của bạn</p><br>
            <p><a href="<?php echo e($link = $user->link); ?>"><?php echo e($link); ?></a></p>
                    <?php if(substr($link, 12, 7) === 'youtube'): ?>
                        
                <iframe width="100%" height="40%" src="https://www.youtube.com/embed/<?php echo e(substr($link,-11)); ?>"></iframe>
                    <?php else: ?>
                <embed width="100%" src="https://drive.google.com/file/d/<?php echo e(substr($link,-33)); ?>/preview">
                    <?php endif; ?>
            <br>
            <?php endif; ?>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Thông tin thí sinh</div>
                        <hr>
                        <div class="panel-body">
                            <div>
                                <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Username" name="name"
                                    aria-describedby="basic-addon1" value="<?php echo e($user->fullname); ?>" disabled>
                            </div>
                            <div>
                                <label>Ngày sinh</label>
                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                    value="<?php echo e($user->birthday); ?>" disabled>
                            </div>
                            <div>
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                    value="<?php echo e($user->address); ?> <?php echo e($user->district); ?> <?php echo e($user->city); ?>"
                                    disabled>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label>Lớp</label>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1"
                                        value="<?php echo e($user->class); ?>" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label>Khối</label>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1"
                                        value="<?php echo e($user->grade); ?>" disabled>
                                </div>
                            </div>
                            <div>
                                <label>Trường</label>
                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                    value="<?php echo e($user->school); ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Thông Tin Phụ Huynh</p>
                    <hr>
                    <div>
                        <label>Tên bố(mẹ)</label>
                        <input type="text" class="form-control" aria-describedby="basic-addon1" disabled
                            value="<?php echo e($user->parentname); ?>">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" class="form-control" value="<?php echo e($user->email); ?>"
                            aria-describedby="basic-addon1" disabled>
                    </div>
                    <div>
                        <label>Số điện thoại liên lạc</label>
                        <input type="email" class="form-control" value="<?php echo e($user->mobile); ?>"
                            aria-describedby="basic-addon1" disabled>
                    </div>
                    <hr>
                    <div>
                        <p>Nếu có bất cứ thông tin nào sai xin vui lòng liên hệ với IEG theo hotline: 1900.0000</p>
                    </div>
                </div>
            </div>
            <hr>
            <form action="account/<?php echo e($user->id); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div><b>Các bạn vui lòng cập nhật link video dự thi</b></div>
                <div>
                    <label>Link dự thi (link Youtube hoặc driver)</label>
                    <input type="text" class="form-control" placeholder="Youtube.com/abcxyz" name="link"
                        aria-describedby="basic-addon1">
                </div>
                <button type="submit" class="btn btn-default">Cập nhật link dự thi</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.authetication.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/frontend/authetication/account.blade.php ENDPATH**/ ?>