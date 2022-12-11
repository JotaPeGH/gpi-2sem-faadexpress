<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precio;
use App\Models\Servicio;
use App\Models\Vehiculo;
use App\Models\Pedido;
use App\Models\User;




class PrecioController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $precios = Precio::all();
        return view('precio.index')->with('precios', $precios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('precio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $precios = new Precio();
        $precios->id = $request -> get('id');
        $precios->origen = $request -> get('origen');
        $precios->destino = $request -> get('destino');
        $precios->precio = $request -> get('precio');
        

        $precios->save();

        return redirect('/precios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $precio = Precio::find($id);
        return view('precio.edit')->with('precio', $precio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $precio = Precio::find($id);

        $precio->id = $request -> get('id');
        $precio->origen = $request -> get('origen');
        $precio->destino = $request -> get('destino');
        $precio->precio = $request -> get('precio');
        

        $precio->save();

        return redirect('/precios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $precio = Precio::find($id);
        $precio -> delete();
        return redirect ('/precios');
    }
}
