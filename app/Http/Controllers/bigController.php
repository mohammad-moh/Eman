<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bigController extends Controller
{
    public function logBig()
    {
        return view('Beards.bigview');
    }

    public function saveDate(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password' => 'required|min:4|max:12',
        ]);
        $email = $request->email;
        $password= $request->password;
        return 'Email: '.$email.'<BR>'.'Password: '.$password;
    }

    public function getUrl(Request $request)
    {
        return $request->url();
    }




}

