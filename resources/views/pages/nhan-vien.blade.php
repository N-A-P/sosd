@extends('layouts.header')
@section('content')
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.tab-menu').click(function () {
            $('#mymenu').toggle(50);
        });
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 100) {
                $('.menu-nav').addClass('is-show');
            } else {
                $('.menu-nav').removeClass('is-show');
            }
        });

    });
</script>
<nav class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-text">
            <span><span><a href="/">Trang chủ</a> » <span class="breadcrumb_last">Nhân viên</span></span></span>
        </div>
    </div>
</nav>
<section class="clearfix">
    <div class="container">
        <div class="col-md-8 singlee">

            <h2 class="title">Nhân viên</h2>
            <div class="entry-content"></div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <!-- <a href="https://giupvieccici.vn/nguyen-thi-canh/"> -->
                <a href="nhan_vien.html">
                    <img width="515" height="286" src=" images/1.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/nguyen-thi-canh/">NGUYỄN THỊ CANH</a></h3>
                <p class="home_summary"> NGUYỄN THỊ CANH – 1960 Quê: Thái Bình Kinh nghiệm: 6 năm chăm bé Cô tắm cho
                    bé:...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/dang-thi-sen/"><img width="515" height="286" src="images/2.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/dang-thi-sen/">ĐẶNG THỊ SEN</a></h3>
                <p class="home_summary"> ĐẶNG THỊ SEN Quê: Nghệ An Kinh nghiệm: 5 năm giúp việc gia đình Cô biết
                    cách...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/3.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/dao-thi-canh/">ĐÀO THỊ CẢNH</a></h3>
                <p class="home_summary"> ĐÀO THỊ CẢNH -1959 Quê: Thanh Hóa Kinh nghiệm: 6 năm giúp việc gia đình Cô
                    nấu...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/le-thi-to-nga/"><img width="515" height="286" src="images/4.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/le-thi-to-nga/">LÊ THỊ TỐ NGA</a></h3>
                <p class="home_summary"> LÊ THỊ TỐ NGA – 1983 Quê: Phú Thọ Kinh nghiệm: 3 năm giúp việc nhà Cô dọn...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/tran-thi-diu/"><img width="515" height="286" src="images/5.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/tran-thi-diu/">TRẦN THỊ DỊU</a></h3>
                <p class="home_summary"> TRẦN THỊ DỊU – 1962 Quê: Thái Nguyên Kinh nghiệm: 5 năm giúp việc nhà, chăm...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/vu-thi-chanh/"><img width="515" height="286" src="images/6.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/vu-thi-chanh/">VŨ THỊ CHANH</a></h3>
                <p class="home_summary"> VŨ THỊ CHANH – 1962 Quê: Phú Thọ Kinh nghiệm: 6 năm chăm người già Cô am
                    hiểu...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/tran-thi-man/"><img width="515" height="286" src="images/7.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/tran-thi-man/">TRẦN THỊ MẬN</a></h3>
                <p class="home_summary"> TRẦN THỊ MẬN – 1957 Quê: Nghệ An Kinh nghiệm: 7 năm chăm bé Cô nấu ăn, đảm...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/nguyen-thi-ngoan/"><img width="515" height="286" src="images/8.jpg"
                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/nguyen-thi-ngoan/">NGUYỄN THỊ NGOÃN</a></h3>
                <p class="home_summary"> NGUYỄN THỊ NGOÃN – 1971 Quê: Thái Bình Kinh nghiệm: 4 năm chăm bé Cô làm ở
                    Quang...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/duong-thi-luong/"><img width="515" height="286" src="images/9.jpg"
                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/duong-thi-luong/">DƯƠNG THỊ LƯƠNG</a></h3>
                <p class="home_summary"> DƯƠNG THỊ LƯƠNG – 1954 Quê: Nam Định Kinh nghiệm: 5 năm giúp việc nhà Cô
                    dọn...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/lam-thi-toan/"><img width="515" height="286" src="images/10.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/lam-thi-toan/">LÂM THỊ TOAN</a></h3>
                <p class="home_summary"> LÂM THỊ TOAN – 1968 Quê: Cao Bằng Kinh nghiệm: 10 năm chăm bé Cô tắm cho
                    bé:...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/nguyen-thi-hop/"><img width="515" height="286" src="images/11.jpg"
                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/nguyen-thi-hop/">NGUYỄN THỊ HỢP</a></h3>
                <p class="home_summary"> NGUYỄN THỊ HỢP – 1950 Quê: Thanh Hóa Kinh nghiệm: 6 năm chăm bé Cô chăm bé 5
                    năm...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="https://giupvieccici.vn/nguyen-ngoc-chau/"><img width="515" height="286" src="images/12.jpg"
                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                <h3 class="title"><a href="https://giupvieccici.vn/nguyen-ngoc-chau/">NGUYỄN NGỌC CHÂU</a></h3>
                <p class="home_summary"> NGUYỄN NGỌC CHÂU – 1997 Quê: Thanh Hóa Kinh nghiệm: Nhân viên nhà hàng, order
                    Em...</p>
                <div class="time-more">
                    <div class="time pull-left">26/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>


            <div class="pagination">
                <span aria-current='page' class='page-numbers current'>1</span>
                <!-- <a class='page-numbers' href='https://giupvieccici.vn/category/nhan-vien//page/2'>2</a> -->
                <a class='page-numbers' href='#'>2</a>
                <a class='page-numbers' href='#'>3</a>
                <span class="page-numbers dots">&hellip;</span>
                <a class='page-numbers' href='#'>11</a>
                <a class="next page-numbers" href="#">Trang sau &raquo;</a> </div>
        </div>
       @include('layouts.lay2')
    </div>
</section>
@endsection