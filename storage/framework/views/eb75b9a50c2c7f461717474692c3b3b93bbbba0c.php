<!-- News -->
<div class="bns-tin-tuc">
    <div class="content2">
        <?php $__currentLoopData = $postLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="content">
                <div class="img">
                    <a href="<?php echo e(route('site.post.index', $post->post_slug)); ?>"><img
                            src="<?php echo e(asset('images/Admin/Posts/' . $post->post_image)); ?>" alt=""></a>
                </div>

                <div class="ct">
                    <div class="title">
                        <a href="<?php echo e(route('site.post.index', $post->post_slug)); ?>">
                            <h3>
                                <?php echo e($post->post_title); ?>

                            </h3>
                        </a>
                    </div>

                    <div class="extra">
                        <a class="theme"><?php echo e($post->category_name); ?></a>
                        <span class="time"> - <?php echo e($post->created_at->diffForHumans()); ?></span>
                    </div>

                    <div class="inf">
                        <span>
                            <?php echo e($post->post_title); ?>

                        </span>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Blocks/News.blade.php ENDPATH**/ ?>