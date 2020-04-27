

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Newsletter</h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('newsletter')); ?>" class="btn btn-success">Refresh</a>
                    </div>
                </div>
                <div class="card-body" style="overflow: auto;">
                    <table class="table table-bordered table-hover" id="list-newsletter">
                        <thead>
                            <tr>
                                <th>E-mail</th>
                                <th>Created Date</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
$(function() {
    $('#list-newsletter').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo e(route("list.newsletter")); ?>',
        columns: [
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
        ],
        "autoWidth": false,
        "responsive": true,
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>