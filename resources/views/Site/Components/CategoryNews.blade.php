<!-- Category News -->
<div class="blw-category-news">
    <div class="boxLeft">
        <div class="content3">
            <div class="title">
                <h2>STAR</h2>
            </div>

            <div class="content__main">
                <img src="{{ asset('images/Admin/Posts/' . $postWithCategoryStar[0]->post_image) }}" alt="">
                <a href="">
                    <h3>
                        {{ $postWithCategoryStar[0]->post_title }}
                    </h3>
                </a>
            </div>

            <div class="content__extra">
                <ul>
                    <li>
                        <img src="{{ asset('images/Admin/Posts/' . $postWithCategoryStar[1]->post_image) }}"
                            alt="">
                        <h4>
                            {{ $postWithCategoryStar[1]->post_title }}
                        </h4>
                    </li>
                    <li>
                        <img src="{{ asset('images/Admin/Posts/' . $postWithCategoryStar[2]->post_image) }}"
                            alt="">
                        <h4>
                            {{ $postWithCategoryStar[2]->post_title }}
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
                <img src="images\Admin\Posts\{{ $postWithCategoryMusik[0]->post_image }}" alt="">
                <a href="">
                    <h3>
                        {{ $postWithCategoryMusik[0]->post_title }}
                    </h3>
                </a>
            </div>

            <div class="content__extra">
                <ul>
                    <li>
                        <img src="images\Admin\Posts\{{ $postWithCategoryMusik[1]->post_image }}" alt="">
                        <h4>
                            {{ $postWithCategoryMusik[1]->post_title }}
                        </h4>
                    </li>
                    <li>
                        <img src="images\Admin\Posts\{{ $postWithCategoryMusik[2]->post_image }}" alt="">
                        <h4>
                            {{ $postWithCategoryMusik[2]->post_title }}
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
