<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RdController extends Controller
{

    public function index()
    {
        return view('Rd_content.index');
    }

    // ログアウト時の処理を指定。web.phpにてpost通信になるように改変してあるので、通常通りのログアウト処理でOK

    // use AuthenticatesUsers;

    // public function logout(Request $request)
    // {
    //     $this->guard()->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return $this->loggedOut($request) ?: redirect('/');
    // }
}
