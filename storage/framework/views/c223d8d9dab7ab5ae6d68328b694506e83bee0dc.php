

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit News</h3>
                </div>
                <form class="form-vertical" method="post" enctype="multipart/form-data" action="<?php echo e(route('news.update', $news->id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title" placeholder="Add Title" value="<?php echo e($news->title); ?>" required>
                                        <?php if($errors->has('title')): ?>
                                        <div class="text-danger">
                                            <?php echo e($errors->first('title')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                    <select class="form-control select2" style="width: 100%;" name="categoryId">
                                        <?php $__currentLoopData = $categoryCombo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryComboItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($categoryComboItem->id); ?>" <?php echo e($categoryComboItem->id == $news->categoryId ? 'selected' : ''); ?>><?php echo e($categoryComboItem->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Synopsis</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?php echo e($errors->has('synopsis') ? ' is-invalid' : ''); ?>" name="synopsis" placeholder="Add Synopsis" value="<?php echo e($news->synopsis); ?>" required>
                                        <?php if($errors->has('synopsis')): ?>
                                        <div class="text-danger">
                                            <?php echo e($errors->first('synopsis')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tag</label>
                                    <div class="col-sm-9">
                                        <select class="select2" multiple="multiple" data-placeholder="Select news tags" name="tagId[]" style="width: 100%;" required>
                                            <?php $__currentLoopData = $tagCombo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagComboItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($tagComboItem->id); ?>" <?php echo e(in_array($tagComboItem->id, json_decode($news->tagId)) ? 'selected' : ''); ?>><?php echo e($tagComboItem->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date Publish</label>
                                    <div class="col-sm-9">
                                        <div class="input-group date form_datetime" data-date="<?php echo e($dateNow); ?>">
                                            <input type="text" class="form-control <?php echo e($errors->has('synopsis') ? ' is-invalid' : ''); ?>" name="datePublish" placeholder="Add Date Publish" value="<?php echo e($news->datePublish); ?>" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text input-group-addon"><i class="glyphicon-remove fas fa-trash"></i></span>
                                                <span class="input-group-text input-group-addon"><i class="glyphicon-th fas fa-th"></i></span>
                                            </div>
                                        </div>
                                        <?php if($errors->has('datePublish')): ?>
                                        <div class="text-danger">
                                            <?php echo e($errors->first('datePublish')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Editor</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" style="width: 100%;" name="editorId" required>
                                        <option value="">-</option>
                                            <?php $__currentLoopData = $userCombo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userComboItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($userComboItem->id); ?>" <?php echo e($userComboItem->id == $news->editorId ? 'selected' : ''); ?>><?php echo e($userComboItem->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3">Is Headline</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="isHeadline" id="isHeadline" <?php echo e($news->isHeadline === "Yes" ? 'checked' : ''); ?>>
                                            <label class="custom-control-label" for="isHeadline"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Reporter</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" style="width: 100%;" name="reporterId">
                                        <option value="">-</option>
                                            <?php $__currentLoopData = $userCombo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userComboItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($userComboItem->id); ?>" <?php echo e($userComboItem->id == $news->reporterId ? 'selected' : ''); ?>><?php echo e($userComboItem->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3">Is Editor Pick</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="isEditorPick" id="isEditorPick" <?php echo e($news->isEditorPick === "Yes" ? 'checked' : ''); ?>>
                                            <label class="custom-control-label" for="isEditorPick"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Photographer</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" style="width: 100%;" name="photographerId">
                                            <option value="">-</option>
                                            <?php $__currentLoopData = $userCombo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userComboItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($userComboItem->id); ?>" <?php echo e($userComboItem->id == $news->photographerId ? 'selected' : ''); ?>><?php echo e($userComboItem->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3">Status</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="status" id="status" <?php echo e($news->status === "Active" ? 'checked' : ''); ?>>
                                            <label class="custom-control-label" for="status"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image Info</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?php echo e($errors->has('imageinfo') ? ' is-invalid' : ''); ?>" name="imageinfo" placeholder="Add Image Info" value="<?php echo e($news->imageinfo); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label class="col-form-label">Content</label>
                                    <?php if($errors->has('content')): ?>
                                    <div class="text-danger">
                                        <?php echo e($errors->first('content')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <textarea class="textarea is-invalid" placeholder="Add Content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content"><?php echo e($contentHtml); ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input <?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>" id="image" name="image">
                                            <label class="custom-file-label" for="image">Upload image</label>
                                            <?php if($errors->has('image')): ?>
                                            <div class="text-danger">
                                                <?php echo e($errors->first('image')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="attachment-block clearfix" style="margin-top: 5px;">
                                            <img class="img-fluid pad" id="image_preview_container" src="<?php echo e($contentImage); ?>" alt="preview image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(route('news')); ?>" class="btn btn-default">Back to list</a>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
// window.onload = function() {
//     if(!window.location.hash) {
//         window.location = window.location + '#loaded';
//         window.location.reload();
//     }
// }
   
$(document).ready(function (e) {
    bsCustomFileInput.init();

    $('#image').change(function(){
        $('#image_preview_container').attr('src', '<?php echo e($contentImage); ?>');
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#image_preview_container').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'});
    $('.textarea').summernote();
    $('.select2').select2();
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>