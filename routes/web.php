<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use Illuminate\Support\Facades\Route;

// creating routes and showing view through routes 
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
// route::redirect('/','/home');

// using routes with controller and views by passing data from routes
Route::get('/getUser',[UserController::class,'getUser']);
Route::get('/setUser/{Piyush}',[UserController::class,'setUser']);
Route::get('/admin/{admin}',[AdminController::class,'adminUser']);
Route::view('/get-user/{name}','getuser');
Route::get('/get-user/{name}',[UserController::class,'getUser']);
Route::get('/admin',[AdminController::class,'adminUser']);

Route::view('/sub-view','welcome');

// getting and submitting a form
Route::view('user-form','user.user-form');
Route::post('/adduser',[UserController::class,'setUser']);

// named route concept
Route::view('test-url','user.get-url');
Route::view('test-url/url-generation/getPage','user.get-url')->name('url');
Route::view('test-url/url-generation/getPage/{name}','user.get-url')->name('pk');
Route::get('test-url',[UserController::class,'renameRoute']);
Route::get('pk',[UserController::class,'renameRouteWithParameter']);

// prefix route group
Route::prefix('college/student')->group(function(){
    Route::view('/piyush','user.piyush');
    Route::get('/ashish',[UserController::class,'userAshish']);
});

Route::controller(StudentController::class)->group(function(){
    Route::get('/ashish','studentAshish');
    Route::get('/piyush','studentPiyush');
    Route::get('/student/{name}','studentWithName');
});

// Middlare are Routes
// Route::view('/home','home')->middleware('check1');
Route::view('/sub-view','welcome')->middleware(AgeCheck::class);

