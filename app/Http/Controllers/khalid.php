<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class khalid extends Controller
{
    public function we($name=null){

    // $ob=new stdClass;
        // $ob->name="khalidTaher";
        // $ob->Age=25;
        $array=['khalid',"Taher","Abdullah","Abdulman'a"];
        return view("welcome",compact('array'));
    }
}