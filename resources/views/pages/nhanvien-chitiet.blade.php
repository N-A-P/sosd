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
                            Đăng ngày <span>{{$data[0]->created_at}}</span>
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
                <p><img class="alignnone wp-image-1738 size-large" src="{{ asset( 'storage/images/'.$data[0]->anh)}}"
                            alt="" width="1024" height="619" srcset="{{asset('storage/images/'.$data[0]->anh)}} 1024w, {{asset('storage/images/'.$data[0]->anh)}} 300w, {{asset('storage/images/'.$data[0]->anh)}} 768w"
                            sizes="(max-width: 1024px) 100vw, 1024px" /></p>
                       
                <h3>Kinh nghiệm: {{$data[0]->kinhnghiem_tomtat}}</h3>
                   {!!$data[0]->kinhnghiem!!}
                    <h3>Giúp việc CiCi chuyên cung cấp các dịch vụ</h3>
                    <ul>
                        <li>Giúp việc ăn ở lại</li>
                        <li>Giúp việc theo giờ, hành chính</li>
                    </ul>
                    <h3>Liên hệ ngay với #CICI</h3>
                    <ul>
                        <li>Hotline: 0914 911 884 &#8211; 0963 584 111</li>
                        <li>Địa chỉ: số 10N03 , phố Thọ Tháp, Dịch Vọng, Cầu Giấy</li>
                    <li>Web: <a href="/"></a>sosd.me</li>
                    </ul>
                </div>
                <div class="news-more">
                    <div class="row">
                        <h3 class="news-more-title text-center">Tin liên quan</h3>
                        <div class="tintuc clearfix">
                            
                            @for($i=0;$i < count($more); $i++)
                         
                            
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                    <a href="/nhanvien/{{$more[$i]->id}}"><img style="width: 244px;height:124px" src="{{ asset("storage/images/".$more[$i]->anh) }}"
                                                class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                                        <h3 class="title"><a href="/nhanvien/{{$more[$i]->id}}">{{$more[$i]->ten}}</a></h3>
                                        <p class="home_summary"> {{$more[$i]->ten}} – {{$more[$i]->namsinh}} Quê: {{{ $more[$i]->quequan }}} Kinh nghiệm: {{$more[$i]->kinhnghiem_tomtat}}</p>
                                        <div class="time-more">
                                        <div class="time pull-left"> {{$arr['b'.$more[$i]->id][0]}}</div>
                                            <div class="pull-right"><a href="/nhanvien/{{$more[$i]->id}}"><span>Xem chi tiết</span></a></div>
                                        </div>
                                    </div>                            
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.lay2')
    </div>
</section>
@endsection