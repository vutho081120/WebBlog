<!-- Right Table News -->
<div class="bang-tin-right">
    <div class="content6">
        <div class="title">
            <div class="tt">
                <img src="{{ asset('images/Site/content6/clock-icon.png') }}" alt="">
                <span>TIN MỚI NHẤT</span>
            </div>
            <div class="bt">
                <button id="down"><img src="{{ asset('images/Site/content6/nut.png') }}" alt=""></button>
                <button id="up"><img src="{{ asset('images/Site/content6/nut.png') }}" alt=""></button>
            </div>
        </div>

        <div class="list">
            <ul>
                @foreach ($postLatestTable as $post)
                    <li>
                        <a href="{{ route('site.post.index', $post->post_slug) }}">
                            <span class="time">{{ $post->created_at->format('H:i') }}</span>
                            <span class="ct">
                                {{ $post->post_title }}
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
