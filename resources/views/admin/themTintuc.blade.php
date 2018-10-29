{{-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tin Tuc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' id='bootstrap-style-css' href='{{ asset('css/bootstrap.min.css') }}' type='text/css' media='all' />


<link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
</head>
<body> --}}
@extends('layouts.adheader')
@section('content')
    <div class="content-wrapper">
        <div class="container col col-md-5">
            {!! Form::open(['action' => 'TinTucController@store','method'=> 'POST','enctype'=>'multipart/form-data']) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {{ Form::label('title','Tiêu Đề') }}
                {{ Form::text('tieude','', ['class'=>'form-control', 'placeholder'=>'Tiêu Đề']) }}

            </div>
            <div class="form-group">
                {{ Form::label('title','Nội dung') }}
                {{ Form::textarea('noidung','', ['id'=>'editor','class'=>'form-control', 'placeholder'=>'Nội dung']) }}
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" name="thumbnail"/>
            </div>
            <button type="submit" class="btn btn-primary" name="ok">Thêm</button>
            {!! Form::close() !!}
        </div>
    </div>
    <script src="{{asset('js/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
{{-- </body>
</html> --}}