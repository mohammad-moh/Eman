<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidController extends Controller
{
    public function widView()
    {
        return view('BackEnd.window') ;
    }

    public function getWid(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:12',
        ]);
        $email = $request->email;
        $password = $request->password;
        return 'Email: '.$email.'<br>'.'Password: '.$password;
    }

}
