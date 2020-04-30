<?php

namespace App\Http\Controllers;
use App\Nhanvien;
use App\Phongban;

use Illuminate\Http\Request;

class nhanvienController extends Controller
{
    public function nhanvien()
    {
        return view('nhanvien') ;
    }
    public function nhanviens(){
        
    }
    public function Nhanvienform(){

        return view('form_nhanvien');
    }
    public function addNhanvien(Request $request){
        $nhanvien= new Nhanvien;
        $nhanvien->name=$request->input('name');
        $nhanvien->age=$request->input('tuoi');

        $nhanvien->email=$request->input('email');
        $nhanvien->phongban=$request->input('phongban');
        /*if($request->hasFile('fileUpload')){
            $file = $request->fileUpload;
            $new_image_name = time();
            $file->getClientOriginalName();
            $image = new Nhanvien();
            $image->images->$new_image_name;
            $image->save();

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
        /*if($request->hasFile('fileUpload')){
            $file = $request->fileUpload;
            $new_image_name = time();
            $file->getClientOriginalName();
            $image = new Nhanvien();
            $image->images->$new_image_name;
            $image->save();

        }*/
        $nhanvien->images=$request->input('fileUpload');

        $nhanvien->save();
        return view('nhanvien') ;


    } 
}
