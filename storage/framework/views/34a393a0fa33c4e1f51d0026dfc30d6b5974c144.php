

<?php $__env->startSection('Title'); ?>
    <title>Trang Chủ</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageHeader'); ?>
    <?php echo $__env->make('Site.Components.PageHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('RegionNews'); ?>
    <?php echo $__env->make('Site.Components.RegionNews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('StreamNews'); ?>
    <?php echo $__env->make('Site.Components.StreamNews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('CategoryNews'); ?>
    <?php echo $__env->make('Site.Components.CategoryNews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageFooter'); ?>
    <?php echo $__env->make('Site.Components.PageFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageJS'); ?>
    <!-- Tabler Core -->
    <script src="<?php echo e(asset('js/Admin/tabler.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/Admin/demo.min.js')); ?>" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        // for sidebar menu entirely but not cover treeview
        $('ul.nav a').filter(function() {
            var path = this.href.replace(top.location.origin, '');
            return path == top.location.pathname;
        }).parent().addClass('active');

        // for treeview
        $('ul.nav a').filter(function() {
            var path = this.href.replace(top.location.origin, '');
            return path == top.location.pathname;
        }).parentsUntil(".nav > .sub-menu").addClass('active');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Site.Layouts.SampleLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Pages/Home.blade.php ENDPATH**/ ?>