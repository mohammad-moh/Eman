<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login');
    }
    public function getInput(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        return 'The email: '.$email.'<br>'.'Password: '.$password;
    }
    public function getStr(Request $request)
    {
        return $request->url();
    }
}
