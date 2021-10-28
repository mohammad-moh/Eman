<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\op;
use App\Models\User;

class opController extends Controller
{
  public function getOp()
  {
      $opt = new op();
      $opt->name= 'Mohammad';
      $user = new User();
      $user->name = 'slamat';
      $user->email= 'slaa@gmail.com';
      $user->password = encrypt('abcdefgh12345');
      $user->save();
      $user->opst()->save($opt);
      return 'Done';
  }
  public function getUserById($id)
  {
      $opstit = User::find($id)->opst;
      return $opstit;
  }

}
