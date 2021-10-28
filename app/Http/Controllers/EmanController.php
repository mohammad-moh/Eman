<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmanController extends Controller
{

    public function getAllEle(){
        $elems = DB::table('emen')->get();
        return view('BackEnd.eman', compact('elems'));
    }

    public function getOne($id)
    {
        $item = DB::table('emen')->where('id', $id)->first();
        return view('BackEnd.oneemen', compact('item'));
    }
    public function deleteItem($id)
    {
        DB::table('emen')->where('id',$id)->delete();
        return back()->with('amen_del','Deleted has been successfully');
    }

}
