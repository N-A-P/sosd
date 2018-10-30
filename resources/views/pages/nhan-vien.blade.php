@extends('layouts.header')
@section('content')
<nav class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-text">
            <span><span><a href="/">Trang chủ</a> » <span class="breadcrumb_last">Nhân viên</span></span></span>
        </div>
    </div>
</nav>
<section class="noidung">
    <div class="container">
        <div class="col-md-9 single">
            <h2 class="title">Nhân viên</h2>
            <div class="clear-fix">  </div>
            @for ($i=0;$i<count($data);$i++)
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="{{ '/nhanvien/'.$data[$i]->id }}">
                <img style="width:234px;height:118px" src="{{asset( 'storage/images/'.$data[$i]->anh) }}" 
                class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
                <h3 class="title"><a href="/nhanvien/{{$data[$i]->id}}">{{ $data[$i]->ten }}</a></h3>
                <p class="home_summary"> {{ $data[$i]->ten }} – {{ $data[$i]->namsinh}} Quê: {{ $data[$i]->quequan }} Kinh nghiệm:{{$data[$i]->kinhnghiem_tomtat}}...</p>
                <div class="time-more">
                    <div class="time pull-left">{{$arr['b'.$i][0]}}</div>
                    <div class="pull-right"><a href="/nhanvien/{{$data[$i]->id}}"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            @endfor
            
          
            <div class="pagination">
                <style>
                    .pagination{
                        align-self: center;
                    }
                </style>
                {{$data->links()}}
            </div>
        </div>
            @include('layouts.lay2')
    </div>
</section>
@endsection