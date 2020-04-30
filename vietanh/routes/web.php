<?php

use App\Http\Controllers\phongbanController;
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
Route::get('/form', function () {
    return view('form');
});
Route::get('/profile', 'indexController@index' );
Route::get('/nhanvien','nhanvienController@nhanvien' );
Route::get('/phongban',"phongbanController@phongban");
//Route::get('/phongbanadd','phongbanController@addPhongban' );
//Route::get('/phongbandelete/{phongban_id}','phongbanController@phongbandelete');

Route::get('/trangchu','trangchuController@trangchu' );
Route::get('/bangcong','bangcongController@bangcong' );
Route::get('/bangluong','bangluongController@bangluong' );
Route::get('/baohiemyte','baohiemController@baohiem' );
Route::get('/du_an','duanController@duan' );
Route::get('insertPhongban' , 'phongbanController@insert');

Route::group(['prefix'=>'phongban'],function(){
    Route::get('addPhongban','phongbanController@addPhongban');
    Route::get('deletePhongban/{phongban_id}','phongbanController@deletePhongban');
    Route::get('getEdit/{phongban_id}','phongbanController@getEdit');
    Route::post('postEdit/{phongban_id}','phongbanController@postEdit');
});
Route::get('ajax', 'phongbanController@ajax' );
Route::get('form_nhanvien', 'nhanvienController@Nhanvienform');
Route::get('addNhanvien', 'nhanvienController@addNhanvien');
Route::get('formEdit/addNhanvien2/{id}' , 'nhanvienController@addNhanvien2');

Route::get('deleteNhanvien/{id}', 'nhanvienController@deleteNhanvien');
Route::get('formEdit/{id}','nhanvienController@editNhanvien');





   



