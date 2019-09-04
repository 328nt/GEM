<?php $__env->startSection('title'); ?>
    Đăng ký dự thi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(count($errors)>0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
                <?php echo e($err); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p class="title">Đăng ký dự thi</p></div>

                <div class="card-body">
                    <form method="POST" action="register">
                        <?php echo csrf_field(); ?>
                        <div>Thông Tin thí sinh</div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tên')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Ví dụ: Thu, Huy.."
                                    class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name"
                                    value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Họ đệm')); ?></label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" placeholder="Ví dụ: Nguyễn Thị, Trần Minh..."
                                    class="form-control <?php if ($errors->has('lastname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lastname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="lastname"
                                    value="<?php echo e(old('lastname')); ?>" required autocomplete="lastname">

                                <?php if ($errors->has('lastname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lastname'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Ngày sinh')); ?></label>

                            <div class="col-md-6">
                                <div class="col-third">
                                    <input type="number" placeholder="DD" name="day" value="<?php echo e(old('day')); ?>"
                                        class="<?php echo e($errors->has('day') ? 'is-invalid' : ''); ?>" required />
                                </div>
                                <div class="col-third">
                                    <input type="number" placeholder="MM" name="month" value="<?php echo e(old('month')); ?>"
                                        class="<?php echo e($errors->has('month') ? 'is-invalid' : ''); ?>" required />
                                </div>
                                <div class="col-third">
                                    <input type="number" placeholder="YYYY" name="year" value="<?php echo e(old('year')); ?>"
                                        class="<?php echo e($errors->has('year') ? 'is-invalid' : ''); ?>" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mật khẩu')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Tối thiểu 6 ký tự"
                                    class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password"
                                    required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nhập lại mật khẩu')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="repassword" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Địa chỉ')); ?></label>

                            <div class="col-md-6">
                                <input id="address" placeholder="Ví dụ: 128 Nguyễn Thái Học" type="text"
                                    class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address"
                                    value="<?php echo e(old('address')); ?>" required autocomplete="address">

                                <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="district"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Quận, Huyện')); ?></label>

                            <div class="col-md-6">
                                <input id="district" placeholder="Ví dụ: Đống Đa" type="text"
                                    class="form-control <?php if ($errors->has('district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('district'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="district"
                                    value="<?php echo e(old('district')); ?>" required autocomplete="district">

                                <?php if ($errors->has('district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('district'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tỉnh, Thành phố')); ?></label>

                            <div class="col-md-6">
                                <input id="city" type="text" placeholder="Ví dụ: Hà Nội.."
                                    class="form-control <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="city"
                                    value="<?php echo e(old('city')); ?>" required autocomplete="city">

                                <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6" style="text-align: right">
                                    <label for="class" class="col-md-4 col-form-label"><?php echo e(__('Lớp')); ?></label>
                                        <input id="class" type="text" class="right form-control <?php if ($errors->has('class')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('class'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                            name="class" value="<?php echo e(old('class')); ?>" required autocomplete="class">
                                        <?php if ($errors->has('class')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('class'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="col-md-6">
                            <label for="grade" class="col-md-4 col-form-label"><?php echo e(__('Khối')); ?></label>
                                <input id="grade" type="text" class="right form-control <?php if ($errors->has('grade')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grade'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    name="grade" value="<?php echo e(old('grade')); ?>" required autocomplete="grade">
                                <?php if ($errors->has('grade')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grade'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Trường')); ?></label>

                            <div class="col-md-6">
                                <input id="school" type="text"
                                    class="form-control <?php if ($errors->has('school')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('school'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="school"
                                    value="<?php echo e(old('school')); ?>" required autocomplete="school">

                                <?php if ($errors->has('school')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('school'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <hr>
                        <div>Thông tin phụ huynh</div>
                        <div class="form-group row">
                            <label for="parentname"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tên phụ huynh')); ?></label>

                            <div class="col-md-6">
                                <input id="parentname" type="text" placeholder="Ví dụ: Trần Văn Mùi"
                                    class="form-control <?php if ($errors->has('parentname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('parentname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="parentname"
                                    value="<?php echo e(old('parentname')); ?>" required autocomplete="parentname">

                                <?php if ($errors->has('parentname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('parentname'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Địa chỉ Email')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Ví dụ: abc@gmail.com"
                                    class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email"
                                    value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Số điện thoại phụ huynh')); ?></label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" placeholder="Ví dụ: 0988888888"
                                    class="form-control <?php if ($errors->has('mobile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mobile'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="mobile"
                                    value="<?php echo e(old('mobile')); ?>" required autocomplete="mobile">

                                <?php if ($errors->has('mobile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mobile'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Đăng ký')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.authetication.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/frontend/authetication/register.blade.php ENDPATH**/ ?>