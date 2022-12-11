<?php

use Illuminate\Support\Facades\Route;

use App\Mail\PedidoFaadExpress;
use App\Mail\FormularioMail;
use App\Mail\VisitaSinEntrega;
use App\Mail\EntregaConDevolucion;
use Illuminate\Support\Facades\Mail;
use App\Models\Pedido;
use App\Http\Controllers\UserController;

/*Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landingpage');
});
    I WAS HERE 25/11/2022 21:46:50 a. m. 
/*


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//rutas SIN LOGIN
Route::get('/', [App\Http\Controllers\landingPageController::class, 'index'])->name('landingpage'); //landing page
Route::get('/seguimiento', [App\Http\Controllers\seguimientoController::class, 'retornoSeguimiento'])->name('seguimiento');
Route::post('/seguimiento/search', [App\Http\Controllers\seguimientoController::class, 'search']);



//rutas CON LOGIN
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', [App\Http\Controllers\DashController::class, 'index'])->name('dash');
    

    // C R U D //
    Route::resource('vehiculos', 'App\Http\Controllers\VehiculoController');
    Route::resource('pedidos', 'App\Http\Controllers\PedidoController');
    Route::resource('servicios', 'App\Http\Controllers\ServicioController');
    Route::resource('users', 'App\Http\Controllers\UserController');
    Route::resource('precios', 'App\Http\Controllers\PrecioController');
    Route::resource('cotizacions', 'App\Http\Controllers\CotizacionController'); //HACER



    // Route::get('/pedidos', [App\Http\Controllers\pedidosController::class, 'retornoPedido'])->name('pedidos');
    // Route::get('/crearPedido', [App\Http\Controllers\crearPedidoController::class, 'retornoCrearPedido'])->name('crearPedido');
    // Route::get('/clientes', [App\Http\Controllers\clientesController::class, 'retornoClientes'])->name('clientes');
    // Route::get('/conductores', [App\Http\Controllers\conductoresController::class, 'retornoConductores'])->name('conductores');
    // Route::get('/crearConductores', [App\Http\Controllers\crearConductorController::class, 'retornoCrearConductor'])->name('crearConductor');
    // Route::get('/modificarPedido', [App\Http\Controllers\modificarPedidoController::class, 'retornoModificarPedido'])->name('modificarPedido');
});


Route::get('envio', function(){
    $correo = new PedidoFaadExpress;

    // email del cliente
    Mail::to("juanpablog2.0@gmail.com")->send($correo); //a quien se lo queremos enviar

    return "Encuesta enviada";
});

Route::get('envio', function(){
    $correo = new PedidoFaadExpress;

    // email del cliente
    Mail::to("juanpablog2.0@gmail.com")->send($correo); //a quien se lo queremos enviar

    return "Mensaje enviado";
});

Route::get('envio', function(){
    $correo = new PedidoFaadExpress;

    // email del cliente
    Mail::to("juanpablog2.0@gmail.com")->send($correo); //a quien se lo queremos enviar

    return "Aviso enviado";
});
