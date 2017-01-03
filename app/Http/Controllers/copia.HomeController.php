<?php

namespace PublicaSalta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PublicaSalta\User;

class HomeController extends Controller
{
    //
    public function home()
    {
        return View::make("home");
    }

    public function saveUser()
    {
      /*$user = User::create([
        "name" => "Claudio",
        "email" => "Claudio@gmail.com",
        "password" => "claudio"
      ]);*/

      $user = new User();
      $user->name="Ariel";
      $user->email="Ariel@gmail.com";
      $user->password="Ariel";
      $user->save();
      return $user;
    }

    public function find()
    {
      $user = User::find(2);
      //dd($user);
      return $user;
    }

    public function edit()
    {
      $user = User::find(2);
      //dd($user);
      $user->email="claudioariel@sosa.com";
      $user->save();
      return $user;
    }

}
