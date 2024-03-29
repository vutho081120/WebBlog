<!-- Up Down Gallery -->
<div class="bns-slider-tin-moi">
    <div class="slider" id="galleryLatestNews">
        <ul id="gallery7">
            <?php $__currentLoopData = $postLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="img">
                        <a href=""><img src="<?php echo e(asset('images/Admin/Posts/' . $post->post_image)); ?>"
                                alt=""></a>
                    </div>

                    <div class="ct">
                        <div class="title1">
                            <p>
                                [ Tin vừa lên ]
                            </p>
                        </div>

                        <div class="title2">
                            <p>
                                <a href="">
                                    <?php echo e($post->post_title); ?>

                                </a>
                            </p>
                        </div>

                        <div class="extra">
                            <a class="theme"><?php echo e($post->category_name); ?></a>
                        </div>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <div class="control-box">
            <div id="up">
                <button class="btn-up" id="btn-up"><img
                        src="<?php echo e(asset('images/Site/index/gallery/gallery7/btn.png')); ?>" alt=""></button>
            </div>

            <div id="page">
                1/5
            </div>

            <div id="down">
                <button class="btn-down" id="btn-down"><img
                        src="<?php echo e(asset('images/Site/index/gallery/gallery7/btn.png')); ?>" alt=""></button>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('js/Site/gallery/galleryVerticalControl.js')); ?>"></script>
    <script>
        var option7 = {
            ele: '#galleryLatestNews',
            id: '#gallery7',
            btnUp: '.btn-up',
            btnDown: '.btn-down',
            page: '#page',
            widthNext: -176,
            widthEnd: -704
        };

        var gallery7 = new slideVertical(option7);
    </script>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Blocks/UpDownGallery.blade.php ENDPATH**/ ?>