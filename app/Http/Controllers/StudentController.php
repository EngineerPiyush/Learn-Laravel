<?php 
namespace App\Http\Controllers;

class StudentController extends Controller{

    function studentAshish(){
        return "this is ashsih";
    }
    function studentPiyush(){
        return "this is piyush";
    }
    function studentWithName($name){
        return "this is student ".$name;
    }

    
}

?>