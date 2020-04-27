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
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tag Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Tag Name" value="<?php echo e($tag->name); ?>">
                                <?php if($errors->has('name')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('name')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tag URL</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url" placeholder="Tag URL" value="<?php echo e($tag->url); ?>">
                                <?php if($errors->has('url')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('url')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(route('tag')); ?>" class="btn btn-default float-right">Back to list</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>