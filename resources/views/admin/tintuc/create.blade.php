@extends('admin.layouts.index')
@include('layouts.message')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Thêm Tin tức </h2>
            </div>
            <!-- /.col-lg-12 -->
                
        <form action="{{route('tintuc.add')}}" method="POST" enctype="multipart/form-data">
            @csrf       
            <div class="col col-lg-4">
                       
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="tieude" placeholder="Nhập tiêu đề" required />
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <input class="form-control" name="tomtat" placeholder="Tóm tắt" required />
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" class="form-control-file" name="thumbnail" id="thumbnail" required />
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                    <div class="col col-lg-7">
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea  name="noidung" id="editor" rows="10"></textarea>
                        </div>
                    </div>
                </form>
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
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