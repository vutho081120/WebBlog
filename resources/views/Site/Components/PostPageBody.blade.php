<!-- Post Page Body -->
<div class="post">
    <div class="post_title">
        <h1>
            {{ $postItem->post_title }}
        </h1>
    </div>
    <div class="post_content">
        {!! $postItem->post_content !!}
    </div>
</div>

<div class="blw-new-stream">
    @include('Site.Blocks.UpDownGallery', ['postLists' => $postLatest->slice(0, 5)])

    @include('Site.Blocks.News', ['postLists' => $postLatest->slice(5, 4)])
</div>
