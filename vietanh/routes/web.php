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
    return view('welcome');
});
/*Route::get('/hello', function(){
    return view('hello', ['name' => 'Kmin']);
    });
    Route::group(['prefix'=>'/admin'],function(){
        Route::get('/danhsachnghiviec','adminController@danhsachnghiviec');
        Route::get('/phongban','adminController@phongban');
        Route::get('/chucvu','adminController@chucvu');
        Route::get('/bangcap','adminController@bangcap');
        });
        /*Route::post(‘/nhanvien’,nhanvienController@create)
        {
        });
        Route::post(‘/nhanvien/{id}’,nhanvienController@edit)
        {
        });
        Route::delete(‘/nhanvien/{id}’,nhanvienController@destroy)
        {
        });
        Route::post(‘/nhanvien/{id}’,nhanvienController@update)
        {
        });*/
Route::get('/trangchu',function (){
    return view('trangchu');
});
Route::get('/trangchu',function (){
    return view('trangchu');
});

   



