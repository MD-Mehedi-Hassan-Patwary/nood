<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hicontroller extends Controller
{
  public function mehedi(){
    return'Love you laravel';
  }
  public function getuser($userid , $name){
    return response()->json([

      'user'=>$userid,
      'name'=>$name,

    ]);
}
}
