@extends('admin.layouts.index')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
            @include('layouts.message')
            <div class="col-lg-12">
                    <h3 class="page-header"> Sửa thông tin người giúp việc</h3>
            </div>
           
        {!! Form::open(['action' => 'EmployeeController@update','method'=> 'POST','enctype'=>'multipart/form-data']) !!}
        {{ csrf_field() }}
        <input name="id" id= "id" value="{{$info->id}}" type="hidden" />
        <div class="col col-md-1"></div>
        <div class="col col-md-3">
            <div class="form-group">
                {{ Form::label('title','Họ tên') }}
                {{ Form::text('ten',$info->ten, ['class'=>'form-control','placeholder'=>'Họ tên']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Năm sinh') }}
                {{ Form::text('namsinh',$info->namsinh, ['class'=>'form-control', 'placeholder'=>'Năm sinh']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Quê quán') }}
                {{ Form::text('quequan',$info->quequan, ['class'=>'form-control', 'placeholder'=>'Quê quán']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Ngành nghề') }}
                <select class="form-control" name="nganhnghe" id="nganhnghe">Chọn ngành
                    <option value="1">val1</option>
                    <option value="2">val2</option>
                </select>
            </div>
            <div class="form-group">
                    {{ Form::label('title','Trạng thái') }}
                    <select class="form-control" name="trangthai" id="trangthai">
                        <option value="1">Busy</option>
                        <option value="0">Available</option>
                    </select>
                </div>
            <div class="form-group">
                {{ Form::label('title','Kinh nghiệm(tóm tắt)') }}
                {{ Form::text('kinhnghiem_tomtat',$info->kinhnghiem_tomtat, [ 'class'=>'form-control','placeholder'=>'Kinh nghiệm']) }}
            </div>
            <div class="form-group">
                <label>Ảnh</label>
               <p> <img id="Image" src ={{asset($info->anh)}} /></p>
                <input id="img" type="file" class="form-control-file" name="anh" />

            </div>
            <button type="submit" class="btn btn-primary" name="ok">Sửa</button>
            <button type="reset" class="btn btn-primary">reset</button>
        </div>

        <div class="col col-md-6">
            <div class="form-group">
                {{ Form::label('title','Kinh nghiệm') }}
                {{ Form::textarea('kinhnghiem',$info->kinhnghiem, ['id'=>'editor','class'=>'form-control', 'placeholder'=>'Kinh
                nghiệm'])}}
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
{{-- <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

        function readURL(input) {

            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#Image').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            }
        }

        $("#img").change(function() {
            readURL(this);
        });
</script>
<style>
        .ck-editor__editable {
            min-height: 200px;
        }
        #Image {
            width: 200px;
            height: 150px;
        }
</style> --}}
@endsection