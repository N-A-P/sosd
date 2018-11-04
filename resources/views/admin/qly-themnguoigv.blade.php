    @extends('layouts.adheader')
    @section('content')
    @include('layouts.message')
    <div class="row">
        {!! Form::open(['action' => 'EmployeeController@store','method'=> 'POST','enctype'=>'multipart/form-data']) !!}
        {{ csrf_field() }}
        <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('title','Họ tên') }}
                {{ Form::text('ten','', ['class'=>'form-control', 'placeholder'=>'Họ tên']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Năm sinh') }}
                {{ Form::text('namsinh','', ['class'=>'form-control', 'placeholder'=>'Năm sinh']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Quê quán') }}
                {{ Form::text('quequan','', ['class'=>'form-control', 'placeholder'=>'Quê quán']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Ngành nghề') }}
                {{ Form::text('nganhnghe','', ['class'=>'form-control', 'placeholder'=>'Ngành nghề']) }}
            </div>
            <div class="form-group">
                {{ Form::label('title','Kinh nghiệm(tóm tắt)') }}
                {{ Form::text('kinhnghiem_tomtat','', [ 'class'=>'form-control','placeholder'=>'Kinh nghiệm']) }}
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" name="anh" />

            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                {{ Form::label('title','Kinh nghiệm') }}
                {{ Form::textarea('kinhnghiem','', ['id'=>'editor','class'=>'form-control', 'placeholder'=>'Kinh
                nghiệm']) }}
            </div>
        </div>
    </div>
        <div class="row">
            <button type="submit" class="btn btn-primary" name="ok">Thêm</button>
        </div>
        {!! Form::close() !!}

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