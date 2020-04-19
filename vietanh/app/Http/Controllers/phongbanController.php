<?php

namespace App\Http\Controllers;
use App\Phongban;

use Illuminate\Http\Request;

class phongbanController extends Controller
{
    public function phongban()
    {
        return view('phongban') ;
    }
    public function insert()
    {
        $user = new Phongban;
        $user->maPhongban="002";
        $user->tenPhongban="Nhanvien";
        $user->save();
        return view('phongban') ;
}
}
