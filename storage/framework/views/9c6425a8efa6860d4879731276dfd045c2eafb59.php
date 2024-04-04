<!-- Post Body -->
<div class="container-xl">
    <?php if(isset($postList) && count($postList) > 0): ?>
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Category Id</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $postList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($post->id); ?></td>
                                    <td><?php echo e($post->post_title); ?></td>
                                    <td class="text-muted"><?php echo e($post->post_content); ?></td>
                                    <td class="text-muted"><?php echo e($post->post_image); ?></td>
                                    <td class="text-muted"><?php echo e($post->category_id); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.post.editShow', $post->id)); ?>">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries
                    </p>

                    <?php if(isset($postList) && count($postList) > 0): ?>
                        <?php echo e($postList->appends(request()->input())->links('Admin.Components.Paginations.Default')); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <h2 class="page-title"> Empty post </h2>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageBodies/PostBody.blade.php ENDPATH**/ ?>