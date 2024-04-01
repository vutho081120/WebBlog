<!-- Post Edit Body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-6">
                <form class="card" action="<?php echo e(route('admin.post.update', $postItem->id)); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h3 class="card-title">Post edit</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Post title</label>
                            <div>
                                <input type="text" class="form-control" aria-describedby="postTitleHelp"
                                    name="postTitle" placeholder="Enter post title" value="<?php echo e($postItem->post_title); ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <?php if($errors->has('postContent')): ?>
                                <label class="form-label">Post content</label>
                                <textarea id="editor" class="form-control is-invalid" name="postContent" rows="6" placeholder="Content.."
                                    value="<?php echo e($postItem->post_content); ?>"></textarea>
                                <div class="invalid-feedback"><?php echo e($errors->first('postContent')); ?></div>
                            <?php else: ?>
                                <label class="form-label">Post content</label>
                                <textarea id="editor" class="form-control" name="postContent" rows="6" placeholder="Content.."><?php echo e($postItem->post_content); ?></textarea>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <?php if($errors->has('postImage')): ?>
                                <div class="form-label is-invalid">Post image</div>
                                <input type="file" class="form-control" name="postImage"
                                    value="<?php echo e($postItem->post_image); ?>">
                                <div class="invalid-feedback"><?php echo e($errors->first('postImage')); ?></div>
                            <?php else: ?>
                                <div class="form-label is-invalid">Post image</div>
                                <input type="file" class="form-control" name="postImage">
                            <?php endif; ?>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category name</label>
                            <div>
                                <select class="form-select" name="categoryId">
                                    <?php $__currentLoopData = $categoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"
                                            <?php if($postItem->category_id == $category->id): ?> selected <?php endif; ?>>
                                            <?php echo e($category->category_name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-1">
                                    <a href="<?php echo e(route('admin.post.delete', $postItem->id)); ?>"
                                        class="btn btn-danger w-100">
                                        Delete
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageBodies/PostEditBody.blade.php ENDPATH**/ ?>