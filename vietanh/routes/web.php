<?php

use Illuminate\Support\Facades\Route;
use App\nhanviens;

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
Route::get('/index', function () {
    return view('baitap.index');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/profile', 'indexController@index' );
Route::get('/nhanvien','nhanvienController@nhanvien' );
Route::get('/phongban','phongbanController@phongban' );

Route::get('/addnv','addnvController@addnv' );


Route::get('/trangchu','trangchuController@trangchu' );
Route::get('/bangcong','bangcongController@bangcong' );
Route::get('/bangluong','bangluongController@bangluong' );
Route::get('/baohiemyte','baohiemController@baohiem' );
Route::get('/du_an','duanController@duan' );
Route::get("insert",function(){

    for($i=1;$i<=10;$i++){
        $user = new nhanviens();
        $user->nhanvien_username="vietanh".$i;
        $user->nhanvien_gmail="email".$i."@gmail.com";
        $user->nhanvien_hovaten="phamvietanh".$i;
        $user->nhanvien_password=rand(1000,2000);
        $user->save();
    }
    
});
Route::get("get",function(){
    foreach(nhanviens::get() as $user){
        echo $user->nhanvien_username;
    }
});
Route::get('insertPhongban' , 'phongbanController@insert');




   



