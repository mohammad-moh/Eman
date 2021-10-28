<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\gitt;

class gittController extends Controller
{
    public function getData()
    {
        $git = new gitt();
        $git->title= 'Mohammad';
        $user = new User();
        $user->name='Salamat';
        $user->email='sla@gmail.com';
        $user->password = encrypt('abcdefgh12345');
        $user->save();
        $user->gitter()->save($git);
        return 'new product has been done';
    }
}
