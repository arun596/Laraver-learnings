<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserControler extends Controller
{
    function getUser(){
        // return "Arun Sharma";
        $name="Arun Sharma";
        $users = ["Arun","Vishnu","Rajat"];
        return view('user',["name"=>$name],["users"=>$users]);
    }
    function aboutUser(){
        return "Hello i am arun sharma";
    }
    function getUserName($name){
        return "Hello i am $name";
    }
    function adminLogin(){
        if(View::exists('admin.login')){
            return view('admin.login');
        }else{
            echo "No view Found";
        }
    }
}
