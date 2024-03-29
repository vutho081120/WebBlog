<!-- Stream News -->
<div class="blw-new-stream">
    @include('Site.Blocks.UpDownGallery', ['postLists' => $postLatest->slice(0, 5)])

    @include('Site.Blocks.News', ['postLists' => $postLatest->slice(5, 4)])

    <div class="bang-tin-w1040">
        @include('Site.Blocks.LeftTableNews', [
            'postOutstanding' => $postWithCategoryTable->slice(0, 2),
            'postLists' => $postWithCategoryTable->slice(2, 4),
        ])

        @include('Site.Blocks.RightTableNews')
    </div>

    @include('Site.Blocks.News', ['postLists' => $postLatest->slice(9, 4)])

    <div class="trendAd-w1040">
        @include('Site.Blocks.FocusGallery')

        @include('Site.Blocks.VideoMusic')
    </div>

    @include('Site.Blocks.News', ['postLists' => $postLatest->slice(15, 1)])

    @include('Site.Blocks.BoxVideo')
</div>
