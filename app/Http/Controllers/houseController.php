<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class houseController extends Controller
{
    public function logHouse()
    {
        return view('BackEnd.house');
    }

    public function getHouse(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:12'
        ]);
        $email = $request->email;
        $password = $request->password;
        return 'Email: '.$email. '<BR>'.'Password: '.$password;
    }
}
