<!-- Left Table News -->
<div class="bang-tin-left">
    <div class="content1">
        <div class="title">
            <h2>Tin cùng chuyên mục</h2>
            <p>Xem theo ngày</p>
            <div class="datetime" id="showDate">
                <select name="day" id="day">
                </select>
                <select name="month" id="month">
                </select>
                <select name="year" id="year">
                </select>
                <button id="btXem">Xem</button>
            </div>
        </div>

        <div class="ct">
            <?php $__currentLoopData = $postOutstanding; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content">
                    <img src="<?php echo e(asset('images/Admin/Posts/' . $post->post_image)); ?>" alt="">
                    <p>
                        <?php echo e($post->post_title); ?>

                    </p>
                    <button>Nổi bật</button>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php $__currentLoopData = $postLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content">
                    <img src="<?php echo e(asset('images/Admin/Posts/' . $post->post_image)); ?>" alt="">
                    <p>
                        <?php echo e($post->post_title); ?>

                    </p>
                    <p id="time"> - <?php echo e($post->created_at->diffForHumans()); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <script src="<?php echo e(asset('js/Site/date/showDate.js')); ?>"></script>

    <script>
        var optionShow = {
            id: '#showDate',
            day: '#day',
            month: '#month',
            year: '#year'
        };

        var showDate = new show(optionShow);

        showDate.showDay();
        showDate.showMonth();
        showDate.showYear();
    </script>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Blocks/LeftTableNews.blade.php ENDPATH**/ ?>