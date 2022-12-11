<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

//Referencias
use App\Models\User;
use App\Models\Servicio;
use App\Models\Vehiculo;
use App\Models\Precio;

use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoFaadExpress;
use App\Mail\FormularioMail;
use App\Mail\VisitaSinEntrega;
use App\Mail\EntregaConDevolucion;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedido.index')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //llamamos a los modelos
        $pedidos = Pedido::all();
        $users = User::all();
        $servicios = Servicio::all();
        $vehiculos = Vehiculo::all();
        $precios = Precio::all();

        return view('pedido.create')->with(compact('pedidos', 'users', 'servicios', 'vehiculos', 'precios'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //asignacion default valor vehiculo_id
        
        $pedidos = new Pedido();        
        $pedidos->id = $request -> get('id');
        $pedidos->destinatario = $request -> get('destinatario');
        $pedidos->peso = $request -> get('peso');
        $pedidos->descripcion = $request -> get('descripcion');
        $pedidos->contacto = $request -> get('contacto');
        $pedidos->email_contacto = $request -> get('email_contacto');
        $pedidos->estado = $request -> get('estado');
        $pedidos->origen = $request -> get('origen');
        $pedidos->destino = $request -> get('destino');
        $pedidos->fecha_entrega = $request -> get('fecha_entrega');
        
        $codigo = time();
        $pedidos->codigo_seguimiento = date(('mdHis'), $codigo);

        //Claves foraneas
        $pedidos->vehiculo_id = $request -> get('vehiculo_id');
        $pedidos->cliente_id = $request -> get('cliente_id');

        
        //Calculo servicio
        if($pedidos->peso <= 50){
            $pedidos->servicio_id = 1;
        }else{
            $pedidos->servicio_id = 2;
        }
        

        $pedidos->save();

        Mail::to($request->user())
        ->send(new PedidoFaadExpress($pedidos));
        

        return redirect('/pedidos');
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
        
        $pedido = Pedido::find($id);
        //llamamos a los modelos
        $users = User::all();
        $servicios = Servicio::all();
        $vehiculos = Vehiculo::all();
        $precios = Precio::all();

        return view('pedido.edit')->with('pedido', $pedido);
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
        $pedidos = Pedido::find($id);

        $pedidos->id = $request -> get('id');
        $pedidos->codigo_seguimiento = $request -> get('codigo_seguimiento');
        $pedidos->destinatario = $request -> get('destinatario');
        $pedidos->peso = $request -> get('peso');
        $pedidos->descripcion = $request -> get('descripcion');
        $pedidos->contacto = $request -> get('contacto');
        $pedidos->email_contacto = $request -> get('email_contacto');
        $pedidos->estado = $request -> get('estado');
        $pedidos->fecha_entrega = $request -> get('fecha_entrega');

        //Claves foraneas
        $pedidos->vehiculo_id = $request -> get('vehiculo_id');
        $pedidos->cliente_id = $request -> get('cliente_id');

        //Envio correo
        if($pedidos->estado == "Entregado"){
            Mail::to($request->user())
            ->send(new FormularioMail());
        }

        elseif($pedidos->estado == "Visita sin entrega"){
            Mail::to($request->user())
            ->send(new VisitaSinEntrega($pedidos));
        }

        elseif($pedidos->estado == "Entrega con devolucion"){
            Mail::to($request->user())
            ->send(new EntregaConDevolucion($pedidos));
        }

        $pedidos->save();

        return redirect('/pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido -> delete();
        return redirect ('/pedidos');
    }
}