<?php

namespace App\Http\Controllers;
use App\Nhanvien;
use App\Phongban;
use Validator;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Database\Eloquent\Relations\HasMany;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class nhanvienController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function nhanvien()
    {
        return view('nhanvien') ;
        /*
         $get= Phongban::all();
         foreach($get as $g){
             //echo $g->tenphongban;
             echo '<br>';
         foreach($g->getnhanvien as $getnv){
             echo $getnv->name;
         }
         echo '<br>';
 
          }*/
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
        $nhanvien->nhanvien_id=$request->input('level');


        $nhanvien->email=$request->input('email');
        $nhanvien->phongban=$request->input('phongban');
            /*$nhanvien = $request->fileUpload;
            $new_image_name = time();
            $nhanvien->getClientOriginalName();
            $destinationPath = public_path('public/images');

            $nhanvien->images->$request->input('fileUpload');
            $nhanvien->move($destinationPath, $new_image_name);
            $nhanvien->save();*/


        if($request->hasFile('fileUpload')){
            if ($request->file('fileUpload')->isValid()){
                $file_name = $request->file('fileUpload')->getClientOriginalName();
                // Lưu file vào thư mục upload với tên là biến $filename
                $request->file('fileUpload')->move('public/images',$file_name);
            }}
        
        
        //$nhanvien->images=$request->input('fileUpload');

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
            $nhanvien = $request->fileUpload;
            $new_image_name = time();
            $nhanvien->getClientOriginalName();
            $nhanvien = new Nhanvien();
            $nhanvien->images->$request->input('fileUpload');
            $nhanvien->save();
            $nhanvien->move('public/images' , $new_image_name);

        }*/
        /*if($request->hasFile('fileUpload')){
            $request->file('fileUpload');
            $request->move('public/images');
        }*/
        $nhanvien->images=$request->input('fileUpload');

        $nhanvien->save();
        return view('nhanvien') ;


    } 
}
