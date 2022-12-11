@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @can('admin')
    <a href="pedidos/create" class="btn btn-primary">Crear</a>
    @endcan
    <table id="pedidos" class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cod. Seguimiento</th>
                <th scope="col">Destinatario</th>
                <th scope="col">Contacto</th>
                <th scope="col">Peso (kg)</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha Entrega</th>
                <th scope="col">V. Asignado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id}}</td>
                <td>{{ $pedido->codigo_seguimiento}}</td>
                <td>{{ $pedido->destinatario}}</td>
                <td>{{ $pedido->contacto}}</td>
                <td>{{ $pedido->peso}}</td>
                <td>{{ $pedido->estado}}</td>
                <td>{{ $pedido->fecha_entrega}}</td>
                <td>{{$pedido->vehiculo->patente}}</td>
                <td>
                    <form action="{{route ('pedidos.destroy', $pedido->id)}}" method="POST">
                    <a class="btn btn-info" href="/pedidos/{{ $pedido->id}}/edit">Editar</a>
                    @csrf
                    @can('admin')
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.6.1/css/colReorder.bootstrap5.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.4.0/css/searchBuilder.bootstrap5.min.css"/>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.6.1/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/searchbuilder/1.4.0/js/dataTables.searchBuilder.min.js"></script>
    <script src="https://cdn.datatables.net/searchbuilder/1.4.0/js/searchBuilder.bootstrap5.min.js"></script>


    <script>
    $(document).ready(function() {
        $('#pedidos').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es-cl.json"
            },
            "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]],
            responsive: "true",
            dom: 'Bfrtilp',
            buttons:[
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> ',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: [':visible']
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> ',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    exportOptions: {
                        columns: [':visible']
                    }
                },
                { 
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> ',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info',
                    exportOptions: {
                        columns: [':visible']
                    }
                },
                {
                    extend: 'colvis',
                    columns: ':not(.noVis)',
                    className: 'btn btn-info'
                },
            ]
        });
    } );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
            '¡Eliminado!',
            'El cliente ha sido eliminado',
            'success'
            )
        </script>
    @endif

    <script>
        $('.alertButton').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '',
            text: "¿Esta seguro que deseea eliminar al cliente?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@stop