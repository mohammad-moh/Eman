<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modo;
use App\Models\User;

class modoController extends Controller
{
    public function getEle(){
        $mod = new modo();
        $mod->name = 'mohammad';
        $user = new User();
        $user->name = 'Mohammad';
        $user->email = 'mohad@gmail.com';
        $user->password = encrypt('abcdefg12345');
        $user->save();
        $user->modo()->save($mod);
        return 'Done';



    }
}
