<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function halamanlogin()
    {
        return view('login.login-frb');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return view('login.login-frb');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect ('/');
    }
}
