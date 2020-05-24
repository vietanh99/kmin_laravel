<?php

namespace App\Http\Controllers;

use App\bangluong;
use App\Nhanvien;
use Illuminate\Http\Request;

class bangluongController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(){
        return view('bangluong');
}
    public function form_bangluong(){
        return view('form_bangluong');
    } 
    public function addbangluong(Request $request ){
        $bangluong = new bangluong();
        $bangluong->tennhanvien =$request->mail;
        $bangluong->socong=$request->input('socong');

        $bangluong->luongngay=$request->input('luong');
        $bangluong->luongtong=$request->input('socong')*$request->input('luong');
        $bangluong->save();
        return view('bangluong');
    }
    public function delete($id){
        $bangluong = bangluong::Where('id' , $id)->delete();
        return view('bangluong');

    }
    public function editbangluong($id){
        $bangluong = bangluong::Find($id);
        return view('form_editbangluong' , compact('bangluong'));

    }
    public function geteditbangluong(Request $request,$id ){
        $bangluong = bangluong::Find($request->id);
        $bangluong->tennhanvien =$request->input('email');
        $bangluong->socong=$request->input('socong');

        $bangluong->luongngay=$request->input('luong');
        $bangluong->luongtong=$request->input('socong')*$request->input('luong');
        $bangluong->save();
        return view('bangluong');
    }
}
