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
    <?php echo $__env->yieldContent('AlertifyCss'); ?>
    
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <style>
        #container {
            width: 1000px;
            margin: 20px auto;
        }

        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
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

    <?php echo $__env->yieldContent('PageJS'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Layouts/SampleLayout.blade.php ENDPATH**/ ?>