<!-- Post Create Body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-6">
                <form class="card" action="<?php echo e(route('admin.post.create')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h3 class="card-title">Post create</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Post title</label>
                            <div>
                                <?php if($errors->has('postTitle')): ?>
                                    <input type="text" class="form-control is-invalid"
                                        aria-describedby="postTitleHelp" name="postTitle"
                                        placeholder="Enter post title">
                                    <div class="invalid-feedback"><?php echo e($errors->first('postTitle')); ?></div>
                                <?php else: ?>
                                    <input type="text" class="form-control" aria-describedby="postTitleHelp"
                                        name="postTitle" placeholder="Enter post title">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <?php if($errors->has('postContent')): ?>
                                <label class="form-label">Post content</label>
                                <textarea id="editor" class="form-control is-invalid" name="postContent" rows="6" placeholder="Content.."></textarea>
                                <div class="invalid-feedback"><?php echo e($errors->first('postContent')); ?></div>
                            <?php else: ?>
                                <label class="form-label">Post content</label>
                                <textarea id="editor" class="form-control" name="postContent" rows="6" placeholder="Content.."></textarea>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <?php if($errors->has('postImage')): ?>
                                <div class="form-label is-invalid">Post image</div>
                                <input type="file" class="form-control" name="postImage">
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
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageBodies/PostCreateBody.blade.php ENDPATH**/ ?>