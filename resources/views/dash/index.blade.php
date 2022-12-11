@extends('adminlte::page')

@section('title', 'FaadExpress')

@section('content_header')
    <h1>FaadExpress</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{App\Models\User::count()}}</h3>

                        <p>Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="iconify" data-icon="clarity:accessibility-2-solid"></i>
                    </div>
                    <a href="/users" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{App\Models\Vehiculo::count()}}</h3>

                        <p>Flota Vehiculos</p>
                    </div>
                    <div class="icon">
                        <i class="iconify" data-icon="clarity:auto-solid"></i>
                    </div>
                    <a href="/vehiculos" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{App\Models\Pedido::count()}}</h3>

                        <p>Pedidos</p>
                    </div>
                    <div class="icon">
                        <i class="iconify" data-icon="clarity:shopping-bag-solid"></i>
                    </div>
                    <a href="/pedidos" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{--
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{App\Models\Cotizacion::count()}}</h3>

                        <p>Cotizaciones</p>
                    </div>
                    <div class="icon">
                        <i class="iconify" data-icon="clarity:calculator-solid"></i>
                    </div>
                    <a href="/cotizaciones" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
        </div>
        --}}
    </div>
</div>


    
@stop

@section('css')
    
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" type="image/png" sizes="57x57" href="{{ asset('favicons/Logo_E.png') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    
@stop