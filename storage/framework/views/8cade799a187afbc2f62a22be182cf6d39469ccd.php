<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $__env->yieldContent('Title'); ?>
    <link href="<?php echo e(asset('css/Admin/tabler.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Admin/tabler-flags.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Admin/tabler-payments.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Admin/tabler-vendors.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Admin/demo.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Admin/main.css')); ?>" rel="stylesheet">
    
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>

</head>

<body>
    <script src="<?php echo e(asset('js/Admin/demo-theme.min.js')); ?>"></script>
    <div class="page">

        <?php echo $__env->yieldContent('NavBar'); ?>

        <?php echo $__env->yieldContent('HorizontalBar'); ?>

        <div class="page-wrapper">

            <?php echo $__env->yieldContent('PageHeader'); ?>

            <?php echo $__env->yieldContent('PageBody'); ?>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="<?php echo e(asset('libs/Admin/apexcharts/dist/apexcharts.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/js/jsvectormap.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/maps/world.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/maps/world-merc.js')); ?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?php echo e(asset('js/Admin/tabler.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/Admin/demo.min.js')); ?>" defer></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Layouts/sampleLayout.blade.php ENDPATH**/ ?>