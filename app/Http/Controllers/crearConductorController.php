<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crearConductorController extends Controller
{
    public function retornoCrearConductor(){
        return view('crearConductores');
    }
}
