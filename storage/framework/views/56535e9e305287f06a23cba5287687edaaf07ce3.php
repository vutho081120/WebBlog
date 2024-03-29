<!-- Region News -->
<div class="blw-news" id="regionNews">
    <div class="bn-content">
        <?php echo $__env->make('Site.Blocks.topFocus', ['postLists' => $postTopFocus->slice(0, 2)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('Site.Blocks.leftRightGallery', ['postLists' => $postTopFocus->slice(2, 7)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Components/RegionNews.blade.php ENDPATH**/ ?>