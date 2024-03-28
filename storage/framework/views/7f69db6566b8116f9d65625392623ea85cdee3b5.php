<!-- User Body -->
<div class="page-body">
    <div class="container-xl">
        <?php if(isset($userList) && count($userList) > 0): ?>
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Phone</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Date Of Birth</th>
                                    <th>Role</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->phone); ?></td>
                                        <td class="text-muted"><?php echo e($user->user_name); ?></td>
                                        <td class="text-muted"><?php echo e($user->gender); ?></td>
                                        <td class="text-muted"><?php echo e($user->date_of_birth); ?></td>
                                        <td class="text-muted"><?php echo e($user->role); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.user.editShow', $user->id)); ?>">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex align-items-center">
                        <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries
                        </p>

                        <?php if(isset($userList) && count($userList) > 0): ?>
                            <?php echo e($userList->appends(request()->input())->links('Admin.Components.Paginations.Default')); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <h2 class="page-title"> Empty category </h2>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageBodies/UserBody.blade.php ENDPATH**/ ?>