<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function homeView()
    {
        return view('BackEnd.home');
    }

    public function gethome(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:11'
        ]);
        $em = $request->email;
        $pass = $request->password;
        return 'Email: '.$em."<br>".'Password'.$pass;
    }

    public function getAllEle()
    {
        $elements = DB::table('homes')->get();
        return view('BackEnd.allhome', compact('elements'));
    }
    public function getHomeById($id)
    {
        $item =DB::table('homes')->where('id',$id)->first() ;
        return view('BackEnd.one-Ele-home', compact('item'));
        #return $item;
    }
}
