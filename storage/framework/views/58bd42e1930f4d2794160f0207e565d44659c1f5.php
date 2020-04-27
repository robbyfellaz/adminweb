<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Pegawai
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('pegawai.tambah')); ?>" class="btn btn-primary">Input Pegawai Baru</a>
            <br/>
            <br/>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($p->nama); ?></td>
                        <td><?php echo e($p->alamat); ?></td>
                        <td>
                            <a href="<?php echo e(route('pegawai.edit', $p->id)); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo e(route('pegawai.hapus', $p->id)); ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>