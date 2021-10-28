<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\comment;

class CommUserController extends Controller
{
    public function createEle(){

        $user1 = new User();
        $user1->name = 'Mohammad';
        $user1->email  ='mohammad@gmail.com';
        $user1->password = encrypt('abcdefgh12345');
        $user1->save();
        $comm = new comment();
        $comm->title = 'first comment';
        $user1->comm()->save($comm);

        return 'Inserting column Done';
    }
}
