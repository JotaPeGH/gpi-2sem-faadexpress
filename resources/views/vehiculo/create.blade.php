@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Crear Vehiculo</h2>
    <form action="/vehiculos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1" value="{{old('id')}}" autofocus>
        @if ($errors->has('id'))
            <span class="error text-danger" for="input-id">{{ $errors->first('id')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Patente</label>
        <input id="patente" name="patente" type="tel" class="form-control" tabindex="2" value="{{old('patente')}}" autofocus>
        @if ($errors->has('patente'))
            <span class="error text-danger" for="input-patente">{{ $errors->first('patente')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Marca</label>
        <input id="marca" name="marca" type="tel" class="form-control" tabindex="2" value="{{old('marca')}}" autofocus>
        @if ($errors->has('marca'))
            <span class="error text-danger" for="input-marca">{{ $errors->first('marca')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Modelo</label>
        <input id="modelo" name="modelo" type="tel" class="form-control" tabindex="2" value="{{old('modelo')}}" autofocus>
        @if ($errors->has('modelo'))
            <span class="error text-danger" for="input-modelo">{{ $errors->first('modelo')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Año</label>
        <input id="annio" name="annio" type="tel" class="form-control" tabindex="2" value="{{old('annio')}}" autofocus>
        @if ($errors->has('annio'))
            <span class="error text-danger" for="input-annio">{{ $errors->first('annio')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        {{-- <input id="tipo" name="tipo" type="tel" class="form-control" tabindex="2" value="{{old('tipo')}}" autofocus> --}}
        <br>
        <div class="tipo form-check-inline ">
            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="Auto">
            <label class="form-check-label" for="tipo">Auto</label>
          </div>
          <div class="tipo form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="Moto">
            <label class="form-check-label" for="tipo">Moto</label>
          </div>


        @if ($errors->has('tipo'))
            <span class="error text-danger" for="input-tipo">{{ $errors->first('tipo')}}</span>
        @endif
    </div>
    <a href="/vehiculos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop