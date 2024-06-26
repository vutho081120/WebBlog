

<?php $__env->startSection('Title'); ?>
    <title> Category Edit </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('NavBar'); ?>
    <?php echo $__env->make('Admin.Components.PageMenus.NavBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('HorizontalBar'); ?>
    <?php echo $__env->make('Admin.Components.PageMenus.HorizontalBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageHeader'); ?>
    <?php echo $__env->make('Admin.Components.PageHeaders.TitleHeader', ['title' => 'Category'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageBody'); ?>
    <?php echo $__env->make('Admin.Components.PageBodies.CategoryEditBody', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageJS'); ?>
    <!-- Libs JS -->
    <script src="<?php echo e(asset('libs/Admin/apexcharts/dist/apexcharts.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/js/jsvectormap.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/maps/world.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/maps/world-merc.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/nouislider/dist/nouislider.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/litepicker/dist/litepicker.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/tom-select/dist/js/tom-select.base.min.js')); ?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?php echo e(asset('js/Admin/tabler.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/Admin/demo.min.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.SampleLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Pages/CategoryEdit.blade.php ENDPATH**/ ?>