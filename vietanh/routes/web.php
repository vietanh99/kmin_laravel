<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('trangchu');
});
/*Route::get('/index', function () {
    return view('index');
});
Route::get('/header', function () {
    return view('header');
});*/
Route::get('/profile', 'indexController@index' );
Route::get('/nhanvien','nhanvienController@nhanvien' );
Route::get('/phongban','phongbanController@phongban' );

Route::get('/addnv','addnvController@addnv' );

Route::get('/quanlyns','quanlynsController@quanlyns' );

Route::get('/trangchu','trangchuController@trangchu' );
Route::get('/bangcong','bangcongController@bangcong' );
Route::get('/bangluong','bangluongController@bangluong' );
Route::get('/baohiemyte','baohiemController@baohiem' );
Route::get('/du_an','duanController@duan' );




   



