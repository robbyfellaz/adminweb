

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Trending Tag</h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('trendingtag')); ?>" class="btn btn-success">Refresh</a>
                        <a href="<?php echo e(route('trendingtag.add')); ?>" class="btn btn-primary">Add Trending Tag</a>
                    </div>
                </div>
                <div class="card-body" style="overflow: auto;">
                    <table id="list-trendingtag" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Tag</th>
                                <th>Custom URL</th>
                                <th>Order</th>
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
    $('#list-trendingtag').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo e(route("list.trendingtag")); ?>',
        columns: [
            { data: 'trendingtagtitle', name: 'trendingtag.title'},
            { data: 'tagname', name: 'tag.name' },
            { data: 'custom_url', name: 'custom_url', width: "10%" },
            { data: 'order', name: 'order'},
            { data: 'status', name: 'status' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        "autoWidth": false,
        "responsive": true,
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>