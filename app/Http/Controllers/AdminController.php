<?php 
namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\View;

class AdminController{

    // function adminUser($admin){
    //     return view('admin.admin',['admin'=>$admin]);
    // }

      function adminUser(){
        // return view('admin.admin',['admin'=>$admin]);
        if(View::exists('admin.admin')){
            return view('admin.admin');
        }else{
            return "No view found";
        }
    }
}
?>