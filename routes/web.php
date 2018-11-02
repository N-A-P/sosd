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
Route::get('/lien-he','PagesController@lienhe')->name('pages.lienhe');
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
 Route::get('/asd',function(){
     return view('admin.qly-themnguoigv');
 });

 Auth::routes();
 Route::resource('/quanlytintuc','TinTucController');
Route::get('/addnews',function(){
     return view('admin.themTintuc');
 });
 Route::get('/admin', 'DashboardController@index');