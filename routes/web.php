<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home');
// });
Route::view('/home','home');

Route::get('/about/{name}',function($name){
    return view('about',['name'=>$name]);
});
route::redirect('/','/home');

Route::get('/getUser',[UserController::class,'getUser']);
Route::get('/setUser/{Piyush}',[UserController::class,'setUser']);

Route::get('/admin/{admin}',[AdminController::class,'adminUser']);

Route::view('/get-user/{name}','getuser');
Route::get('/get-user/{name}',[UserController::class,'getUser']);
Route::get('/admin',[AdminController::class,'adminUser']);

Route::view('/sub-view','welcome');

Route::view('user-form','user.user-form');
Route::post('/adduser',[UserController::class,'setUser']);