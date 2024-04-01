<!-- Category News -->
<div class="blw-category-news">
    <div class="boxLeft">
        <div class="content3">
            <div class="title">
                <h2>STAR</h2>
            </div>

            <div class="content__main">
                <a href="{{ route('site.post.index', $postWithCategoryStar[0]->post_slug) }}">
                    <img src="{{ asset('images/Admin/Posts/' . $postWithCategoryStar[0]->post_image) }}" alt="">
                </a>
                <a href="{{ route('site.post.index', $postWithCategoryStar[0]->post_slug) }}">
                    <h3>
                        {{ $postWithCategoryStar[0]->post_title }}
                    </h3>
                </a>
            </div>

            <div class="content__extra">
                <ul>
                    <li>
                        <a href="{{ route('site.post.index', $postWithCategoryStar[1]->post_slug) }}">
                            <img src="{{ asset('images/Admin/Posts/' . $postWithCategoryStar[1]->post_image) }}"
                                alt="">
                        </a>
                        <a href="{{ route('site.post.index', $postWithCategoryStar[1]->post_slug) }}">
                            <h4>
                                {{ $postWithCategoryStar[1]->post_title }}
                            </h4>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.post.index', $postWithCategoryStar[2]->post_slug) }}">
                            <img src="{{ asset('images/Admin/Posts/' . $postWithCategoryStar[2]->post_image) }}"
                                alt="">
                        </a>
                        <a href="{{ route('site.post.index', $postWithCategoryStar[2]->post_slug) }}">
                            <h4>
                                {{ $postWithCategoryStar[2]->post_title }}
                            </h4>
                        </a>
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
                <a href="{{ route('site.post.index', $postWithCategoryMusik[0]->post_slug) }}">
                    <img src="images\Admin\Posts\{{ $postWithCategoryMusik[0]->post_image }}" alt="">
                </a>
                <a href="{{ route('site.post.index', $postWithCategoryMusik[0]->post_slug) }}">
                    <h3>
                        {{ $postWithCategoryMusik[0]->post_title }}
                    </h3>
                </a>
            </div>

            <div class="content__extra">
                <ul>
                    <li>
                        <a href="{{ route('site.post.index', $postWithCategoryMusik[1]->post_slug) }}">
                            <img src="images\Admin\Posts\{{ $postWithCategoryMusik[1]->post_image }}" alt="">
                        </a>
                        <a href="{{ route('site.post.index', $postWithCategoryMusik[1]->post_slug) }}">
                            <h4>
                                {{ $postWithCategoryMusik[1]->post_title }}
                            </h4>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.post.index', $postWithCategoryMusik[2]->post_slug) }}">
                            <img src="images\Admin\Posts\{{ $postWithCategoryMusik[2]->post_image }}" alt="">
                        </a>
                        <a href="{{ route('site.post.index', $postWithCategoryMusik[2]->post_slug) }}">
                            <h4>
                                {{ $postWithCategoryMusik[2]->post_title }}
                            </h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
