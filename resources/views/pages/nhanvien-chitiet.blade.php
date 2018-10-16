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
            <span><span><a href="/">Trang chủ</a> » <span class="breadcrumb_last">{{ $data[0]->ten }}</span></span></span>
        </div>
    </div>
</nav>
<section class="clearfix">
    <div class="container">
        <div class="col-md-8 singlee">
            <div class="posts-detail">
                <div class="text-center">
                    <h1 class="entry-title">{{ $data[0]->ten }}</h1>
                    <div class="entry-meta-share">
                        <div class="entry-meta">
                            Đăng ngày <span>{{$data[0]->create_at}}</span>
                        </div>
                        <div class="entry-share">
                            <ul>
                                <li>Chia sẻ bài viết: </li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="entry-content">
                    <h2>{{ $data[0]->ten }} – {{ $data[0]->namsinh }}</h2>
                    <h2>Quê: {{ $data[0]->quequan }}</h2>
                <p><img class="alignnone wp-image-1738 size-large" src="{{asset('images/'.$data[0]->anh)}}"
                            alt="" width="1024" height="619" srcset="{{asset('images/'.$data[0]->anh)}} 1024w, {{asset('images/'.$data[0]->anh)}} 300w, {{asset('images/'.$data[0]->anh)}} 768w"
                            sizes="(max-width: 1024px) 100vw, 1024px" /></p>
                       
                <h3>Kinh nghiệm: {{$exp[0]}}</h3>
                    <ul>
                        @for ($i = 1; $i < count($exp); $i++)
                            <li>{{$exp[$i] }}</li>
                        @endfor
                        
                        {{-- <li>Dìu đỡ ông bà đi dạo</li>
                        <li>Thường xuyên xoa bóp vùng cơ thể mệt mỏi, đau nhức cho ông bà</li>
                        <li>Liên tục theo dõi giờ uống thuốc theo đơn của bác sĩ</li>
                        <li>Nấu các món ăn phù hợp với thể trạng của ông bà</li>
                        <li>Làm những công việc khác theo yêu cầu của chủ nhà liên quan đến việc chăm sóc ông bà</li>
                        <li>Cô được đào tạo bài bản về các kỹ năng chăm người già</li>
                        <li>Cô mong muốn công việc ổn định, gắn bó lâu dài</li> --}}
                    </ul>
                    <h3>Giúp việc CiCi chuyên cung cấp các dịch vụ</h3>
                    <ul>
                        <li>Giúp việc ăn ở lại</li>
                        <li>Giúp việc theo giờ, hành chính</li>
                    </ul>
                    <h3>Liên hệ ngay với #CICI</h3>
                    <ul>
                        <li>Hotline: 0914 911 884 &#8211; 0963 584 111</li>
                        <li>Địa chỉ: số 10N03 , phố Thọ Tháp, Dịch Vọng, Cầu Giấy</li>
                    <li>Web: <a href="{{route('/')}}"></a>sosd.me</li>
                    </ul>
                </div>
                <div class="fb-comments" data-href="https://www.facebook.com/dichvugiupviecnhauytin" data-numposts="5"></div>
                <div class="news-more">
                    <div class="row">
                        <h3 class="news-more-title text-center">Tin liên quan</h3>
                        <div class="tintuc clearfix">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a href="https://giupvieccici.vn/hoang-thi-phuong/"><img width="515" height="286" src="https://giupvieccici.vn/wp-content/uploads/2018/10/37-Hoàng-Thị-Phương-Phú-Thọ-515x286.jpg"
                                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                                <h3 class="title"><a href="https://giupvieccici.vn/hoang-thi-phuong/">HOÀNG THỊ PHƯƠNG</a></h3>
                                <p class="home_summary"> HOÀNG THỊ PHƯƠNG – 1987 Quê: Phú Thọ Kinh nghiệm: 4 năm giúp
                                    việc gia đình Cô...<a href="https://giupvieccici.vn/hoang-thi-phuong/"><span>Xem
                                            chi tiết</span></a></p>
                                <div class="time-more">
                                    <div class="time pull-left">03/10/18</div>
                                    <div class="pull-right"><a href="https://giupvieccici.vn/hoang-thi-phuong/"><span>Xem
                                                chi tiết</span></a></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a href="https://giupvieccici.vn/nguyen-thi-binh/"><img width="515" height="286" src="https://giupvieccici.vn/wp-content/uploads/2018/10/40-Nguyễn-Thị-Bình-Hà-nam-515x286.jpg"
                                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                                <h3 class="title"><a href="https://giupvieccici.vn/nguyen-thi-binh/">NGUYỄN THỊ BÌNH</a></h3>
                                <p class="home_summary"> NGUYỄN THỊ BÌNH – 1953 Quê: Hà Nam Kinh nghiệm: 6 năm chăm bé
                                    Cô từng làm việc...<a href="https://giupvieccici.vn/nguyen-thi-binh/"><span>Xem chi
                                            tiết</span></a></p>
                                <div class="time-more">
                                    <div class="time pull-left">04/10/18</div>
                                    <div class="pull-right"><a href="https://giupvieccici.vn/nguyen-thi-binh/"><span>Xem
                                                chi tiết</span></a></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a href="https://giupvieccici.vn/tran-thi-man/"><img width="515" height="286" src="https://giupvieccici.vn/wp-content/uploads/2018/09/322-Trần-Thị-Mận-Nghệ-An-515x286.jpg"
                                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                                <h3 class="title"><a href="https://giupvieccici.vn/tran-thi-man/">TRẦN THỊ MẬN</a></h3>
                                <p class="home_summary"> TRẦN THỊ MẬN – 1957 Quê: Nghệ An Kinh nghiệm: 7 năm chăm bé Cô
                                    nấu ăn, đảm...<a href="https://giupvieccici.vn/tran-thi-man/"><span>Xem chi tiết</span></a></p>
                                <div class="time-more">
                                    <div class="time pull-left">27/09/18</div>
                                    <div class="pull-right"><a href="https://giupvieccici.vn/tran-thi-man/"><span>Xem
                                                chi tiết</span></a></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a href="https://giupvieccici.vn/757-2/"><img width="515" height="286" src="https://giupvieccici.vn/wp-content/uploads/2018/09/203-10-9-2018-Cao-Thị-Khiêm-Thanh-Hóa-1-515x286.jpg"
                                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                                <h3 class="title"><a href="https://giupvieccici.vn/757-2/">CAO THỊ KHIÊM</a></h3>
                                <p class="home_summary"> CAO THỊ KHIÊM – 1970 Quê: Thanh Hóa Kinh nghiệm: 10 năm giúp
                                    việc nhà Cô làm 8 năm...<a href="https://giupvieccici.vn/757-2/"><span>Xem chi tiết</span></a></p>
                                <div class="time-more">
                                    <div class="time pull-left">10/09/18</div>
                                    <div class="pull-right"><a href="https://giupvieccici.vn/757-2/"><span>Xem chi tiết</span></a></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a href="https://giupvieccici.vn/le-thi-lan/"><img width="515" height="286" src="https://giupvieccici.vn/wp-content/uploads/2018/10/108-Lê-Thị-Lan-Hà-Nam-515x286.jpg"
                                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                                <h3 class="title"><a href="https://giupvieccici.vn/le-thi-lan/">LÊ THỊ LAN</a></h3>
                                <p class="home_summary"> LÊ THỊ LAN – 1960 Quê: Hà Nam Kinh nghiệm: 6 năm giúp việc nhà
                                    Cô được đào...<a href="https://giupvieccici.vn/le-thi-lan/"><span>Xem chi tiết</span></a></p>
                                <div class="time-more">
                                    <div class="time pull-left">13/10/18</div>
                                    <div class="pull-right"><a href="https://giupvieccici.vn/le-thi-lan/"><span>Xem chi
                                                tiết</span></a></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a href="https://giupvieccici.vn/tran-thi-nguyet/"><img width="515" height="286" src="https://giupvieccici.vn/wp-content/uploads/2018/09/316-Trần-Thị-Nguyệt-Hà-Nội-515x286.jpg"
                                        class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                                <h3 class="title"><a href="https://giupvieccici.vn/tran-thi-nguyet/">TRẦN THỊ NGUYỆT</a></h3>
                                <p class="home_summary"> TRẦN THỊ NGUYỆT – 1957 Quê: Hà Nội Kinh nghiệm: 5 năm chăm ông
                                    bà Cô am hiểu...<a href="https://giupvieccici.vn/tran-thi-nguyet/"><span>Xem chi
                                            tiết</span></a></p>
                                <div class="time-more">
                                    <div class="time pull-left">26/09/18</div>
                                    <div class="pull-right"><a href="https://giupvieccici.vn/tran-thi-nguyet/"><span>Xem
                                                chi tiết</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.lay2')
    </div>
</section>
@endsection