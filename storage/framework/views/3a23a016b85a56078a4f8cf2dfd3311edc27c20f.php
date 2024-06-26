

<?php $__env->startSection('Title'); ?>
    <title> User </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('NavBar'); ?>
    <?php echo $__env->make('Admin.Components.PageMenus.NavBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('HorizontalBar'); ?>
    <?php echo $__env->make('Admin.Components.PageMenus.HorizontalBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageHeader'); ?>
    <?php echo $__env->make('Admin.Components.PageHeaders.SearchHeader', [
        'singular' => 'user',
        'plural' => 'users',
        'routeCreate' => 'admin.user.createShow',
        'routeSearch' => 'admin.user.search',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageBody'); ?>
    <div class="page-body">
        <?php echo $__env->make('Admin.Components.PageBodies.UserBody', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageJS'); ?>
    <!-- Libs JS -->
    <script src="<?php echo e(asset('libs/Admin/apexcharts/dist/apexcharts.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/js/jsvectormap.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/maps/world.js')); ?>" defer></script>
    <script src="<?php echo e(asset('libs/Admin/jsvectormap/dist/maps/world-merc.js')); ?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?php echo e(asset('js/Admin/tabler.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/Admin/demo.min.js')); ?>" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    loadPage(page);
                }
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                loadPage(page);
            });
        });

        function loadPage(page) {
            $.ajax({
                type: "GET",
                url: '?page=' + page,
                success: function(data) {
                    $('.page-body').empty().html(data);
                    location.hash = page;
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.SampleLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Pages/User.blade.php ENDPATH**/ ?>