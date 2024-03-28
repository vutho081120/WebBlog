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
    <div class="page page-center">
        <?php echo $__env->yieldContent('PageBody'); ?>
    </div>

    <?php echo $__env->yieldContent('PageJS'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Layouts/TablerLayout.blade.php ENDPATH**/ ?>