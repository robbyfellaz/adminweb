

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo e(route('user.update', $user->id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" placeholder="Add Name" value="<?php echo e($user->name); ?>" required>
                                <?php if($errors->has('name')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('name')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">E-mail</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" placeholder="Add E-mail" value="<?php echo e($user->email); ?>"required>
                                <?php if($errors->has('email')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('email')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control <?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" placeholder="Add Phone" value="<?php echo e($user->phone); ?>" required>
                                <?php if($errors->has('phone')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('phone')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Group</label>
                            <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;" name="groupId">
                                <?php $__currentLoopData = $groupCombo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupComboItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($groupComboItem->id); ?>" <?php echo e($groupComboItem->id == $user->groupId ? 'selected' : ''); ?>><?php echo e($groupComboItem->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Status</label>
                            <div class="col-sm-9">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="status" id="status" <?php echo e($user->status === "Active" ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="status"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="Add Password">
                                <?php if($errors->has('password')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('password')); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password Confirmation</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Add Password Confirmation">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(route('user')); ?>" class="btn btn-default">Back to list</a>
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