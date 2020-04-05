<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Request $request)
    {
        /*$a = $_GET['txtname'];
        //echo $a."<br> <br>";
        $b = $_GET['txtsdt'];
        //echo $b."<br><br>";
        $c = $_GET['txtdiachi'];
        //echo $c;
        return view('profile',compact('a' , 'b' , 'c'));*/
        $name = $request->input('txtname');
           $sdt = $request->input('txtsdt');
           $diachi = $request->input('txtdiachi');
           return view('baitap.profile', compact('name', 'sdt', 'diachi'));
    }
}