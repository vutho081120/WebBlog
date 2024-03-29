<!-- Up Down Gallery -->
<div class="bns-slider-tin-moi">
    <div class="slider" id="galleryLatestNews">
        <ul id="gallery7">
            @foreach ($postLists as $post)
                <li>
                    <div class="img">
                        <a href=""><img src="{{ asset('images/Admin/Posts/' . $post->post_image) }}"
                                alt=""></a>
                    </div>

                    <div class="ct">
                        <div class="title1">
                            <p>
                                [ Tin vừa lên ]
                            </p>
                        </div>

                        <div class="title2">
                            <p>
                                <a href="">
                                    {{ $post->post_title }}
                                </a>
                            </p>
                        </div>

                        <div class="extra">
                            <a class="theme">{{ $post->category_name }}</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="control-box">
            <div id="up">
                <button class="btn-up" id="btn-up"><img
                        src="{{ asset('images/Site/index/gallery/gallery7/btn.png') }}" alt=""></button>
            </div>

            <div id="page">
                1/5
            </div>

            <div id="down">
                <button class="btn-down" id="btn-down"><img
                        src="{{ asset('images/Site/index/gallery/gallery7/btn.png') }}" alt=""></button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/Site/gallery/galleryVerticalControl.js') }}"></script>
    <script>
        var option7 = {
            ele: '#galleryLatestNews',
            id: '#gallery7',
            btnUp: '.btn-up',
            btnDown: '.btn-down',
            page: '#page',
            widthNext: -176,
            widthEnd: -704
        };

        var gallery7 = new slideVertical(option7);
    </script>
</div>
