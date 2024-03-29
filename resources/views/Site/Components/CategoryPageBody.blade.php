<!-- Category Page Body -->
<div class="blw-new-stream">
    @include('Site.Blocks.UpDownGallery', ['postLists' => $postLatest->slice(0, 5)])

    @include('Site.Blocks.News', ['postLists' => $postLatest->slice(5, 4)])
</div>
