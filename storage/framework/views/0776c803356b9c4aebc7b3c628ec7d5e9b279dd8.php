<!-- Stream News -->
<div class="blw-new-stream">
    <?php echo $__env->make('Site.Blocks.UpDownGallery', ['postLists' => $postLatest->slice(0, 5)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('Site.Blocks.News', ['postLists' => $postLatest->slice(5, 4)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="bang-tin-w1040">
        <?php echo $__env->make('Site.Blocks.LeftTableNews', [
            'postOutstanding' => $postWithCategoryTable->slice(0, 2),
            'postLists' => $postWithCategoryTable->slice(2, 4),
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('Site.Blocks.RightTableNews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('Site.Blocks.News', ['postLists' => $postLatest->slice(9, 4)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="trendAd-w1040">
        <?php echo $__env->make('Site.Blocks.FocusGallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('Site.Blocks.VideoMusic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('Site.Blocks.News', ['postLists' => $postLatest->slice(15, 1)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('Site.Blocks.BoxVideo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Components/StreamNews.blade.php ENDPATH**/ ?>