@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Tarifario Index</p>
    <a href="precios/create" class="btn btn-primary">Crear</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Origen</th>
                <th scope="col">Destino</th>
                <th scope="col">Precio</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($precios as $precio)
            <tr>
                <td>{{ $precio->id}}</td>
                <td>{{ $precio->origen}}</td>
                <td>{{ $precio->destino}}</td>
                <td>{{ $precio->precio}}</td>
                
                
                <td>
                    <form action="{{route ('precios.destroy', $precio->id)}}" method="POST">
                    <a class="btn btn-info" href="/precios/{{ $precio->id}}/edit">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
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