<?php
namespace App\Http\Controllers;

use App\Phongban;

use Illuminate\Http\Request;

class phongbanController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function phongban()
    {
        return view('phongban') ;
    }
    public function addPhongban(Request $request)
    {
        $phongban = new Phongban;

        $phongban->maPhongban=$request->input('maPhongban');
        $phongban->tenPhongban=$request->input('tenPhongban');
        $phongban->save();
        return redirect('phongban');
    }
    public function deletePhongban($phongban_id){
       Phongban::where('phongban_id' , $phongban_id)->delete();
       return redirect()->back();
    }

    public function getEdit($phongban_id){
        $phongban = Phongban::where('phongban_id',$phongban_id);
        return view('edit',compact('phongban'));
    }
    public function postEdit(Request $request){

    }
    /*public function ajax(Request $request){
        $show_id = $request->post('show_id');
        return view('phongban',compact('$show_id'));
    }*/ 
    public function phongbanid(Request $request , $id){
        $phongban = Phongban::find($id)->getnhanvien->toArray();
        
        
        return view('chitietphongban',compact('phongban'));

    }
} 
