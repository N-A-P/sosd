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
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::get('/crawl','AdminController@index');
Route::group(['prefix' => 'adm'/*,'middleware'=>'auth'*/], function(){
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/addnews', 'TinTucController@create');
    Route::get('/newslist', 'TinTucController@index');
    Route::get('/ajax_newslist', 'TinTucController@ajax_getlist')->name('tintuc.ajax');
    Route::post('/addnews','TinTucController@store')->name('tintuc.add');
    Route::get('/delnews/{id}','TinTucController@destroy')->name('tintuc.del');
    Route::get('/addmaids','EmployeeController@index');
    Route::get('/maidslist','EmployeeController@list_nv')->name('admin.products');
    Route::get('/addfield','EmployeeController@list_nganh')->name('list_nganh');
    Route::get('/editmaid/{id}','EmployeeController@show');
    Route::get('/ajax_maidlist','EmployeeController@list_nv_ajax')->name('nhanvien.ajax');
    Route::post('/editmaid','EmployeeController@update')->name('nhanvien.update');  
    Route::get('/delmaid/{id}','EmployeeController@destroy')->name('nhanvien.del');
    //crawl
    Route::post('/crawlEmp','AdminController@crawlEmp');
    Route::post('/crawlNews','AdminController@crawlNews');
});
