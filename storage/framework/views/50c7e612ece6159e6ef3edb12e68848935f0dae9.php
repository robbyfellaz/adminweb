<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Tag</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo e(route('tag.update', $tag->id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" placeholder="Add Name" value="<?php echo e($tag->name); ?>" required>
                                <?php if($errors->has('name')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('name')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="3" name="desc" placeholder="Add Description"><?php echo e($tag->desc); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(route('tag')); ?>" class="btn btn-default">Back to list</a>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>