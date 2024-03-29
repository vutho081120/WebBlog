

<?php $__env->startSection('Title'); ?>
    <title> Category Create </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('AlertifyCss'); ?>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
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
    <?php echo $__env->make('Admin.Components.PageBodies.CategoryCreateBody', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script type="text/javascript">
        <?php if(session('status')): ?>
            alertify.set('notifier', 'position', 'top-right');
            alertify.success("<?php echo e(session('status')); ?>");
        <?php endif; ?>

        <?php if(session('error')): ?>
            alertify.set('notifier', 'position', 'top-right');
            alertify.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.SampleLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Pages/CategoryCreate.blade.php ENDPATH**/ ?>