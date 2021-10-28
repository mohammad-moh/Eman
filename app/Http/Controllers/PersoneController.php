<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersoneController extends Controller
{

    public function getsAllElement()
    {
        $elements = DB::table('persons')->get();
        return view('BackEnd.persones', compact('elements'));
    }

    public function GetEleById($id)
    {
        $item = DB::table('persons')->where('id',$id)->first();
        return view('/BackEnd.person', compact('item'));
    }
}
