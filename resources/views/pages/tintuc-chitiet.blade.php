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
                <span><span><a href="/">Tin tuc</a> » <span class="breadcrumb_last">Nhân viên</span></span></span>
            </div>
        </div>
    </nav>
    <section class="noidung">
        <div class="container">
            <div class="col-md-9 single">
                <h2 class="title">Tin tuc</h2>
                <div class="clear-fix">  </div>

                <div class="col col-md-9">
                   <h2> {{ $data->tieude }}</h2>
                    {!! $data->noidung !!}
                </div>
            </div>
            @include('layouts.lay2')
        </div>
    </section>
@endsection