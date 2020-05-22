<?php

use App\Http\Controllers\phongbanController;
use App\Nhanvien;
use Illuminate\Support\Facades\Route;
use App\nhanviens;
use Facade\FlareClient\Http\Response;

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
    return view('login');
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
Route::get('/nhanvien' , ["as"=>'nhanvien' ,'uses'=>'nhanvienController@nhanvien'] );
Route::get('/phongban', ["as"=>'phongban', 'uses' => "phongbanController@phongban"]);
Route::get('/bangcong',["as"=>'bangcong' , 'uses'=>'bangcongController@bangcong' ]);
Route::get('/bangluong',["as"=>'bangluong' ,'uses'=> 'bangluongController@bangluong' ]);
Route::get('/baohiemyte',['as'=>'baohiemyte', 'uses'=>'baohiemController@baohiem' ]);
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

Route::get('deleteNhanvien/{id}','nhanvienController@deleteNhanvien');
Route::get('formEdit/{id}','nhanvienController@editNhanvien');
Route::get('login','loginController@login');
Route::post('/getlogin', 'loginController@getlogin');
Route::get('logout','loginController@logout');
Route::get('form_bangcong', 'bangcongController@formbangcong' );
Route::get('addBangcong' , 'bangcongController@addBangcong' );
Route::get('deletebangcong/{id}','bangcongController@deleteBangcong');
Route::get('editBangcong/{id}' , 'bangcongController@getEdit');
Route::get('editBangcong/postEdit_bangcong/{id}' , 'bangcongController@postEdit');
Route::get('baohiemyte', ['as'=>'baohiemyte','uses'=>'baohiemyteController@index'] );
Route::get('bangluong' , ['as'=>'bangluong' , 'uses'=>'bangluongController@index']);
Route::get('form_bangluong', 'bangluongController@form_bangluong');
Route::get('addbangluong', 'bangluongController@addbangluong');
Route::post('search','searchController@search');
Route::delete('/links/{nhanvien_id?}', function ($nhanvien_id) {
    $nhanvien = Nhanvien::destroy($nhanvien_id);
    //return Response::json($nhanvien);
});
Route::get('phongbanid/{id}', 'phongbanController@phongbanid' );




   



