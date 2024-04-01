<!-- News -->
<div class="bns-tin-tuc">
    <div class="content2">
        @foreach ($postLists as $post)
            <div class="content">
                <div class="img">
                    <a href="{{ route('site.post.index', $post->post_slug) }}"><img
                            src="{{ asset('images/Admin/Posts/' . $post->post_image) }}" alt=""></a>
                </div>

                <div class="ct">
                    <div class="title">
                        <a href="{{ route('site.post.index', $post->post_slug) }}">
                            <h3>
                                {{ $post->post_title }}
                            </h3>
                        </a>
                    </div>

                    <div class="extra">
                        <a class="theme">{{ $post->category_name }}</a>
                        <span class="time"> - {{ $post->created_at->diffForHumans() }}</span>
                    </div>

                    <div class="inf">
                        <span>
                            {{ $post->post_title }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
