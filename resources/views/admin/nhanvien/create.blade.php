@extends('admin.layouts.index')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
            @include('layouts.message')
            <div class="col-lg-12">
                    <h3 class="page-header"> Thêm người giúp việc</h3>
            </div>
        {!! Form::open(['action' => 'EmployeeController@store','method'=> 'POST','enctype'=>'multipart/form-data']) !!}
        {{ csrf_field() }}

        <div class="col col-md-1"></div>
        <div class="col col-md-3">
            <div class="form-group">
                {{ Form::label('title','Họ tên') }}
                {{ Form::text('ten','', ['class'=>'form-control', 'placeholder'=>'Họ tên','required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Năm sinh') }}
                {{ Form::text('namsinh','', ['class'=>'form-control', 'placeholder'=>'Năm sinh','required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Quê quán') }}
                {{ Form::text('quequan','', ['class'=>'form-control', 'placeholder'=>'Quê quán','required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Ngành nghề') }}
                <select class="form-control" name="" id="">Chọn ngành
                    <option value="1">val1</option>
                    <option value="2">val2</option>
                </select>
            </div>
            <div class="form-group">
                {{ Form::label('title','Kinh nghiệm(tóm tắt)') }}
                {{ Form::text('kinhnghiem_tomtat','', [ 'class'=>'form-control','placeholder'=>'Kinh nghiệm','required']) }}
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" name="anh" required/>

            </div>
            <button type="submit" class="btn btn-primary" name="ok">Thêm</button>
        </div>

        <div class="col col-md-6">
            <div class="form-group">
                {{ Form::label('title','Kinh nghiệm') }}
                {{ Form::textarea('kinhnghiem','', ['id'=>'editor','class'=>'form-control', 'placeholder'=>'Kinh
                nghiệm']) }}
            </div>
        </div>
        <div class="col col-md-2"></div>
        {!! Form::close() !!}
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ))
        .catch( error => {
            console.error( error );
        } );
    
</script>
<style>
    .ck-editor__editable {
        min-height: 400px;
    }
    </style>
@endsection