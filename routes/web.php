<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about')->name('pages.about');
Route::get('/lienhe','PagesController@lienhe')->name('pages.lienhe');
Route::get('/dichvu','PagesController@dichvu')->name('pages.dichvu');
Route::get('/dichvu/giadinh','PagesController@giupviec')->name('pages.giupviec');
Route::get('debug',function(){
    return view('pages.debug');
});
Route::get('/tintuc','PagesController@tintuc');
Route::get('/tintuc/{id}','PagesController@tintuc_chitiet')->name('pages.tintuc-chitiet');
Route::get('/nhanvien/{id}','PagesController@chitietnhanvien')->name('pages.chitietnhanvien');
Route::get('/nhanvien','PagesController@nhanvien')->name('pages.nhanvien');
Route::resource('/quanlytintuc','TinTucController');


/*admin*/
Route::resource('/quanlynguoigiupviec','EmployeeController');
Auth::routes();
Route::resource('/quanlytintuc','TinTucController');
Route::get('/adm', 'DashboardController@index');

Route::group(['prefix' => 'adm'/*,'middleware'=>'auth'*/], function(){
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/addnews', 'TinTucController@create');
    Route::post('/addnews','TinTucController@store')->name('tintuc.add');
    Route::get('/addmaids','EmployeeController@index');
    Route::get('/ajax_maidlist','EmployeeController@list_nv_ajax')->name('nhanvien.ajax');
    Route::get('/maidslist','EmployeeController@list_nv');
    Route::get('/addfield','EmployeeController@list_nganh')->name('list_nganh');
    Route::post('/deletemaid/{id}','EmployeeController@destroy');
});


// <script>
//    var p = 0;
//    jQuery.extend({
//     getValues: function(url) {
//         var result = null;
//         $.ajax({
//             headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//              },
//             url: url,
//             type: 'post',
//             async: false,
//             success: function(data) {
//                 result = data;
//             }
//         });
//        return result;
//     }
//     });
//     var results = $.getValues("{{route('list_nv')}}");
//     $("#total_records").text(results.length);
//     function display(results,j){
                  
//         }
//         display(results,p);
        
//    $('select').change(function (){
//         status = $('#nv-status').val();
//         if(status == 'default')
//           display(results,p);
//         else if(status == 'busy')
//           {            
//             var temp = new Array();
//             results.forEach(e => {
//                /* trang_thai = 0 : available, 
//                  trang_thai = 1 : co viec lam roi */
//               if(e.trang_thai == 1)
//               temp.push(e);
//             });                              
//             display(temp,p);
//           }
//         else
//         {            
//             var temp = new Array();
//             results.forEach(e => {
//                /* trang_thai = 0 : available, 
//                  trang_thai = 1 : co viec lam roi */
//               if(e.trang_thai == 0)
//               temp.push(e);
//             });                              
//             display(temp,p);
//           }
//    });
//    function nextpage(){
//     if(p == Math.floor(results.length/$('#numb').val()))
//     {
//        $('#next').attr('disabled','true');
//     }
//     else
//      {
//       $('#prev').removeAttr('disabled');
//       p++;
//       display(results,p);
//      }
//   }
//    function previouspage()
//    {
//      if(p == 0)
//      {
//       $('#prev').attr('disabled','true');
//      }else
//      {
//       $('#next').removeAttr('disabled');
//        p--;
//        display(results,p);
//      }
//    }
//    previouspage();
//     $('.deletem').click(function() {    
//      if(confirm('Bạn có chắc chắn muốn xóa'))
//       {
//       }
//       else
//        return;
      
//     });
  
// </script>