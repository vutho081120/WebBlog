<!-- Right Table News -->
<div class="bang-tin-right">
    <div class="content6">
        <div class="title">
            <div class="tt">
                <img src="<?php echo e(asset('images/Site/content6/clock-icon.png')); ?>" alt="">
                <span>TIN MỚI NHẤT</span>
            </div>
            <div class="bt">
                <button id="down"><img src="<?php echo e(asset('images/Site/content6/nut.png')); ?>" alt=""></button>
                <button id="up"><img src="<?php echo e(asset('images/Site/content6/nut.png')); ?>" alt=""></button>
            </div>
        </div>

        <div class="list">
            <ul>
                <?php $__currentLoopData = $postLatestTable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="">
                            <span class="time"><?php echo e($post->created_at->format('H:i')); ?></span>
                            <span class="ct">
                                <?php echo e($post->post_title); ?>

                            </span>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Blocks/RightTableNews.blade.php ENDPATH**/ ?>