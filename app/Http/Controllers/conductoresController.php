<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conductoresController extends Controller
{
    public function retornoConductores(){
        return view('conductores');
    }
}
