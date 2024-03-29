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

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

    
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
</body>

</html>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/layouts/SampleLayout.blade.php ENDPATH**/ ?>