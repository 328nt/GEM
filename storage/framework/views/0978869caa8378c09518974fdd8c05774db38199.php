<?php $__env->startSection('content'); ?>
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($err); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>

                    <?php if(session('msg')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('msg')); ?>

                    </div>
                    <?php endif; ?>
                <form action="admin/news/edit/<?php echo e($news->id); ?>" method="POST" enctype="multipart/form-data" >
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label>Title</label>
                        <input class="form-control" name="title" placeholder="Please Enter Title" value="<?php echo e($news->title); ?>" />
                        </div>
                        <div>
                            <label>Description</label>
                            <input class="form-control" name="des" placeholder="Please Enter Description" value="<?php echo e($news->description); ?>" />
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea id="demo" class="form-control ckeditor" name="content" rows="6" ><?php echo e($news->content); ?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Image</label>
                            <p><img width="400px" src="upload/news/<?php echo e($news->image); ?>"> </p>
                            <input  class="form-control" type="file" name="image" />
                        </div>
                        <div class="form-group">
                            <label>Hightlight</label>
                            <label class="radio-inline">
                                <input name="hightlight" value="0"
                                <?php if($news->hightlight == 0): ?>
                                <?php echo e("checked"); ?>

                                <?php endif; ?>
                                type="radio">no
                            </label>
                            <label class="radio-inline">
                                <input name="hightlight" value="1" 
                                <?php if($news->hightlight == 0): ?>
                                <?php echo e("checked"); ?>

                                <?php endif; ?>
                                type="radio">yes
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">EDIT</button>
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
<?php//AJAX CHECK SELECTION?>
<script>
    $(document).ready(function() {
        $("#Theloai").change(function(){
            var idTheLoai = $(this).val();
            $.get("admin/ajax/loaitin/"+idTheLoai, function(data){
             $("#Loaitin").html(data);
            });
        });
    }); 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gem\resources\views/admin/news/edit.blade.php ENDPATH**/ ?>