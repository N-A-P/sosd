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

Route::get('/a', function () {
    return view('welcome');
});
Route::get('/','PagesController@index');
Route::get('about','PagesController@about');
Route::get('lien-he','PagesController@lienhe');
Route::get('dichvu','PagesController@dichvu');
Route::get('dichvu/giadinh','PagesController@giupviec');
Route::get('debug',function(){
    return view('pages.debug');
});
Route::get('/tintuc','PagesController@tintuc');
Route::get('/nhanvien/{id}','PagesController@chitietnhanvien');
Route::get('/nhanvien','PagesController@nhanvien');


/*admin*/
Route::resource('/quanlynguoigiupviec','EmployeeController');
Route::get('/admin','AdminController@login');
Route::get('/asd',function(){
    return view('admin.qly-themnguoigv');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');
