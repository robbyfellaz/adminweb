<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Trending Tag</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo e(route('trendingtag.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title" placeholder="Add Title" required>
                                <?php if($errors->has('title')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('title')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tag</label>
                            <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;" name="tagId">
                                <?php $__currentLoopData = $tagCombo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagComboItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tagComboItem->id); ?>"><?php echo e($tagComboItem->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Custom URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="custom_url" placeholder="Add Custom URL">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Order</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control <?php echo e($errors->has('order') ? ' is-invalid' : ''); ?>" name="order" placeholder="Add Order" required>
                                <?php if($errors->has('order')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('order')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3">Status</label>
                            <div class="col-sm-9">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="status" id="status" checked>
                                    <label class="custom-control-label" for="status"></label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(route('trendingtag')); ?>" class="btn btn-default">Back to list</a>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
$(function () {
    $('.select2').select2()
})
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>