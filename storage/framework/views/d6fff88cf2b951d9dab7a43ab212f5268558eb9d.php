<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Recommended</h3>
                </div>
                <form class="form-vertical" method="post" enctype="multipart/form-data" action="<?php echo e(route('recommended.update', $recommended->id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title" placeholder="Add Title" value="<?php echo e($recommended->title); ?>" required>
                                <?php if($errors->has('title')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('title')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php echo e($errors->has('url') ? ' is-invalid' : ''); ?>" name="url" placeholder="Add URL" value="<?php echo e($recommended->url); ?>"required>
                                <?php if($errors->has('url')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('url')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <div class="attachment-block clearfix">
                                    <img class="img-fluid pad" id="image_preview_container" src="<?php echo e($contentImage); ?>" alt="preview image">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>" id="image" name="image">
                                    <label class="custom-file-label" for="image">Upload image</label>
                                    <?php if($errors->has('image')): ?>
                                    <div class="text-danger">
                                        <?php echo e($errors->first('image')); ?>

                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;" name="categoryId">
                                <?php $__currentLoopData = $categoryCombo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryComboItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($categoryComboItem->id); ?>" <?php echo e($categoryComboItem->id == $recommended->categoryId ? 'selected' : ''); ?>><?php echo e($categoryComboItem->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3">Status</label>
                            <div class="col-sm-9">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="status" id="status" <?php echo e($recommended->status === "Active" ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="status"></label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(route('recommended')); ?>" class="btn btn-default">Back to list</a>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
$(document).ready(function (e) {
    bsCustomFileInput.init();

    $('#image').change(function(){
        $('#image_preview_container').attr('src', '<?php echo e($contentImage); ?>');
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#image_preview_container').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>