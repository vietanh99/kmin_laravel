<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function getlogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return view('nhanvien');
        } else {
            $er = 'Thông tin đăng nhập không chính xác';
            return view('login' , compact('er'));
        }
    }
    public function logout(){
        Auth::logout();
        return view('login');
    }
}
