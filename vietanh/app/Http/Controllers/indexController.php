<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $a = $_GET['txtname'];
        //echo $a."<br> <br>";
        $b = $_GET['txtsdt'];
        //echo $b."<br><br>";
        $c = $_GET['txtdiachi'];
        //echo $c;
        return view('profile',compact('a' , 'b' , 'c'));
    }
}