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
                str = ' <tr class="nhanvien" id='+ results[i].id + '><td><p>'+ results[i].id +'</p></td><td><p class="name">'
                + results[i].ten + '</p> </td><td><p class="que">' 
                + results[i].quequan +'</p></td><td><p>'
                + results[i].namsinh +'</p></td><td><p>'
                + results[i].nganhnghe + '</p>  </td>  <td>  <p class="address">'
                + ((results[i].trang_thai == 0) ?'available':'busy' )+ '</p></td><td><div class="table-icon"><a target="_blank" href="/nhanvien/'
                + results[i].id + '"><i class="far fa-eye"></i></a><a  class="deletem" href="/adm/deletemaid/'
                +results[i].id+'"><i class="fas fa-trash-alt"></i></a></div></td></tr>';
                 $('#table_content').append(str);
              }   
             //end
   }
   display(data);
   </script>
@endsection