<!-- Category News -->
<div class="blw-category-news">
    <div class="boxLeft">
        <div class="content3">
            <div class="title">
                <h2>STAR</h2>
            </div>

            <div class="content__main">
                <img src="images\Admin\Posts\<?php echo e($postWithCategoryStar[0]->post_image); ?>" alt="">
                <a href="">
                    <h3>
                        <?php echo e($postWithCategoryStar[0]->post_title); ?>

                    </h3>
                </a>
            </div>

            <div class="content__extra">
                <ul>
                    <li>
                        <img src="images\Admin\Posts\<?php echo e($postWithCategoryStar[1]->post_image); ?>" alt="">
                        <h4>
                            <?php echo e($postWithCategoryStar[1]->post_title); ?>

                        </h4>
                    </li>
                    <li>
                        <img src="images\Admin\Posts\<?php echo e($postWithCategoryStar[2]->post_image); ?>" alt="">
                        <h4>
                            <?php echo e($postWithCategoryStar[2]->post_title); ?>

                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="boxRight">
        <!-- the loai tin tuc -->

        <div class="content3">
            <div class="title">
                <h2>MUSIK</h2>
            </div>

            <div class="content__main">
                <img src="images\Admin\Posts\<?php echo e($postWithCategoryMusik[0]->post_image); ?>" alt="">
                <a href="">
                    <h3>
                        <?php echo e($postWithCategoryMusik[0]->post_title); ?>

                    </h3>
                </a>
            </div>

            <div class="content__extra">
                <ul>
                    <li>
                        <img src="images\Admin\Posts\<?php echo e($postWithCategoryMusik[1]->post_image); ?>" alt="">
                        <h4>
                            <?php echo e($postWithCategoryMusik[1]->post_title); ?>

                        </h4>
                    </li>
                    <li>
                        <img src="images\Admin\Posts\<?php echo e($postWithCategoryMusik[2]->post_image); ?>" alt="">
                        <h4>
                            <?php echo e($postWithCategoryMusik[2]->post_title); ?>

                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Components/CategoryNews.blade.php ENDPATH**/ ?>