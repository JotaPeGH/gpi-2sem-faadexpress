@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Crear Pedido</h2>
    <form class="needs-validation" action="/pedidos" method="POST" validate>
    @csrf
    
    <div class="mb-3">
        <label for="" class="form-label">Destinatario</label>
        <input id="destinatario" name="destinatario" type="tel" class="form-control" tabindex="2" value="{{old('destinatario')}}" autofocus required>
        <div class="invalid-feedback">
            Ingrese un destinatario.
        </div>
        @if ($errors->has('destinatario'))
            <span class="error text-danger" for="input-destinatario">{{ $errors->first('destinatario')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Peso(Kg)</label>
        <input id="peso" name="peso" type="tel" class="form-control" tabindex="2" value="{{old('peso')}}" autofocus required>
        <div class="invalid-feedback">
           Ingrese un peso.
        </div>
        @if ($errors->has('peso'))
            <span class="error text-danger" for="input-peso">{{ $errors->first('peso')}}</span>
        @endif
    </div>
        
    <div class="mb-3">
        <label for="" class="form-label">Descripción del pedido</label>
        <input id="descripcion" name="descripcion" type="tel" class="form-control" tabindex="2" value="{{old('descripcion')}}" autofocus required>
        <div class="invalid-feedback">
            Ingrese una descripción.
        </div>
        @if ($errors->has('descripcion'))
            <span class="error text-danger" for="input-descripcion">{{ $errors->first('descripcion')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Número de contacto</label>
        <input id="contacto" name="contacto" type="tel" class="form-control" tabindex="2" value="{{old('contacto')}}" autofocus required>
        <div class="invalid-feedback">
            Ingrese un número de contacto.
        </div>
        @if ($errors->has('contacto'))
            <span class="error text-danger" for="input-contacto">{{ $errors->first('contacto')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">E-mail del contacto</label>
        <input id="email_contacto" name="email_contacto" type="tel" class="form-control" tabindex="2" value="{{old('email_contacto')}}" autofocus required>
        <div class="invalid-feedback">
            Ingrese un e-mail de contacto.
        </div>
        @if ($errors->has('email_contacto'))
            <span class="error text-danger" for="input-email_contacto">{{ $errors->first('email_contacto')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="tel" class="form-control" tabindex="2" value="Ingresado" readonly autofocus required>
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Origen del pedido</label>
        <input id="origen" name="origen" type="tel" class="form-control" tabindex="2" value="{{old('origen')}}" autofocus required>
        <div class="invalid-feedback">
            Ingrese la calle/departamento del remitente
        </div>
        @if ($errors->has('origen'))
            <span class="error text-danger" for="input-origen">{{ $errors->first('origen')}}</span>
        @endif
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Destino del pedido</label>
        <input id="destino" name="destino" type="tel" class="form-control" tabindex="2" value="{{old('destino')}}" autofocus required>
        <div class="invalid-feedback">
            Ingrese la calle/departamento del remitente
        </div>
        @if ($errors->has('destino'))
            <span class="error text-danger" for="input-destino">{{ $errors->first('destino')}}</span>
        @endif
    </div>

    <div class="mb-3">
        <label for="date" class="form-group">Fecha final de recepción</label>
        <br>
        <input id ="fecha_entrega" class ="form-control" type="date" name="fecha_entrega" 
        min="2023-01-01" max="2025-12-31" required>
        
    </div>

    

    @can('admin')
   
    <div class="form-group mb-3">
        <label>Seleccionar Vehiculo</label>
        <select class="form-control" name = "vehiculo_id" id="vehiculo_id" required>
            
            <option selected disabled value>SELECCIONAR</option>            
            @foreach ($vehiculos as $vehiculo)
                <option value="{{$vehiculo->id}}">{{$vehiculo->patente}}</option>
            @endforeach
            
        </select>
    </div>
    @endcan
    @can('admin')

    <div class="form-group mb-3">
        <label>Seleccionar Cliente</label>
        <select class="form-control" name = "cliente_id" id="cliente_id" required>
            <option selected disabled value>SELECCIONAR</option>            
            @foreach ($users as $user)   
                <option value="{{$user->id}}">{{$user->name}} {{$user->apellido}}</option>
            @endforeach
            
        </select>
    </div>
    
    @endcan
    
    
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