<?php

namespace App\Http\Controllers;

use App\Bangcong;
use App\Nhanvien;
use Illuminate\Http\Request;

class bangcongController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function bangcong(){
        
        return view('bangcong');
    }
    public function formbangcong(){
        return view('form_bangcong');
}
    public function addBangcong(Request $request){
        $bangcong = new Bangcong();
        $bangcong->name = $request->input('name');
        $bangcong->bangcong = $request->input('socong');
        $bangcong->save();
        return view('bangcong');
    }
    public function deleteBangcong($id){
        $bangcong = Bangcong::where('id' , $id )->delete();
        return redirect()->back();
    }
    public function getedit($id){
        $bangcong = Bangcong::Find($id);
        return view('form_editbangcong' , compact('bangcong') );
    }
    public function postEdit(Request $request , $id){
        $bangcong = Bangcong::Find($request->id);
        $bangcong->name = $request->input('name');
        $bangcong->bangcong = $request->input('socong');
        $bangcong->save();
        return view('bangcong');

    }
}
