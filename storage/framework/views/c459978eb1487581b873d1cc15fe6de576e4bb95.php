<!-- Category Create Body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-6">
                <form class="card" action="<?php echo e(route('admin.category.create')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h3 class="card-title">Category create</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Category name</label>
                            <div>
                                <?php if($errors->has('categoryName')): ?>
                                    <input type="text" class="form-control is-invalid"
                                        aria-describedby="categoryNameHelp" name="categoryName"
                                        placeholder="Enter category name">
                                    <div class="invalid-feedback"><?php echo e($errors->first('categoryName')); ?></div>
                                <?php else: ?>
                                    <input type="text" class="form-control" aria-describedby="categoryNameHelp"
                                        name="categoryName" placeholder="Enter category name">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category status</label>
                            <div>
                                <select class="form-select" name="categoryStatus">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Không hoạt động</option>
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
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageBodies/CategoryCreateBody.blade.php ENDPATH**/ ?>