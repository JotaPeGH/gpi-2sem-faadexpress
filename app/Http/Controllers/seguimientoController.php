<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\crearPedidoController;

use App\Models\Pedido;


class seguimientoController extends Controller
{
    public function retornoSeguimiento(){

        return view('seguimiento');
    }


  public function search(Request $request){

    $pedidos = Pedido::search($request->searchText)->get();

    return view('seguimiento', compact('pedidos'));
  }





}

