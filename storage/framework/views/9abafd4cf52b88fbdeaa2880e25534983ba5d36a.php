<!-- Search Header -->
<div class="page-header">
    <div class="container-xl">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(__($singular)); ?></h2>
                <div class="text-secondary mt-1">1-12 <?php echo e(__('of')); ?> 241 <?php echo e(__($plural)); ?></div>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">
                    <div class="me-3 d-none d-md-block">
                        <form class="card" action="<?php echo e(route($routeSearch)); ?>" method="GET">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="<?php echo e(__('Search')); ?>…"
                                    name="search" />
                                <span class="input-icon-addon">
                                    <!-- SVG icon from http://tabler-icons.io/i/search -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                        <path d="M21 21l-6 -6" />
                                    </svg>
                                </span>
                            </div>
                        </form>
                    </div>
                    <a href="<?php echo e(route($routeCreate)); ?>" class="btn btn-primary">
                        <!-- SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        <?php echo e(__('Add')); ?> <?php echo e(__($singular)); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Admin/Components/PageHeaders/SearchHeader.blade.php ENDPATH**/ ?>