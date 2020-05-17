<?php

namespace App\Http\Controllers;
use App\Nhanvien;
use App\Phongban;
use Validator;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class nhanvienController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function nhanvien()
    {
        return view('nhanvien') ;
    }
    public function Nhanvienform(){

        return view('form_nhanvien');
    }
    public function addNhanvien(Request $request){

        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'tuoi' => 'required',
            'email' => 'required',
            'phongban' => 'required',
            'level' => 'required',
            


            
        ],
        [
            'name.required' => 'Bạn chưa nhập họ tên',
            'tuoi.required' => 'Bạn chưa nhập tuổi',
            'email.required' => 'Bạn chưa nhập email',
            'phongban.required' => 'Bạn chưa nhập phòng ban',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'level.required' => 'Bạn chưa nhập level',
            



        ]);
        $nhanvien= new Nhanvien;
        $nhanvien->name=$request->input('name');
        $nhanvien->password=Hash::make($request->input('password'));
        //$nhanvien = Hash::make('password');
        $nhanvien->age=$request->input('tuoi');
        $nhanvien->level=$request->input('level');

        $nhanvien->email=$request->input('email');
        $nhanvien->phongban=$request->input('phongban');
        /*if($request->hasFile('fileUpload')){
            $nhanvien = $request->fileUpload;
            $new_image_name = time();
            $nhanvien->getClientOriginalName();
            $nhanvien->images->$request->input('fileUpload');
            $nhanvien->move('public/images', $request->input('fileUpload'));

        }*/
        
        
        $nhanvien->images=$request->input('fileUpload');

        $nhanvien->save();
        return view('nhanvien') ;
        


    }

    public function deleteNhanvien($id){
        $nhanvien = Nhanvien::where('id' , $id)->delete();
        return redirect()->back();
    }
    public function editNhanvien($id){
        $nhanvien = Nhanvien::Find($id);
        return view('form_edit_nhanvien', compact('nhanvien'));
    }
    public function addNhanvien2(Request $request , $id){
        $nhanvien=  Nhanvien::find($request->id);
        $nhanvien->name=$request->input('name');
        $nhanvien->age=$request->input('tuoi');

        $nhanvien->email=$request->input('email');
        $nhanvien->phongban=$request->input('phongban');
        if($request->hasFile('fileUpload')){
            $nhanvien = $request->fileUpload;
            $new_image_name = time();
            $nhanvien->getClientOriginalName();
            $nhanvien = new Nhanvien();
            $nhanvien->images->$request->input('fileUpload');
            $nhanvien->save();
            $nhanvien->move('public/images' , $new_image_name);

        }
        /*if($request->hasFile('fileUpload')){
            $request->file('fileUpload');
            $request->move('public/images');
        }*/
        //$nhanvien->images=$request->input('fileUpload');

        $nhanvien->save();
        return view('nhanvien') ;


    } 
}
