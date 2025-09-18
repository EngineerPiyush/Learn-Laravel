<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class DatabaseConnect extends Controller
{
    public function getUsers(){
        $users = DB::select('select * from users');
        return view('users',['users'=>$users]);
    }
}
