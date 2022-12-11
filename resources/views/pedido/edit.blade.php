@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Editar Pedido</h2>
    <form action="/pedidos/{{$pedido->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1" value="{{$pedido->id}}" autofocus readonly>
        @if ($errors->has('id'))
            <span class="error text-danger" for="input-id">{{ $errors->first('id')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Código Seguimiento</label>
        <input id="codigo_seguimiento" name="codigo_seguimiento" type="text" class="form-control" value="{{$pedido->codigo_seguimiento}}" autofocus readonly>
        @if ($errors->has('codigo_seguimiento'))
            <span class="error text-danger" for="input-codigo_seguimiento">{{ $errors->first('codigo_seguimiento')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Destinatario</label>
        <input id="destinatario" name="destinatario" type="tel" class="form-control" tabindex="2" value="{{$pedido->destinatario}}" autofocus readonly>
        @if ($errors->has('destinatario'))
            <span class="error text-danger" for="input-destinatario">{{ $errors->first('destinatario')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contacto</label>
        <input id="contacto" name="contacto" type="tel" class="form-control" tabindex="2" value="{{$pedido->contacto}}" autofocus readonly>
        @if ($errors->has('contacto'))
            <span class="error text-danger" for="input-contacto">{{ $errors->first('contacto')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Peso</label>
        <input id="peso" name="peso" type="tel" class="form-control" tabindex="2" value="{{$pedido->peso}}" autofocus readonly>
        @if ($errors->has('peso'))
            <span class="error text-danger" for="input-peso">{{ $errors->first('peso')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">descripcion</label>
        <input id="descripcion" name="descripcion" type="tel" class="form-control" tabindex="2" value="{{$pedido->descripcion}}" autofocus readonly>
        @if ($errors->has('descripcion'))
            <span class="error text-danger" for="input-descripcion">{{ $errors->first('descripcion')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">email_contacto</label>
        <input id="email_contacto" name="email_contacto" type="tel" class="form-control" tabindex="2" value="{{$pedido->email_contacto}}" autofocus readonly>
        @if ($errors->has('email_contacto'))
            <span class="error text-danger" for="input-email_contacto">{{ $errors->first('email_contacto')}}</span>
        @endif
    </div>
    <div class="form mb-3">
        <label for="" class="form-label">Estado</label>
        <div class="form-group position-relative mb-3" >
            <select name="estado" id="estado" class="form-select">
                    <option value="Ingresado">Ingresado</option>
                    <option value="Recibido">Recibido</option>
                    <option value="En reparto">En reparto</option>
                    <option value="Visita sin entrega">Visita sin entrega</option>
                    <option value="Entrega con devolucion">Entrega con devolución</option>
                    <option value="Entregado">Entregado</option>
            </select>
            <div class="form-control-icon"> 
                <i class="bi bi-exclude"></i>
            </div>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Origen</label>
        <input id="origen" name="origen" type="tel" class="form-control" tabindex="2" value="{{$pedido->origen}}" autofocus readonly>
        @if ($errors->has('origen'))
            <span class="error text-danger" for="input-origen">{{ $errors->first('origen')}}</span>
        @endif
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Destino</label>
        <input id="destino" name="destino" type="tel" class="form-control" tabindex="2" value="{{$pedido->destino}}" autofocus readonly>
        @if ($errors->has('destino'))
            <span class="error text-danger" for="input-destino">{{ $errors->first('destino')}}</span>
        @endif
        </div>
        <!--
        <input id="estado" name="estado" type="tel" class="form-control" tabindex="2" value="{{old('estado')}}" autofocus>
        -->
        @if ($errors->has('estado'))
            <span class="error text-danger" for="input-estado">{{ $errors->first('estado')}}</span>
        @endif
    </div>
    
    <div class="mb-3">
        <label for="date" class="form-group">Fecha final de recepción</label>
        <br>
        <input id ="fecha_entrega" class ="form-control" type="date" value="{{$pedido->fecha_entrega}}" name="fecha_entrega" 
        min="2023-01-01" max="2025-12-31" required>
        
    </div>
    
    <!-- VEHICULO_ID -->
    <div class="mb-3">          
        <label for="" class="form-label">Vehiculo</label>
        <input id="vehiculo_id" name="vehiculo_id" type="tel" class="form-control" tabindex="2" value="{{$pedido->vehiculo_id}}" autofocus readonly>
        <br>
        <h4>Patente del vehiculo: {{$pedido->vehiculo->patente}}</h4>
        @if ($errors->has('vehiculo_id'))
            <span class="error text-danger" for="input-vehiculo_id">{{ $errors->first('vehiculo_id')}}</span>
        @endif
        
    </div>

    <!-- CLIENTE ID -->
    <div class="mb-3">
        <label for="" class="form-label">Cliente</label>
        <input id="cliente_id" name="cliente_id" type="tel" class="form-control" tabindex="2" value="{{$pedido->vehiculo_id}}" autofocus readonly>
        <br>
        <h4>Nombre Cliente: {{$pedido->user->name}} {{$pedido->user->apellido}}</h4>
        @if ($errors->has('cliente_id'))
            <span class="error text-danger" for="input-cliente_id">{{ $errors->first('cliente_id')}}</span>
        @endif
        
    </div>


    <a href="/pedidos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop