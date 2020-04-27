

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">News Tag</h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('tag')); ?>" class="btn btn-success">Refresh</a>
                        <a href="<?php echo e(route('tag.add')); ?>" class="btn btn-primary">Add Tag</a>
                    </div>
                </div>
                <div class="card-body" style="overflow: auto;">
                    <table class="table table-bordered table-hover" id="list-tag">
                        <thead>
                            <tr>
                                <th>Tag</th>
                                <th>URL</th>
                                <th>Description</th>
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
    $('#list-tag').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo e(route("list.tag")); ?>',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'url', name: 'url' },
            { data: 'desc', name: 'desc' },
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