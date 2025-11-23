<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    //
   public function addUser(Request $request){

        $request->validate([
            'username'=>'required | min:3 | max:15',
            'email'=>'required | email',
            'city'=>'required | uppercase',
           
        ],[
            // customize messages
            'username.required'=>'username can not be empty',
            'username.min'=>'username should be greater than 3 character',
            'username.max'=>'username should be less than 15 character',
        ]);
     return $request; 
    }
}
