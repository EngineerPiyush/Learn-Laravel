<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function getUser(){
    //     return "this is piyush";
    // }

    // function setUser($name){
    //     return "User name is $name";
    // }

    // function setUser(Request $request){
    //     echo "User name is ".$request->name;
    //     echo " User email is ".$request->email;
    //     echo " User password is ".$request->password;

    //     echo "User skills are ". implode(",",$request->skills); 
    //     echo " User gender is ".$request->gender;
    //     echo " User age is ".$request->age;
    //     echo " User city is ".$request->city;
    // }
    function setUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'skills'=>'required',
            'gender'=>'required'
        ]
        );    
    }


    function getUser($name){
        return view('getuser',['name'=>$name]);
    }
}
