<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\moon;

class moonController extends Controller
{
    public function getItemById()
    {
        $moonIn = new moon();
        $moonIn->title = 'Mohammad';
        $user = new User();
        $user->name= "Alsalamat";
        $user->email = 'slamat@gmail.com';
        $user->password=encrypt('moon12345');
        $user->save();
        $user->moonIt()->save($moonIn );
        return "Record has been Done successfully";
    }

    public function getId($id)
        {
            $item = User::find($id)->moonIt;
            return $item;
        }

}
