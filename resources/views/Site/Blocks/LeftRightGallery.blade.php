<!-- Left Right Gallery -->
<div class="slider" id="gallery7News">
    <ul class="gallery">
        @foreach ($postGalleryLists as $post)
            <li>
                <a href="{{ route('site.post.index', $post->post_slug) }}">
                    <img src="{{ asset('images/Admin/Posts/' . $post->post_image) }}" alt="">
                </a>
                <h4>
                    <a href="{{ route('site.post.index', $post->post_slug) }}">{{ $post->post_title }}</a>
                </h4>
            </li>
        @endforeach
    </ul>

    <div class="button">
        <button class="btn-next" id="btn-next">
            <div><img src="{{ asset('images/Site/index/gallery/gallery4/btn.png') }}" alt="">
            </div>
        </button>
        <button class="btn-back" id="btn-back">
            <div><img src="{{ asset('images/Site/index/gallery/gallery4/btn.png') }}" alt="">
            </div>
        </button>
        <ul class="dots">

        </ul>
    </div>
</div>
<script src="{{ asset('js/Site/gallery/galleryHorizontalControl.js') }}"></script>
<script>
    var option4 = {
        ele: '#gallery7News',
        id: '#gallery4',
        btnNext: '.btn-next',
        btnBack: '.btn-back',
        widthNext: -655,
        widthEnd: -1600
    };

    var gallery4 = new slide(option4);
</script>
