<!-- Category Body -->
<div class="container-xl">
    <?php if(isset($categoryList) && count($categoryList) > 0): ?>
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>User Id</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $categoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($category->id); ?></td>
                                    <td><?php echo e($category->category_name); ?></td>
                                    <td>
                                        <?php if($category->category_status == 1): ?>
                                            Hoạt động
                                        <?php elseif($category->category_status == 0): ?>
                                            Không hoạt động
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($category->user_id); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.category.editShow', $category->id)); ?>">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries
                    </p>

                    <?php if(isset($categoryList) && count($categoryList) > 0): ?>
                        <?php echo e($categoryList->appends(request()->input())->links('Admin.Components.Paginations.Default')); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <h2 class="page-title"> Empty category </h2>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageBodies/CategoryBody.blade.php ENDPATH**/ ?>