@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Crear Tarifa</h2>
    <form action="/precios" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1" value="{{old('id')}}" autofocus>
        @if ($errors->has('id'))
            <span class="error text-danger" for="input-id">{{ $errors->first('id')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Origen</label>
        <input id="origen" name="origen" type="tel" class="form-control" tabindex="2" value="{{old('origen')}}" autofocus>
        @if ($errors->has('origen'))
            <span class="error text-danger" for="input-origen">{{ $errors->first('origen')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Destino</label>
        <input id="destino" name="destino" type="tel" class="form-control" tabindex="2" value="{{old('destino')}}" autofocus>
        @if ($errors->has('destino'))
            <span class="error text-danger" for="input-destino">{{ $errors->first('destino')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="tel" class="form-control" tabindex="2" value="{{old('precio')}}" autofocus>
        @if ($errors->has('precio'))
            <span class="error text-danger" for="input-precio">{{ $errors->first('precio')}}</span>
        @endif
    </div>
    
    </div>
    <a href="/precios" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop