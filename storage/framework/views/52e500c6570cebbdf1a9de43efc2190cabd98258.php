

<?php $__env->startSection('Title'); ?>
    <title> User Edit </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('NavBar'); ?>
    <?php echo $__env->make('Admin.Components.PageMenus.NavBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('HorizontalBar'); ?>
    <?php echo $__env->make('Admin.Components.PageMenus.HorizontalBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageHeader'); ?>
    <?php echo $__env->make('Admin.Components.PageHeaders.TitleHeader', ['title' => 'User'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageBody'); ?>
    <?php echo $__env->make('Admin.Components.PageBodies.UserEditBody', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.Litepicker && (new Litepicker({
                element: document.getElementById('datepicker-icon'),
                buttonText: {
                    previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                    nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
                },
            }));
        });
        // @formatter:on
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.SampleLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Pages/UserEdit.blade.php ENDPATH**/ ?>