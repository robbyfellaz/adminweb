

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Breaking News</h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('breakingnews')); ?>" class="btn btn-success">Refresh</a>
                        <a href="<?php echo e(route('breakingnews.add')); ?>" class="btn btn-primary">Add Breaking News</a>
                    </div>
                </div>
                <div class="card-body" style="overflow: auto;">
                    <table class="table table-bordered table-hover" id="list-breakingnews">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Last Modified</th>
                                <th>Created Date</th>
                                <th>Action</th>
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
    $('#list-breakingnews').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo e(route("list.breakingnews")); ?>',
        columns: [
            { data: 'title', name: 'title' },
            { data: 'status', name: 'status' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        "autoWidth": false,
        "responsive": true,
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>