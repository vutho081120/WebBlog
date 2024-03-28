<!-- Category Edit Body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-6">
                <form class="card" action="<?php echo e(route('admin.category.update', $categoryItem->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h3 class="card-title">Category edit</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Category name</label>
                            <div>
                                <?php if($errors->has('categoryName')): ?>
                                    <input type="text" class="form-control is-invalid"
                                        aria-describedby="categoryNameHelp" name="categoryName"
                                        placeholder="Enter category name" value="<?php echo e($categoryItem->category_name); ?>">
                                    <div class="invalid-feedback"><?php echo e($errors->first('categoryName')); ?></div>
                                <?php else: ?>
                                    <input type="text" class="form-control" aria-describedby="categoryNameHelp"
                                        name="categoryName" placeholder="Enter category name"
                                        value="<?php echo e($categoryItem->category_name); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category status</label>
                            <div>
                                <select class="form-select" name="categoryStatus">
                                    <option value="1" <?php if($categoryItem->category_status == 1): ?> selected <?php endif; ?>>Hoạt động
                                    </option>
                                    <option value="0" <?php if($categoryItem->category_status == 0): ?> selected <?php endif; ?>>Không hoạt
                                        động</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-1">
                                    <a href="<?php echo e(route('admin.category.delete', $categoryItem->id)); ?>"
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
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageBodies/CategoryEditBody.blade.php ENDPATH**/ ?>