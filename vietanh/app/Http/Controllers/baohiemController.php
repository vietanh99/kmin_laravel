<?php

namespace App\Http\Controllers;

use App\baohiem;
use Baohiem as GlobalBaohiem;
use Illuminate\Http\Request;

class baohiemController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 public function baohiem(){
    return view('baohiemyte') ;

}
public function delete(Request $request , $id){
    $baohiem = baohiem::Where('id' ,$id)->delete();
    return view('baohiemyte') ;


}
public function addbh(){
    return view('addbh');

}
public function addbaohiem(Request $request){
    $baohiem = new baohiem;
    $baohiem->email=$request->mail;
    $baohiem->save();
    
    return view('baohiemyte');

}
}

