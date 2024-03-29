<!-- Left Table News -->
<div class="bang-tin-left">
    <div class="content1">
        <div class="title">
            <h2>Tin cùng chuyên mục</h2>
            <p>Xem theo ngày</p>
            <div class="datetime" id="showDate">
                <select name="day" id="day">
                </select>
                <select name="month" id="month">
                </select>
                <select name="year" id="year">
                </select>
                <button id="btXem">Xem</button>
            </div>
        </div>

        <div class="ct">
            @foreach ($postOutstanding as $post)
                <div class="content">
                    <img src="{{ asset('images/Admin/Posts/' . $post->post_image) }}" alt="">
                    <p>
                        {{ $post->post_title }}
                    </p>
                    <button>Nổi bật</button>
                </div>
            @endforeach

            @foreach ($postLists as $post)
                <div class="content">
                    <img src="{{ asset('images/Admin/Posts/' . $post->post_image) }}" alt="">
                    <p>
                        {{ $post->post_title }}
                    </p>
                    <p id="time"> - {{ $post->created_at->diffForHumans() }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('js/Site/date/showDate.js') }}"></script>

    <script>
        var optionShow = {
            id: '#showDate',
            day: '#day',
            month: '#month',
            year: '#year'
        };

        var showDate = new show(optionShow);

        showDate.showDay();
        showDate.showMonth();
        showDate.showYear();
    </script>
</div>
