<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.0/classic/ckeditor.js"></script>
</head>

<body>
    <div class="container col col-md-5">
            {!! Form::open(['action' => 'EmployeeController@store','method'=> 'POST','enctype'=>'multipart/form-data']) !!}
            {{ csrf_field() }}
        
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
                    {{ Form::label('title','Kinh nghiệm') }}
                    {{ Form::textarea('kinhnghiem','', ['id'=>'editor','class'=>'form-control', 'placeholder'=>'Kinh nghiệm']) }}
                </div>
                <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" class="form-control-file" name="anh" />
                      </div>
                {{-- <div class="form-group">
                        {{ Form::label('title','Ảnh') }}
                        {{ Form::file('anh','', ['class'=>'form-control-file']) }}
                    </div> --}}
                    <button type="submit" class="btn btn-primary" name="ok">Thêm</button>
            {!! Form::close() !!}
       

    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>