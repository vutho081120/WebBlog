


<?php $__env->startSection('title'); ?>
    <title>Home</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navBar'); ?>
    <?php echo $__env->make('Admin.Components.PageMenus.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('horizontalBar'); ?>
    <?php echo $__env->make('Admin.Components.PageMenus.horizontalBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
    <?php echo $__env->make('Admin.Components.PageHeaders.simpleHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageBody'); ?>
    <?php echo $__env->make('Admin.Components.PageBodies.chartBody', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.Layouts.sampleLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Pages/home.blade.php ENDPATH**/ ?>