<!-- Top Focus -->
<div class="bai1">
    <div class="content--left">
        <a id="img1" href="" title="{{ $postLists[0]->post_title }}">
            <img src="{{ asset('images/Admin/Posts/' . $postLists[0]->post_image) }}"
                alt="{{ $postLists[0]->post_title }}">
        </a>

        <h2 id="tt1">
            <a href="" title="{{ $postLists[0]->post_title }}">{{ $postLists[0]->post_title }}</a>
        </h2>

        <p>
            {{ $postLists[0]->post_title }}
        </p>
    </div>

    <div class="content--right">
        <a id="img2" href="" title='{{ $postLists[1]->post_title }}'>
            <img src="{{ asset('images/Admin/Posts/' . $postLists[1]->post_image) }}"
                alt='{{ $postLists[1]->post_title }}'>
        </a>

        <h2 id="tt2">
            <a href="" title='{{ $postLists[1]->post_title }}'>{{ $postLists[1]->post_title }}</a>
        </h2>
    </div>
</div>
