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
                <span><span><a href="index.html">Trang chủ</a> » <span class="breadcrumb_last">Tin tức</span></span></span>
            </div>
        </div>
    </nav>
<section class="clearfix">
    <div class="container">
        <div class="col-md-8 singlee">

            <h2 class="title">Tin tức</h2>
            <div class="entry-content"></div>

            @foreach ($data as $item)
            <div class="col-md-4 col-sm-6 col-xs-6">
            <a href="/tintuc/{{$item->id}}"><img width="515" height="286" 
            src="{{ asset('storage/images/'.$item->thumbnail) }}" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"  /></a>
                <h3 class="title"><a href="/tintuc/{{$item->id}}">{{ $item->tieude }}</a></h3>
                <p class="home_summary"> {{ $item->tieude }}</p>
                <div class="time-more">
                    <div class="time pull-left">{{$item->created_at}}</div>
                <div class="pull-right"><a href="/tintuc/{{$item->id}}"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            @endforeach
        </div>
        @include('layouts.lay2')
    </div>
</section>
@endsection