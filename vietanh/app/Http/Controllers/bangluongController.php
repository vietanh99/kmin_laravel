<?php

namespace App\Http\Controllers;

use App\bangluong;
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
    public function addbangluong(Request $request){
        $bangluong = new bangluong();
        $bangluong->tennhanvien=$request->input('name');
        $bangluong->socong=$request->input('socong');
        $bangluong->luongngay=$request->input('luong');
        $bangluong->luongtong=$request->input('socong')*$request->input('luong');
        $bangluong->save();
        return view('bangluong');
    }
}
