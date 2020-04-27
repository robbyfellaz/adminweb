<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Pegawai - <strong>EDIT DATA</strong>
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('pegawai')); ?>" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>
            

            <form method="post" action="<?php echo e(route('pegawai.update', $pegawai->id)); ?>">

                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>


                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .." value=" <?php echo e($pegawai->nama); ?>">

                    <?php if($errors->has('nama')): ?>
                        <div class="text-danger">
                            <?php echo e($errors->first('nama')); ?>

                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."> <?php echo e($pegawai->alamat); ?> </textarea>

                        <?php if($errors->has('alamat')): ?>
                        <div class="text-danger">
                            <?php echo e($errors->first('alamat')); ?>

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