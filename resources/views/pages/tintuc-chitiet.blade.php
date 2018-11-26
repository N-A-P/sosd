@extends('layouts.header')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
    <nav class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-text">
                <span><span><a href="/">Trang Chủ</a> » <span class="breadcrumb_last">Tin tức</span></span></span>
            </div>
        </div>
    </nav>
    <section class="noidung">
        <div class="container">
            <div class="col-md-9 single">
                <h2 class="title">Tin tức</h2>
                <div class="clear-fix">  </div>

                <div class="col col-md-9">
                   <h2> {{ $data->tieude }}</h2>
                    {!! $data->noidung !!}
                </div>
            <div class="fb-comments" data-href="https://localhost:80/tintuc/{{$data->id}}" data-width="800" data-numposts="5"></div>
            </div>
            @include('layouts.lay2')
        </div>
    </section>
@endsection