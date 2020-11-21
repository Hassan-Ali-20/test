<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class test2 extends Controller
{
    public function __construct()
    {
        $this->Middleware('auth');
    }
    //
    public function s1 (){

        return "s1";
    }
    public function s2 (){

        return "s2";
    }
    public function s3 (){

        return "s3";
    }
    public function s4 (){

        return "s4";
    }
}
