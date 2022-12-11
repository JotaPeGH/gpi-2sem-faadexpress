<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faad Express</title>
    
    <!-- CSS-->
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="\styles\styles.css" rel="stylesheet">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">Faad</span>Express</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Inicio</a>
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
              {{--
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Registrarse</a>
              </li>
              --}}
            </ul>
          </div>
        </div>
      </nav>
         
         {{-- CARRUSEL --}}
         
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/rapidez.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption d-none d-md-block">
              <h5>Rapidez</h5>
                              <p>Al escoger el servicio personalizado de Faad Express, optas por un servicio que se asegura que el envio trate de llegar lo antes posible.</p>
                             
                              
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/seguridad.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption d-none d-md-block">
              <h5>Seguridad</h5>
                              <p>Tus productos estan asegurados con Faad Express</p>
                              
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/confianza.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption d-none d-md-block ">
              <h5>Confianza</h5>
                              <p>Faad Express ofrece servicios de correspondencia, de encomienda o paqueteria, segun sea tu pedido. Ademas ofrece el envio express para envios mas rapidos.</p>
                              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- CARRUSEl --}}
      {{--
      <!-- COTIZADOR -->
      <section id="cotizador" class="cotizador section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="cotizador-img">
                          <img src="img/cotizador.png" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="cotizador-text">
                            <h2 style="text-align:center">Cotizador</h2>
                            
                            <h5>Consulta el valor de tu envio</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
                            <br>
                            
                            <a href="#" class="btn btn-warning col-md-12 text-center">Cotiza aqui</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      --}}
      <!-- COTIZADOR -->
      <!-- Seguimiento -->
      <section id="seguimiento" class="seguimiento section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="seguimiento.png-img">
                        <img src="img/seguimiento.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="seguimiento-text">
                          <h2 style="text-align:center">Seguimiento</h2>
                          
                          <h5>Consulta el estado de tu envio</h3>
                          <p>Con solo el codigo de tu producto, puedes consultar por el estado de tu pedido. Para mayor informacion, debes comunicarte con la operadora.</p>
                          <br>
                          
                          <a href="/seguimiento" class="btn btn-warning col-md-12 text-center">Consulta aqui</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seguimiento -->
      <!-- Servicios -->
      <section class="servicios section-padding" id="servicios">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Nuestros servicios</h2>
                          
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-box-seam"></i>
                            <h3 class="card-title">Normal</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-truck"></i>
                              <h3 class="card-title">Pesado</h3>
                              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                              
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-bicycle"></i>
                              <h3 class="card-title">Express</h3>
                              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Servicios -->



      <!-- Footer -->



     
     
      
          
        
        <footer class="bg-dark p-2 text-center">
            <div class="container">
                <p class="text-white">Derechos reservados ©Faad Express</p>
            </div>
        </footer>
 


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js">



      <!-- Footer -->



    
    
    <!-- Javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

