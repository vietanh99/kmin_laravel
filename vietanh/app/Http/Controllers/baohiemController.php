<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baohiemController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 public function baohiem(){
    return view('baohiemyte') ;

}}

