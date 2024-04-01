<!-- Focus Gallery -->
<div class="bns-dang-duoc-quan-tam">
    <div class="titleGalleryCare">
        <span class="icon"><img src="{{ asset('images/Site/index/gallery/gallery1/icon.png') }}" alt=""></span>
        <h3>ĐANG ĐƯỢC QUAN TÂM</h3>
    </div>

    <div class="slider" id="galleryCare">
        <ul class="gallery">
            @foreach ($postFocus as $post)
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
                <div><img src="{{ asset('images/Site/index/gallery/gallery1/btn.png') }}" alt=""></div>
            </button>
            <button class="btn-back" id="btn-back">
                <div><img src="{{ asset('images/Site/index/gallery/gallery1/btn.png') }}" alt=""></div>
            </button>
            <ul class="dots">

            </ul>
        </div>
    </div>

    <script src="js/Site/gallery/galleryHorizontalControl.js"></script>
    <script>
        var option1 = {
            ele: '#galleryCare',
            id: '#gallery1',
            btnNext: '.btn-next',
            btnBack: '.btn-back',
            widthNext: -565,
            widthEnd: -725
        };

        var gallery1 = new slide(option1);
    </script>
</div>
