<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_Controller extends Controller
{
    public function inicio(){
        return view('hola');
    }
}