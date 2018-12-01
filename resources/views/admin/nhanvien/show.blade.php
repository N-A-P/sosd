@extends('admin.layouts.index')
@section('content')
@include('layouts.message')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"> Danh sách Nhân viên</h2>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Họ tên</th>
                        <th>Quê quán</th>
                        <th>Năm sinh</th>
                        <th>Ngành nghề</th>
                        <th>Trạng thái</th>
                        <th>Options</th>
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
   <script>
   jQuery.extend({
    getValues: function(url) {
        var result = null;
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
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
 

    var data  = $.getValues('{{route("nhanvien.ajax")}}');
   // var data  = $.getValues('http://localhost/adm/ajax_maidlist');
   function display(results){
         //start
         for(var i = 0;i < results.length;i++)
              {
                str = ' <tr class="nhanvien" id='+ results[i].id + '><td><p>'+ results[i].id +'</p></td><td><p class="name" id="name'+results[i].id+'">'
                + results[i].ten + '</p> </td><td><p class="que">' 
                + results[i].quequan +'</p></td><td><p>'
                + results[i].namsinh +'</p></td><td><p>'
                + results[i].nganhnghe + '</p>  </td>  <td>  <p class="address">'
                + ((results[i].trang_thai == 0) ?'available':'busy' )+ '</p></td><td align="center"><button class="btn btn-primary" onclick="Delete('
                + results[i].id +')"> <i class="fa fa-trash-o  fa-fw"></i></button> <a class="btn btn-primary" href="/adm/editmaid/'
                + results[i].id +'"><i class="fa fa-pencil fa-fw"></i></a></td></tr>';
                 $('#table_content').append(str);
              }   
             //end
   }
   display(data);
   </script>
   <script>
        function Delete(id){
            var ten = $('p[id="name'+ id +'"]').html();
            if(confirm('Xóa ' +ten+'?'))
            {
                $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/adm/delmaid/"+id,
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