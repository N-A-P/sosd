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
            @foreach ($data as $i)
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="{{ '/nhanvien'.$i->id }}">
                <img width="515" height="286" src="{{asset("storage/app/public/images/$i->anh")}}" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="/nhanvien/{{$i->id}}">{{ $i->ten }}</a></h3>
                <p class="home_summary"> {{ $i->ten }} – {{ $i->namsinh}} Quê: {{ $i->quequan }} Kinh nghiệm: 6 năm chăm bé Cô tắm cho
                    bé:...</p>
                <div class="time-more">
                    <div class="time pull-left">{{ $i->create_at }}</div>
                    <div class="pull-right"><a href="/nhanvien/{{$i->id}}"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            @endforeach
           


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