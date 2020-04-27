

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Breaking News</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo e(route('breakingnews.update', $breakingnews->id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title" placeholder="Add Title" value="<?php echo e($breakingnews->title); ?>" required>
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
                                <input type="text" class="form-control <?php echo e($errors->has('url') ? ' is-invalid' : ''); ?>" name="url" placeholder="Add URL" value="<?php echo e($breakingnews->url); ?>" required>
                                <?php if($errors->has('url')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('url')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Status</label>
                            <div class="col-sm-9">
                                <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="status" id="status" <?php echo e($breakingnews->status === "Active" ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="status"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(route('breakingnews')); ?>" class="btn btn-default">Back to list</a>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>