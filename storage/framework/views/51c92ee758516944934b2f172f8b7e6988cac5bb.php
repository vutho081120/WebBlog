<!-- Top Focus -->
<div class="bai1">
    <div class="content--left">
        <a id="img1" href="<?php echo e(route('site.post.index', $postTopFocusLists[0]->post_slug)); ?>"
            title="<?php echo e($postTopFocusLists[0]->post_title); ?>">
            <img src="<?php echo e(asset('images/Admin/Posts/' . $postTopFocusLists[0]->post_image)); ?>"
                alt="<?php echo e($postTopFocusLists[0]->post_title); ?>">
        </a>

        <h2 id="tt1">
            <a href="<?php echo e(route('site.post.index', $postTopFocusLists[0]->post_slug)); ?>"
                title="<?php echo e($postTopFocusLists[0]->post_title); ?>"><?php echo e($postTopFocusLists[0]->post_title); ?></a>
        </h2>

        <p>
            <?php echo e($postTopFocusLists[0]->post_title); ?>

        </p>
    </div>

    <div class="content--right">
        <a id="img2" href="<?php echo e(route('site.post.index', $postTopFocusLists[1]->post_slug)); ?>"
            title='<?php echo e($postTopFocusLists[1]->post_title); ?>'>
            <img src="<?php echo e(asset('images/Admin/Posts/' . $postTopFocusLists[1]->post_image)); ?>"
                alt='<?php echo e($postTopFocusLists[1]->post_title); ?>'>
        </a>

        <h2 id="tt2">
            <a href="<?php echo e(route('site.post.index', $postTopFocusLists[1]->post_slug)); ?>"
                title='<?php echo e($postTopFocusLists[1]->post_title); ?>'><?php echo e($postTopFocusLists[1]->post_title); ?></a>
        </h2>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Blocks/topFocus.blade.php ENDPATH**/ ?>