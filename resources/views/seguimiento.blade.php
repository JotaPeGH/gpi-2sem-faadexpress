<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seguimiento FaadExpress </title>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- CSS --}}
    <link href="\styles\estilos.css" rel="stylesheet">
    

    <script>
      function validateForm(){
        var x = document.forms["myForm"]["searchText"].value;
        if(x == "" || x.length < 10){
          alert("Debe ingresar un código de seguimiento");
          return false;
        }
      }
   
  
    </script>

    <script>
   

    </script>




</head>



<body>

  
        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#"><span class="text-warning">Faad</span>Express</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                  </li>
                  {{--
                  <li class="nav-item">
                    <a class="nav-link" href="#cotizador">Cotizador</a>
                  </li>
                  --}}
                  <li class="nav-item">
                    <a class="nav-link" href="/seguimiento">Seguimiento</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/login">Ingresar</a>
                    
                  </li>
                  {{--
                  <li class="nav-item">
                    <a class="nav-link" href="/register">Registrarse</a>
                    
                  </li>
                  --}}
                       
                </ul>
              </div>
            </div>
          </nav>
    
        {{-- FIN NAVBAR --}}
    <section id="seguimientio" class="seguimiento section-padding">
    <div class="container p-3 text-center" >
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Seguimiento de envios</h1>
                <p class="text-center">Ingrese el numero de guia para ver el estado de su envio</p>
            </div>
     
        </div>
        <br>
        <br>  

    
        {{-- BUSQUEDA --}}
        

        {{-- <div class="input-group">
          <input type="search" class="form-control rounded text-center" placeholder="Ingresa tu código de seguimiento" aria-label="Search" aria-describedby="search-addon" />
          <button type="button" class="btn btn-warning">Buscar</button>
        </div> --}}

        {{-- <a href="/" class="btn btn-warning">Buscar</a> --}}


        {{-- FIN BUSQUEDA --}}
        
     
        
        <form action="/seguimiento/search" method="POST" name="myForm" onsubmit="return validateForm()">
          @csrf
          
          <label> Ingresa tu código de seguimiento: </label>
          <input type = "text" name="searchText"/>
          <input type = "submit" value="Buscar" onclick="barra()" required />
        </form>

       
        <br>
        <br>
               
        <div class ="container ">
        @isset($pedidos)
          <ul>
              @forelse ($pedidos as $pedido)
              <div class="card">
                <p allign="left"><b>Destinatario: </b>{{$pedido->destinatario}}</p>
                <p allign="left"><b>Estado del pedido: </b>{{$pedido->estado}}</p>
                <p allign="left"><b>Descripción: </b>{{$pedido->descripcion}}</p>
                <p allign="left"><b>Contacto: </b>{{$pedido->contacto}}</p>
                <p allign="left"><b>Recibido:</b> {{$pedido->created_at}}</p>

                                    
                <?php if($pedido->estado == "Ingresado"):?>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div> 
                <?php elseif($pedido->estado == "Recibido"):?>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div> 
                <?php elseif($pedido->estado == "En reparto"):?>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <?php elseif($pedido->estado == "Entregado"):?>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <?php elseif($pedido->estado == "Visita sin entrega"):?>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <?php elseif($pedido->estado == "Entrega con devolucion"):?>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                
                <?php endif ?>

                 
              </div>
              @empty
                  <p>Pedido no encontrado</p>
              @endforelse
          </ul>
        @endisset

        </div>

        


        
       
        {{-- FIN BUSQUEDA --}}
        
        {{-- BARRA PROGESO --}}
       
        {{-- <div class="progress">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 99%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div> --}}
        {{-- FIN BARRA PROGRESO --}}

        {{-- TABLA --}}
        {{-- <p><br>ACA SE MUESTRAN DATOS</p> --}}
        {{-- FIN TABLA --}}

        {{-- BOTON --}}

        <br>
        <br>
       
    <div class="container">
    <div class="input-group justify-content-center m-3">
    
        <div class="row">
            <div class="col-md-12">
                <a href="/" class="btn btn-warning">Volver</a>
            </div>
        </div>
    
   
      <div class="row">
          <div class="col-md-12">
              <a href="/seguimiento" class="btn btn-warning">Limpiar</a>
          </div>
      </div>
  
    </div>
        {{-- FIN BOTON --}}
       
        {{-- FIN BOTON --}}
      
      
    </div>
    
    </div>
          
          
</section>

{{-- FOOTER --}}
<!-- <body>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-white">FaadExpress &copy; 2022</p>
                </div>
            </div>
        </div>
</body> -->

{{-- FOOTER --}}










 



    {{-- SCRIPTS  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    {{-- Javascript --}}

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

    

     
          
    <footer class="bg-dark p-2 text-center">
            <div class="container">
                <p class="text-white">Derechos reservados ©Faad Express</p>
            </div>
    </footer>
        
</body>
</html>

