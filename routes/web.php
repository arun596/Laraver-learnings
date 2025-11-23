<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\UserFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-form',function(){
    return view('user-form');
});

//route for controller
Route::get('user',[UserControler::class,'getUser']);
Route::get('AboutUser',[UserControler::class,'aboutUser']);
Route::get('userName/{name}',[UserControler::class,'getUserName']);
Route::get('admin',[UserControler::class,'adminLogin']);
Route::post('adduser',[UserFormController::class,'addUser']);




//
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/common', function () {
    return view('common.inner');
});



//home page route
// another route method
// Route::view('home','home');



// redirection from home page to welcome page
Route::redirect('home','/');


//pasing a parameter in about page route
Route::get('/about/{name}',function($name){
    return view('about',['name'=>$name]);
});