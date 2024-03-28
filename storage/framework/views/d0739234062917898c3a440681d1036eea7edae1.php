<!-- User Edit Body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-6">
                <form class="card" action="<?php echo e(route('admin.user.update', $userItem->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h3 class="card-title">User edit</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Phone</label>
                            <div>
                                <input type="tel" class="form-control" aria-describedby="phoneHelp" name="phone"
                                    placeholder="Enter phone" value="<?php echo e($userItem->phone); ?>" disabled>
                                <small class="form-hint">We'll never share your phone with anyone else.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <?php if($errors->has('userName')): ?>
                                <input type="text" class="form-control is-invalid" name="userName"
                                    value="<?php echo e($userItem->user_name); ?>" placeholder="User name">
                                <div class="invalid-feedback"><?php echo e($errors->first('userName')); ?></div>
                            <?php else: ?>
                                <label class="form-label">User name</label>
                                <input type="text" class="form-control" name="userName"
                                    value="<?php echo e($userItem->user_name); ?>" placeholder="User name">
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div>
                                <select class="form-select" name="gender">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ" <?php if($userItem->gender == 'Nữ'): ?> selected <?php endif; ?>>Nữ</option>
                                    <option value="Khác" <?php if($userItem->gender == 'Khác'): ?> selected <?php endif; ?>>Khác
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <?php if($errors->has('dateOfBirth')): ?>
                                <label class="form-label">Date of birth</label>
                                <div class="input-icon mb-2">
                                    <input class="form-control is-invalid" placeholder="Select a date"
                                        id="datepicker-icon" name="dateOfBirth" value="<?php echo e($userItem->date_of_birth); ?>">
                                    <div class="invalid-feedback"><?php echo e($errors->first('dateOfBirth')); ?></div>
                                </div>
                            <?php else: ?>
                                <label class="form-label">Date of birth</label>
                                <div class="input-icon mb-2">
                                    <input class="form-control " placeholder="Select a date" id="datepicker-icon"
                                        name="dateOfBirth" value="<?php echo e($userItem->date_of_birth); ?>">
                                    <span
                                        class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                            </path>
                                            <path d="M16 3v4"></path>
                                            <path d="M8 3v4"></path>
                                            <path d="M4 11h16"></path>
                                            <path d="M11 15h1"></path>
                                            <path d="M12 15v3"></path>
                                        </svg>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <div>
                                <select class="form-select" name="role">
                                    <option value="Admin">Admin</option>
                                    <option value="Writer" <?php if($userItem->role == 'Writer'): ?> selected <?php endif; ?>>Người viết
                                        blog</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-1">
                                    <a href="<?php echo e(route('admin.user.delete', $userItem->id)); ?>"
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
            <div class="col-md-6">
                <form class="card" action="<?php echo e(route('admin.user.updatePassword', $userItem->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h3 class="card-title">User update password</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Password</label>
                            <div>
                                <?php if($errors->has('password')): ?>
                                    <input type="password" class="form-control is-invalid" name="password"
                                        placeholder="Password">
                                    <div class="invalid-feedback"><?php echo e($errors->first('password')); ?></div>
                                <?php else: ?>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <small class="form-hint">
                                        Your password must be 8-20 characters long, contain letters and numbers, and
                                        must not contain spaces, special characters, or emoji.
                                    </small>
                                <?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageBodies/UserEditBody.blade.php ENDPATH**/ ?>