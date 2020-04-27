<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Tag
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('tag.tambah')); ?>" class="btn btn-primary">Input Tag Baru</a>
            <br/>
            <br/>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>URL</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($p->name); ?></td>
                        <td><?php echo e($p->url); ?></td>
                        <td>
                            <a href="<?php echo e(route('tag.edit', $p->id)); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo e(route('tag.hapus', $p->id)); ?>" class="btn btn-danger">Hapus</a>
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