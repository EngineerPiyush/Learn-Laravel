<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // calling controller from route
    // function getUser(){
    //     return "this is piyush";
    // }
    // function setUser($name){
    //     return "User name is $name";
    // }
    // function getUser($name){
    //     return view('getuser',['name'=>$name]);
    // }

    // getting form data in a controller
    // function setUser(Request $request){
    //     echo "User name is ".$request->name;
    //     echo " User email is ".$request->email;
    //     echo " User password is ".$request->password;

    //     echo "User skills are ". implode(",",$request->skills); 
    //     echo " User gender is ".$request->gender;
    //     echo " User age is ".$request->age;
    //     echo " User city is ".$request->city;
    // }

    // validation form data from a controller
    // function setUser(Request $request){
    //     $request->validate([
    //         'name'=>'required | min:3 | max:10 | uppercase',
    //         'email'=>'required | email',
    //         'password'=>'required',
    //         'skills'=>'required',
    //         'gender'=>'required'
    //     ],[
    //         'name.required'=>'name can not be blank',
    //         'name.min'=>'name should be min 3 character',
    //         'name.max'=>'name should be max 10 character',
    //         'name.uppercase'=>'name shoud be uppercase only',
    //         'email.required'=>'email with right format is necessary',
    //         'gender'=>'you need to provide gender'
    //     ]
    //     );    
    // }

    // using named route 
    // function renameRoute(){
    //     // return redirect()->to('test-url/url-generation/getPage');
    //     return to_route('url');
    // }
    // function renameRouteWithParameter(){
    //     return to_route('pk',['name'=>'Piyush']);
    // }

    // controller for prefix route
    function userAshish(){
        return view('user.ashish');
    }
    
}
