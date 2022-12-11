<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crearPedidoController extends Controller
{
    public function retornoCrearPedido(){
        return view('crearPedido');
    }
}
