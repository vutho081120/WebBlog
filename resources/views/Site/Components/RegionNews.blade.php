<!-- Region News -->
<div class="blw-news" id="regionNews">
    <div class="bn-content">
        @include('Site.Blocks.topFocus', ['postTopFocusLists' => $postTopFocus->slice(0, 2)])

        @include('Site.Blocks.leftRightGallery', ['postGalleryLists' => $postTopFocus->slice(2, 7)])
    </div>
</div>
