<!-- Top Focus -->
<div class="bai1">
    <div class="content--left">
        <a id="img1" href="{{ route('site.post.index', $postTopFocusLists[0]->post_slug) }}"
            title="{{ $postTopFocusLists[0]->post_title }}">
            <img src="{{ asset('images/Admin/Posts/' . $postTopFocusLists[0]->post_image) }}"
                alt="{{ $postTopFocusLists[0]->post_title }}">
        </a>

        <h2 id="tt1">
            <a href="{{ route('site.post.index', $postTopFocusLists[0]->post_slug) }}"
                title="{{ $postTopFocusLists[0]->post_title }}">{{ $postTopFocusLists[0]->post_title }}</a>
        </h2>

        <p>
            {{ $postTopFocusLists[0]->post_title }}
        </p>
    </div>

    <div class="content--right">
        <a id="img2" href="{{ route('site.post.index', $postTopFocusLists[1]->post_slug) }}"
            title='{{ $postTopFocusLists[1]->post_title }}'>
            <img src="{{ asset('images/Admin/Posts/' . $postTopFocusLists[1]->post_image) }}"
                alt='{{ $postTopFocusLists[1]->post_title }}'>
        </a>

        <h2 id="tt2">
            <a href="{{ route('site.post.index', $postTopFocusLists[1]->post_slug) }}"
                title='{{ $postTopFocusLists[1]->post_title }}'>{{ $postTopFocusLists[1]->post_title }}</a>
        </h2>
    </div>
</div>
