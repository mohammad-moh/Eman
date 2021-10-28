<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestController extends Controller
{
    public function indexRest()
    {
        return view('BackEnd.rest');
    }

    public function getRest(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        return 'Email: '.$email.'<BR>'.'Password: '.$password .'<BR>'.$request->url();
    }
   



}
