<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller{
    
    public function inicio(){

        return view('pages.principal');
    }

    public function listas(){

        return view('pages.listas');
    }
}
