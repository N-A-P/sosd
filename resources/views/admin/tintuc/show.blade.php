@extends('admin.layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Tin tức
                        <small>Danh sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Thumbnail</th>
                        <th>Views</th>
                        <th>Ngày tạo</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="table_content">
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
         jQuery.extend({
            getValues: function(url) {
                var result = null;
                $.ajax({
                // headers: {
                // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                url: url,
                type: 'get',
                async: false,
                success: function(data) {
                    result = data;
                },
                error: function(a,b,c){
                    console.log(a);
                    console.log(b);
                    console.log(c);
                } 
        });
       return result;
        }
    });
    var data  = $.getValues('{{route("tintuc.ajax")}}');
    function display(data){
        $('.even gradeD').remove();
        data.forEach(e => {
           var str  = '<tr class="even gradeD" align="center" id="'
           + e.id         + '"><td>'
           + e.id         + '</td><td>'
           + e.tieude     + '</td><td>'
           + e.thumbnail       + '</td><td>'
           + e.luotxem  + '</td><td>'
           + e.created_at + '</td></td><td align="center"><button class="btn btn-primary" onclick="Delete('
           + e.id +')"> <i class="fa fa-trash-o  fa-fw"></i></button> <a class="btn btn-primary" href="/adm/editnews/'
           + e.id +'"><i class="fa fa-pencil fa-fw"></i></a></td></tr>';
        $('tbody').append(str);
        });
    }
   display(data);
    </script>
    <script>
        function Delete(id){
            //var ten = $('p[id="name'+ id +'"]').html();
            if(confirm('Xóa tin ?'))
            {
                $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/adm/delnews/"+id,
                    type: 'get',
                    success: function(data){
                        alert(data);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                    });
                $('tr[id="'+id+'"]').remove();
            }
            else
                return false;    
        }
   </script>
@endsection