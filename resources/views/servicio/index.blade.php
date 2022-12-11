@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Servicios de Faad Express</p>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                @can('admin')
                <th scope="col">ID</th>
                @endcan
                <th scope="col">Tipo servicio</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
            <tr>
                @can('admin')
                <td>{{ $servicio->id}}</td>
                @endcan
                <td>{{ $servicio->tipo_serv}}</td>
                <td>{{ $servicio->descripcion}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop