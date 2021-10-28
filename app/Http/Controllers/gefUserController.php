<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gef;
use App\Models\User;
class gefUserController extends Controller
{
    public function getsEle()
    {
        $gt = new gef();
        $gt->body= "Get tow Body";
        $user = new User();
        $user->name= 'Hanen';
        $user->email = 'hasac@gmail.com';
        $user->password = encrypt('hane12345');
        $user->save();
        $user->gef()->save($gt);

        return 'Adding new Item Done';

    }
}
