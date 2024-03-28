<div class="bang-tin-left">
    <!-- bang tin tuc -->

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
            <div id="content1">
                <img src="images/Site/index/content/content1/anh1.png" alt="">
                <p>
                    Vĩnh Long: Bé gái 4 tuổi bị bạn của bố dùng tay đánh đập xuống
                    nền gạch đầu
                    tử vong, hung thủ bị điều tra về hành vi "Cố ý gây thương tích"
                </p>
                <button>Nổi bật</button>
            </div>

            <div id="content2">
                <img src="images/Site/index/content/content1/anh2.png" alt="">
                <p>
                    Câu chuyện: "Cô gái chờ bạn trai suốt đêm ngoài đường rồi bất
                    ngờ bỏ đi để
                    lại hết túi sách giấy tờ" khiến cư dân mạng trổ tài thám tử
                </p>
                <button>Nổi bật</button>
            </div>

            <div id="content3">
                <img src="images/Site/index/content/content1/anh3.png" alt="">
                <p>
                    Vụ thi thể bị trói chân tay nổi trên sông ở Đà Nẵng: Nạn nhân
                    làm nghề cho vay tiền
                </p>
                <p id="time"> - 47 phút trước</p>
            </div>

            <div id="content4">
                <img src="images/Site/index/content/content1/anh4.png" alt="">
                <p>
                    Quảng Ninh: Sét đánh khiến toàn bộ điện lưới đảo Cô Tô mất điện
                    kéo dài
                </p>
                <p id="time"> - 1 giờ trước</p>
            </div>

            <div id="content5">
                <img src="images/Site/index/content/content1/anh5.png" alt="">
                <p>
                    Khối u quái có răng, tóc, xương trong buồng trứng bé gái
                </p>
                <p id="time"> - 1 giờ trước</p>
            </div>

            <div id="content6">
                <img src="images/Site/index/content/content1/anh6.png" alt="">
                <p>
                    Người thân hai thiếu nữ tử vong mang quan tài đến trụ sở công an
                    huyện
                </p>
                <p id="time"> - 1 giờ trước</p>
            </div>
        </div>
    </div>

    <script src="js/Site/date/showDate.js"></script>

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
<?php /**PATH C:\xampp\htdocs\WebBlog\resources\views/Site/Blocks/LeftTableNews.blade.php ENDPATH**/ ?>