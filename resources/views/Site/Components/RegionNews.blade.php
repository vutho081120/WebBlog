<!-- Region News -->
<div class="blw-news" id="regionNews">
    <div class="bn-content">
        @include('Site.Blocks.topFocus', ['postLists' => $postTopFocus->slice(0, 2)])

        @include('Site.Blocks.leftRightGallery', ['postLists' => $postTopFocus->slice(2, 7)])
    </div>
</div>
