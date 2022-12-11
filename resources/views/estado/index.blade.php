@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Estado index</p>
    <a href="estados/create" class="btn btn-primary">Crear</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Estado</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($estados as $estado)
            <tr>
                <td>{{ $estado->id}}</td>
                <td>{{ $estado->estado}}</td>
                
                
                <td>
                    <form action="{{route ('estados.destroy', $estado->id)}}" method="POST">
                    <a class="btn btn-info" href="/estados/{{ $estado->id}}/edit">Editar</a>
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