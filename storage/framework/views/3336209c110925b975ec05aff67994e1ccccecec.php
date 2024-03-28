

<?php $__env->startSection('Title'); ?>
    <title>Login</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageBody'); ?>
    <?php echo $__env->make('Site.Components.Login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageJS'); ?>
    <!-- Tabler Core -->
    <script src="<?php echo e(asset('js/Admin/tabler.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/Admin/demo.min.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Site.Layouts.TablerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Pages/Login.blade.php ENDPATH**/ ?>