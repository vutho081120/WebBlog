<!-- Left Right Gallery -->
<div class="slider" id="gallery7News">
    <ul class="gallery">
        <?php $__currentLoopData = $postGalleryLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('site.post.index', $post->post_slug)); ?>">
                    <img src="<?php echo e(asset('images/Admin/Posts/' . $post->post_image)); ?>" alt="">
                </a>
                <h4>
                    <a href="<?php echo e(route('site.post.index', $post->post_slug)); ?>"><?php echo e($post->post_title); ?></a>
                </h4>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div class="button">
        <button class="btn-next" id="btn-next">
            <div><img src="<?php echo e(asset('images/Site/index/gallery/gallery4/btn.png')); ?>" alt="">
            </div>
        </button>
        <button class="btn-back" id="btn-back">
            <div><img src="<?php echo e(asset('images/Site/index/gallery/gallery4/btn.png')); ?>" alt="">
            </div>
        </button>
        <ul class="dots">

        </ul>
    </div>
</div>
<script src="<?php echo e(asset('js/Site/gallery/galleryHorizontalControl.js')); ?>"></script>
<script>
    var option4 = {
        ele: '#gallery7News',
        id: '#gallery4',
        btnNext: '.btn-next',
        btnBack: '.btn-back',
        widthNext: -655,
        widthEnd: -1600
    };

    var gallery4 = new slide(option4);
</script>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Blocks/leftRightGallery.blade.php ENDPATH**/ ?>