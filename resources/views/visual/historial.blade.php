<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Planta vida</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <style>


ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}


  .img_planta {
    width: 30%;
      display: block;
      margin: auto;
  }

  #hero {
      height: 70vh;
  }

  #hero .carousel-content {
    margin-bottom: 15%;
  }

  #hero .carousel-control-next-icon, #hero .carousel-control-prev-icon {
    margin-bottom: 315%;
  }

  @media only screen and (max-width: 600px) {
 
    #logo_camara{
      width: 40% !important;
    }

    #hero .carousel-content {
          margin-bottom: 44%;
      }

      #hero {
        height: 600px !important;
      }
  }

  </style>

  <!-- =======================================================
  * Template Name: Groovin - v2.2.1
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="contenido">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background: #000000;">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo mr-auto"><img src="{{ asset('img/logo1.png')}}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#about">Inicio</a></li>
  
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url({{ asset('img/slide-3.jpg')}});">
            <div class="carousel-container">
              <div class="carousel-content">
   



   <h3 style="color:white" class="animate__animated animate__fadeInDown "><img id="logo_camara" style="width: 15%;" src="{{ asset('img/camara.png')}}" alt=""> </h3>


              <h3 style="color:white" class="animate__animated animate__fadeInDown">Un programa liderado por la Cámara de Comercio de Armenia </h3>

             
                <p class="animate__animated animate__fadeInUp">Más allá de plantar un árbol, este bono es símbolo de vida, un aporte al bienestar del planeta y al recuerdo de momentos memorables, que se prolongan desde la semilla hasta el crecimiento de un nuevo ser..</p>
                <div>
                  <!--
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->



  <div class="container mt-5 mb-5">
    <ul class="list-group">
      <div class="row">
          <div class="col-md-6 ">
            <li class="list-group-item active">Datos del Usuarios</li>
            <li class="list-group-item">Nombre: {{$solicitud->nombre_apellido}}</li>
            <li class="list-group-item">Correo: {{$solicitud->correo_electronico}}</li>
            <li class="list-group-item">Motivo: {{$solicitud->motivo}}</li>
            <li class="list-group-item">Beneficiario: {{$solicitud->dirigido}}</li>
          </div>

          @if(isset($solicitud->arbol))
          <div class="col-md-6 ">
            <li class="list-group-item active">Datos del  Árbol </li>
            <li class="list-group-item">{{$solicitud->arbol->titulo}}</li>
            <li class="list-group-item">Ecología: {!!$solicitud->arbol->ecologia!!}</li>
            <li class="list-group-item">Importancia: {!!$solicitud->arbol->importancia!!}</li>
          </div>
          @else
          <div class="col-md-6 ">
            <li class="list-group-item active">Datos del  Árbol </li>
            <li class="list-group-item">Titulo: </li>
            <li class="list-group-item">Descripción:</li>
          </div>
          @endif

      </div>
    </ul>



  <div class="container mt-5 mb-5">
	  <div class="row">
        <div class="col-md-6 offset-md-3">
          <ul class="timeline">
            @foreach($seguimientos as $seguimiento)
                <li>
                  <a href="#" class="float-right">Seguimiento: {{$seguimiento->fecha}}</a>
                  <img style="width: 80%;" class="box" src="{{ asset('storage/seguimiento/miniatura/'.$seguimiento->imagen) }}" alt="{{$seguimiento->id}}" title="">
                </li>
            @endforeach
          </ul>
        </div>
	    </div>
	  </div>

	</div>

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Planta Vida</span></strong>. All Rights Reserved
      </div>
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/counterup.min.js')}}"></script>
  <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('js/venobox.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

<script>

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>


</body>

</html>