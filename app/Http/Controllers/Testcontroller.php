<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function Hello(){
        return 'Mehedi Hassan';
    }

    public function Hi(){
        return 'Mehedi patwary';
    }
    public function getuser(){
        return 'This is a user route';
    }
    public function userprofile(Request $request){
        return $request->email;
    }
    public function userpost(Request $request){
        return 'from user post';
    }
}
