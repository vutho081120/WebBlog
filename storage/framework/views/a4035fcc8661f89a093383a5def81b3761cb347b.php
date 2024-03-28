

<?php $__env->startSection('title'); ?>
    <title>Trang Chủ</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
    <?php echo $__env->make('Site.Components.pageHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('regionNews'); ?>
    <?php echo $__env->make('Site.Components.regionNews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('streamNews'); ?>
    <?php echo $__env->make('Site.Components.streamNews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('categoryNews'); ?>
    <?php echo $__env->make('Site.Components.categoryNews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageFooter'); ?>
    <?php echo $__env->make('Site.Components.pageFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Site.Layouts.sampleLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Pages/home.blade.php ENDPATH**/ ?>