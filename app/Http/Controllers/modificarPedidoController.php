<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modificarPedidoController extends Controller
{
    public function retornoModificarPedido(){
        return view('modificarPedido');
    }
}
