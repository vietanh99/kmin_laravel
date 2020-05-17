<?php

namespace App\Http\Controllers;

use App\Nhanvien;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request){
        $search = $request->input('search');
        $ten = Nhanvien::where('name','LIKE' ,'%' .$search .'%')->orWhere('email','LIKE' ,$search)->get();
        if(count($ten)>0){
            return view('search',compact('ten'));
        }
        else{
            $er = 'Tên hoặc email không đúng';
            return view('nhanvien',compact('er'));
        }

    }
}
