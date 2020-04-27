<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Tag - <strong>TAMBAH DATA</strong>
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('tag')); ?>" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>
            
            <form method="post" action="<?php echo e(route('tag.store')); ?>">

                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama tag ..">

                    <?php if($errors->has('name')): ?>
                        <div class="text-danger">
                            <?php echo e($errors->first('name')); ?>

                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label>URL</label>
                    <textarea name="url" class="form-control" placeholder="URL tag .."></textarea>

                        <?php if($errors->has('url')): ?>
                        <div class="text-danger">
                            <?php echo e($errors->first('url')); ?>

                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>