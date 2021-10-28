<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LusyController extends Controller
{
    public function loss(Request $request){
        return view('loss');
    }

    public function getLusy(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:12',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        return 'Email : '.$email.'<br>'.'Password: '.$password;
    }
}
