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

    .img_planta {
     width: 60%;
 
    }
 
    #logo_camara{
      width: 40% !important;
    }

    #hero .carousel-content {
          margin-bottom: 5%;
      }

      #hero {
        height: 600px !important;
      }
  }

  @media (min-width: 1200px){

    .container, .container-lg, .container-md, .container-sm, .container-xl {
      max-width: 1395px !important;
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
       <a href="/" class="logo mr-auto"><img src="{{ asset('img/logo1.png')}}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#hero">Acerca del programa</a></li>
          <li><a href="#services">Adquirir Bono</a></li>
          <li><a href="#faq">Preguntas frecuetes</a></li>
          <li><a href="#contact">Contacto</a></li>
          <li><a href="#portfolio">Formas de aquirir el bono</a></li>
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


              <h3 style="color:white" class="animate__animated animate__fadeInDown">Un programa liderado por la Cámara de Comercio de Armenia y del Quindío</h3>

             
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


<!-- Modal Bono Aporte Ambiental -->
<div class="modal fade" id="modal_bono_aporte" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

        <h5 class="modal-title" style="color:red">Precio del Bono  90.000</h5>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
    
        </div>
        <div class="modal-body">
      
        <form id="formulario_solicitud_aporte" name="formulario_solicitud" class="form-horizontal" enctype="multipart/form-data">

                <input type="hidden" value="si" name="web">
                <input type="hidden"  name="tipo_bono" id="tipo_bono" value="aporte">

                <div class="form-row">

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                      <label for="nombre_apellido">Nombre(s) y Apellido(s)</label>
                      <input type="text" class="form-control" name="nombre_apellido" id="nombre_apellido" placeholder="" required="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="identificacion">Identificación</label>
                      <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="" required="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="direccion">Dirección</label>
                      <input type="text" class="form-control" name="direccion" id="direccion" placeholder="" required="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" class="form-control" id="departamento" name="departamento" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="" required="">
                      </div>
                  </div>


                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="correo electronico">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="name@example.com" >
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                          <label for="cantidad arboles">Fecha de expedición del certificado</label>
                          <input type="date" class="form-control" name="fecha_expedicion" id="fecha_expedicion" placeholder="" required>
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                      <label for="cantidad arboles">Cantidad Arboles</label>
                      <input type="number" class="form-control" name="cantidad_arboles" id="cantidad_arboles" placeholder="" required>
                      </div>
                  </div>



                  </div>


                  <div class="container" style="border: solid; padding: 3%; margin-bottom: 3%;">

                  <h2 style="text-align:center">FACTURAR</h2>


                  <div class="form-row">

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="identificacion">Nit o Cedula</label>
                    <input  type="text" class="form-control" name="identificacion_facturar" id="identificacion_facturar" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input  type="text" class="form-control" name="nombre_facturar" id="nombre_facturar" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="mail" class="form-control" name="correo_facturar" id="correo_facturar" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input  type="text" class="form-control" name="direccion_facturar" id="direccion_facturar" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input  type="text" class="form-control" name="telefono_facturar" id="telefono_facturar" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input  type="text" class="form-control" name="ciudad_facturar" id="ciudad_facturar" placeholder="">
                    </div>
                  </div>

                  </div>

                  <!--
                  <div class="form-group">
                  <label for="forma de pago">Elija un medio de pago</label>
                  <select required="" class="form-control" id="medio_pago" name="medio_pago">
                  <option value=""></option>
                  <option value="Efectivo">Efectivo</option>
                  </select>
                  </div> -->

                  <div class="form-group">
                  <label for="observaciones">Observaciones</label>
                  <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                  </div>


                  <div class="row" id="seccion_credito" style="display: none;">
                  <div class="col-md-5 form-group ">
                  <div class="form-group">
                  <label for="cuota 1">Valor Cuota 1</label>
                  <input type="number" class="form-control credito" name="valor_1" id="cuota_1" placeholder="">
                  </div>
                  </div>

                  <div class="col-md-5 form-group ">
                  <div class="form-group">
                  <label for="cuota 1">Fecha Cuota 1</label>
                  <input type="date" class="form-control credito" name="fecha_1" id="fecha_1" placeholder="">
                  </div>
                  </div>

                  <div class="col-md-2 form-group ">
                  <label for="forma de pago">Pago</label>
                  <select class="form-control credito" id="pago_1" name="pago_1">
                  <option value="No">No</option>
                  <option value="Si">Si</option>
                  </select>
                  </div> 

                  <div class="col-md-5 form-group ">
                  <div class="form-group">
                  <label for="cuota 2">Valor Cuota 2</label>
                  <input type="number" class="form-control credito" name="valor_2" id="cuota_2" placeholder="">
                  </div>
                  </div>

                  <div class="col-md-5 form-group ">
                  <div class="form-group">
                  <label for="cuota 1">Fecha Cuota 2</label>
                  <input type="date" class="form-control credito" name="fecha_2" id="fecha_2" placeholder="">
                  </div>
                  </div>


                  <div class="col-md-2 form-group ">
                  <label for="forma de pago">Pago</label>
                  <select class="form-control credito" id="pago_2" name="pago_2">
                  <option value="No">No</option>
                  <option value="Si">Si</option>
                  </select>
                  </div> 

                  </div>

                  </div>

              </div>
 

              <div class="col-sm-offset-2 col-sm-10">
            <button  type="submit" class="btn btn-primary" id="saveBtn" value="create">Enviar Información
            </button>
            </div>
            
            <br>

        </form>

        </div>
   
      </div>
      
    </div>
  </div>

<!-- -->


  <!-- Modal -->
  <div class="modal fade" id="modal_bono" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" style="color:red">Precio del Bono  90.000</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
    
        </div>
        <div class="modal-body">
      
        <form id="formulario_solicitud" name="formulario_solicitud" class="form-horizontal" enctype="multipart/form-data">

                <input type="hidden" value="si" name="web">
                <input type="hidden" class="tipo_bono" name="tipo_bono" id="tipo_bono">
 
                
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Solicitante</label>
                    <select class="form-control" id="solicitante" name="solicitante">
                      <option value="">Elija una opcion</option>
                      <option value="pn">Persona Natural</option>
                      <option value="pj">Persona Jurídica</option>
                    </select>
                </div> 

                <div class="container" id='persona_natural' style="border: solid;padding: 3%;margin-bottom: 3%; display:none" >

                

                <h2 style="text-align:center">Datos del Solicitante Persona Natural</h2>

                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <div class="form-group">
                      <label for="nombre_apellido">Nombre(s) y Apellido(s)</label>
                      <input type="text" class="form-control" name="nombre_apellido" id="nombre_apellido" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="identificacion">Identificación</label>
                      <input type="number" class="form-control" name="identificacion" id="identificacion" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="direccion">Dirección</label>
                      <input type="text" class="form-control" name="direccion_pn" id="direccion_pn" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="number" class="form-control" name="telefono_pn" id="telefono_pn" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="correo electronico">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo_pn" name="correo_pn" placeholder="name@example.com">
                      </div>
                  </div>

                  <div class="col-md-6 form-group motivo">
                      <div class="form-group">
                        <label for="motivo">Motivo</label>

                        <select class="form-control " id="motivo_pn" name="motivo_pn">
                          <option value="">Elija una opcion</option>
                          <option value="Nacimiento">Nacimiento</option>
                          <option value="Boda">Boda</option>
                          <option value="Cumpleaños">Cumpleaños</option>
                          <option value="Grado">Grado</option>
                        </select>

                      </div>
                  </div>

             
                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" class="form-control" id="departamento_pn" name="departamento_pn" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio_pn" name="municipio_pn" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group quien">
                      <div class="form-group">
                        <label for="quien">Fallecido</label>
                        <input type="text" class="form-control" id="quien_pn" name="quien_pn" placeholder="">
                      </div>
                  </div>

              </div>
              </div>

              <div class="container" id='persona_juridica' style="border: solid;padding: 3%;margin-bottom: 3%; display:none">

              <h2 style="text-align:center">Datos del Solicitante Persona Jurídica</h2>

                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <div class="form-group">
                      <label for="nombre_apellido">Razón Social</label>
                      <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="">
                    </div>
                  </div>


                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="identificacion">Nit</label>
                      <input type="number" class="form-control" name="nit" id="nit" placeholder="">
                    </div>
                </div>


                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="direccion">Dirección</label>
                      <input type="text" class="form-control" name="direccion_pj" id="direccion_pj" placeholder="">
                    </div>
                </div>

                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="telefono">Teléfono</label>
                      <input type="number" class="form-control" name="telefono_pj" id="telefono_pj" placeholder="">
                    </div>
                </div>

                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="correo electronico">Correo Electrónico</label>
                      <input type="email" class="form-control" id="correo_pj" name="correo_pj" placeholder="name@example.com">
                    </div>
                </div>

                <div class="col-md-6 form-group motivo">
                    <div class="form-group">
                      <label for="motivo">Motivo</label>
                        <select class="form-control " id="motivo_pj" name="motivo_pj">
                          <option value="">Elija una opcion</option>
                          <option value="Nacimiento">Nacimiento</option>
                          <option value="Boda">Boda</option>
                          <option value="Cumpleaños">Cumpleaños</option>
                          <option value="Grado">Grado</option>
                        </select>
                    </div>
                </div>

             
                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" class="form-control" id="departamento_pj" name="departamento_pj" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio_pj" name="municipio_pj" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group quien">
                      <div class="form-group">
                        <label for="quien">Fallecido</label>
                        <input type="text" class="form-control" id="quien_pj" name="quien_pj" placeholder="">
                      </div>
                  </div>
        </div>
        </div>

        <div class="container" id='beneficiario' style="border: solid;padding: 3%;margin-bottom: 3%;display:none">

        <h2 style="text-align:center">Beneficiario(s)</h2>


        <div class="form-row">
            <div class="col-md-6 form-group">
                <div class="form-group">
                <label for="dirigido">Dirigido a : </label>
                <input required type="text" class="form-control" name="dirigido" id="dirigido" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
                <div class="form-group">
                <label for="direccion">Dirección</label>
                <input required type="text" class="form-control" name="direccion_beneficiario" id="direccion_beneficiario" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
              <div class="form-group">
                <label for="direccion">Municipio</label>
                <input required="" type="text" class="form-control" name="municipio_beneficiario" id="municipio_beneficiario" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
              <div class="form-group">
                <label for="direccion">Departamento</label>
                <input required="" type="text" class="form-control" name="departamento_beneficiario" id="departamento_beneficiario" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
                <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input required type="number" class="form-control" name="telefono_beneficiario" id="telefono_beneficiario" placeholder="">
              </div>
            </div>


        </div>

        </div>



        <div class="container" id='pago' style="border: solid;padding: 3%;margin-bottom: 3%;display:none">

          <h2 style="text-align:center">FACTURAR</h2>

          <div class="form-row">

            <div class="col-md-6 form-group">
              <div class="form-group">
              <label for="identificacion">Nit o Cedula</label>
              <input required="" type="text" class="form-control" name="identificacion_facturar" id="identificacion_facturar" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
              <div class="form-group">
              <label for="nombre">Nombre</label>
              <input required="" type="text" class="form-control" name="nombre_facturar" id="nombre_facturar" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
              <div class="form-group">
              <label for="correo">Correo</label>
              <input type="mail" class="form-control" name="correo_facturar" id="correo_facturar" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
              <div class="form-group">
              <label for="direccion">Dirección</label>
              <input required="" type="text" class="form-control" name="direccion_facturar" id="direccion_facturar" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
              <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input required="" type="text" class="form-control" name="telefono_facturar" id="telefono_facturar" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
              <div class="form-group">
              <label for="ciudad">Ciudad</label>
              <input required="" type="text" class="form-control" name="ciudad_facturar" id="ciudad_facturar" placeholder="">
              </div>
            </div>

          </div>

          <!--
          <div class="form-group">
              <label for="forma de pago">Elija un medio de pago</label>
                <select required class="form-control" id="medio_pago" name="medio_pago">
                  <option value=""></option>
                  <option value="bancolombia">Ahorros bancolombia 72471440993</option>
                  <option value="davivienda"> Corriente davivienda 136269997062</option>
                </select>
          </div> -->


        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="politicas" id="politicas" style="display:none">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="aceptado" name="politicas" id="politicas" required="">
            <label class="form-check-label" for="defaultCheck1" style="text-align: justify;">
                En mi calidad de titular de los datos suministrados en el presente formulario, AUTORIZO a la Cámara de Comercio de Armenia y del Quindío para que éstos sean incorporados en una base de datos y sean tratados con las finalidades descritas en el Manual de Políticas de Protección de Datos de la entidad, el cual puede ser consultado a través de www.camaraarmenia.org.co. De igual modo, declaro que conozco tener derecho al acceso, corrección, supresión, revocación o reclamo por infracción sobre mis datos, derechos que puedo ejercer remitiendo un mensaje a juridico@camaraarmenia.org.co.<br><br>
                Se debe crear un recuadro donde el usuario marque con un chulo que autoriza y de no marcar la opción no deje continuar con el diligenciamiento del formulario de inscripción.
            </label>
            </div>
        </div>


        <div class="col-sm-offset-2 col-sm-10">
            <button style="display:none" type="submit" class="btn btn-primary" id="enviar_info" value="create">Enviar Solicitud
            </button>
        </div>

        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



  <!-- ======= Services Section ======= -->
  <section id="services" class="services" style="background: #010401e6;">


  <img class="img_planta" src="{{asset('img/plantavida.png')}}">
      <div class="container" style="color:white">

        <div class="row">
          <div class="col-lg-4 col-md-4 icon-box">
            <div class="icon"><i class="icofont-birthday-cake"></i></div>
            <h4 class="title">BONO CELEBRACIÓN PLANTA VIDA (nacimientos, cumpleaños, grados y bodas). </h4>

            <p style="text-align: initial;">Este bono representa la siembra y mantenimiento de un árbol 
            nativo en zonas de importancia ecológica del departamento del Quindío; ideal para celebrar 
            momentos como: cumpleaños, matrimonios, grados, nacimientos, aniversarios u otro acontecimiento.  </p>

            <p style="text-align: initial;">Incluye:</p>
   
            <ul style="text-align: initial;">
              <li>Siembra de un árbol nativo</li>
              <li>Mantenimiento por 18 meses</li>
              <li>Reporte de seguimiento del árbol por medio de la página web www.plantavida.camaraarmenia.org.co.  </li>
              <li>Placa con numeración del árbol </li>
              <li>Envío de bono físico a la persona a quien está dirigido (territorio nacional)</li>
            </ul>

            <a style="font-size: 22px;border: solid;padding: 1%;"  id ="celebracion" class="btn-get-started animate__animated animate__fadeInUp scrollto bono">Adquiere este bono aquí</a>


          </div>
 
            <div class="col-lg-4 col-md-4 icon-box">
              <div class="icon"><i class="icofont-flora-flower"></i></div>
              <h4 class="title">BONO EXEQUIAL PLANTA VIDA </h4>

              <p  style="text-align: initial;margin-top: 35px;">
              Este bono es destinado a homenajear a una persona fallecida y recordar su existencia con la siembra de un árbol.</p>

              <p style="text-align: initial;">Incluye:</p>
                <ul style="text-align: initial;">
                  <li>Siembra de un árbol nativo</li>
                  <li>Mantenimiento por 18 meses</li>
                  <li>Reporte de seguimiento del árbol por medio de la página web www.plantavida.camaraarmenia.org.co.</li>
                  <li>Placa con numeración del árbol</li>
                  <li>Envío de bono físico a la persona a quien está dirigido (territorio nacional)</li>
                </ul>
              <a style="font-size: 22px;border: solid;padding: 1%;" href="#about" id="condolencias" class="btn-get-started animate__animated animate__fadeInUp scrollto bono">Adquiere este bono aquí</a>
            </div>
  



          <div class="col-lg-4 col-md-4 icon-box">
              <div class="icon"><i class="icofont-hand-up"></i></div>
              <h4 class="title">BONO APORTE AMBIENTAL</h4>

              <p  style="text-align: initial;margin-top: 35px;">
              Con este bono apoya la conservación y recuperación de los bosques de las zonas urbanas y rurales del departamento del Quindío.</p>

              <p style="text-align: initial;">Incluye:</p>
                <ul style="text-align: initial;">
                  <li>Siembra de un árbol nativo</li>
                  <li>Mantenimiento por 18 meses</li>
                  <li>Reporte de seguimiento del árbol por medio de la página web www.plantavida.camaraarmenia.org.co.</li>
                  <li>Placa con numeración del árbol</li>
                  <li>Envío de bono físico a la persona a quien está dirigido (territorio nacional)</li>
                </ul>
              <a style="font-size: 22px;border: solid;padding: 1%;" href="#about" id="aporte" class="btn-get-started animate__animated animate__fadeInUp scrollto bono">Adquiere este bono aquí</a>
            </div>
          </div>


      </div>
    </section><!-- End Services Section -->

    <div id="alerta">
    </div>

    <section id="pricing" class="pricing" style="background: #e4f4fb;">
      <div class="container">

        <div class="section-title">
          <h2>Consulta el Historial de tu Árbol</h2>
        </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Buscar Historial</label>
            <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="Busca con el codigo del Bono">
          </div>
  
          <button type="submit" onclick="enviar()" class="btn btn-primary">Buscar</button>


      </div>
    </section>



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" >
      <div class="container">

        <div class="section-title">
          <h2>contacto</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="icofont-google-map"></i>
              <h3>Dirección</h3>
              <address>Carrera 14 N° 23-15. Cámara de Comercio de Armenia  </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="icofont-phone"></i>
              <h3>Teléfono</h3>
              <p><a href="tel:+155895548855">3174007129 - 3174007132</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="icofont-envelope"></i>
              <h3>Correo Electrónico</h3>
              <p><a href="mailto:info@example.com">plantavida@camaraarmenia.org.co</a></p>
            </div>
          </div>

        </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Formas de adquirir tu bono</h2>
        </div>

  
        <div class="row portfolio-container" style="position: relative; height: 1025.96px;">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
            <div class=""> <!-- portfolio-wrap-->
              <img src="{{asset('img/transferencia.jpg')}}" class="img-fluid" alt="">

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 439.987px; top: 0px;">
            <div class="">
              <img src="{{asset('img/portfolio-2.jpg')}}" class="img-fluid" alt="">
           
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 879.974px; top: 0px;">
            <div class="">
              <img src="{{asset('img/portfolio.jpg')}}" class="img-fluid" alt="">
          
            </div>
          </div>

   
        </div>

      </div>
    </section>




  <main id="main">

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Preguntas frecuentes</h2>
       
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">¿Cómo se dónde está ubicado mi árbol? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                En la parte interna del bono, donde dice ubicación, se encuentran las coordenadas y nombre del predio y municipio donde se encuentra el árbol.               </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">¿Con cuántas personas puedo ir a visitar el árbol? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  No hay límite de personas. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">¿Qué tengo que llevar para entrar al sitio donde se encuentra ubicado el árbol? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                Su bono en físico. En caso de no tenerlo escriba a plantavida@camaraarmenia.org.co para coordinar su entrada. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">¿Tiene algún costo la entrada a los sitios? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                No tiene costo, pero debe presentar su bono. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">¿Puedo ir a sembrar el árbol?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                No, al adquirir su bono la Cámara de Comercio de Armenia y el Quindío se encarga de la siembra.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">¿Puedo llevar las cenizas de mi ser querido?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                <p>
                No, esto no está permitido en zonas destinadas para las siembras.
                </p>
              </div>
            </li>

            

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


  </main><!-- End #main -->

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


    $(document).on('change', '#solicitante', function(event) {


        if($("#solicitante option:selected").val() == 'pn'){
            $('#persona_natural').show();
            $('#beneficiario').show();
            $('#pago').show();
            $('#politicas').show();
            $('#persona_juridica').hide();
            $('#enviar_info').show();
            $("#nombre_apellido").prop('required', true);
            $("#identificacion").prop('required', true);
            $("#direccion_pn").prop('required', true);
            $("#telefono_pn").prop('required', true);
            $("#correo_pn").prop('required', true);
            $("#razon_social").prop('required', false);
            $("#nit").prop('required', false);
            $("#direccion_pj").prop('required', false);
            $("#telefono_pj").prop('required', false);
            $("#correo_pj").prop('required', false);
        
            

        }

        if($("#solicitante option:selected").val() == 'pj'){

            $('#persona_juridica').show();
            $('#beneficiario').show();
            $('#politicas').show();
            $('#pago').show();
            $('#persona_natural').hide();
            $('#enviar_info').show();
            $("#nombre_apellido").prop('required', false);
            $("#identificacion").prop('required', false);
            $("#direccion_pn").prop('required', false);
            $("#telefono_pn").prop('required', false);
            $("#correo_pn").prop('required', false);
            $("#razon_social").prop('required', true);
            $("#nit").prop('required', true);
            $("#direccion_pj").prop('required', true);
            $("#telefono_pj").prop('required', true);
            $("#correo_pj").prop('required', true);
            $("#motivo_pj").prop('required', true);
            
        }

        if($("#solicitante option:selected").val() == ''){

            $('#persona_juridica').hide();
            $('#beneficiario').hide();
            $('#persona_natural').hide();
            $('#politicas').hide();
            $('#pago').hide();
        }



    });



        function enviar(){
          var busqueda =$('#busqueda').val();
          var url = "./buscar_seguimiento"+'/'+busqueda;

          $('#alerta').html('');
          $.get( url, function( data ) {

            if(data == 0){
              $('#alerta').append(`<div class="alert alert-danger" role="alert">
              No hemos encontrado resultados para tu busqueda</div>`)
            }else{

              $(location).prop('href', url)
            }
              
          });   
   
        }


        $("#formulario_solicitud").submit(function(e) {
          e.preventDefault();

          var formData = new FormData(document.getElementById("formulario_solicitud"));
            
            $.ajax({
                url: "{{route('solicitud.store')}}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                destroy: true,
                success: function (data) {
                  
                    $('#modal_bono').modal('hide');  
                    $('#formulario_solicitud').trigger("reset");
                    alert('Ya estas próximo a obtener tu bono. En el correo recibirás información para continuar el proceso. ');

                },
                error: function (data) {
                alert('Existen campos vacios que no permite en envio del formulario');
                }
            });

        });


        $("#formulario_solicitud_aporte").submit(function(e) {
          e.preventDefault();

          var formData = new FormData(document.getElementById("formulario_solicitud_aporte"));
            
            $.ajax({
                url: "{{route('solicitud.store')}}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                destroy: true,
                success: function (data) {
                  
                  $('#modal_bono_aporte').modal('hide');   
                  $('#formulario_solicitud_aporte').trigger("reset");
  
                  alert('Ya estas próximo a obtener tu bono. En el correo recibirás información para continuar el proceso.');

                },
                error: function (data) {
                alert('Existen campos vacios que no permite en envio del formulario');
                }
            });

        });


        $(document).ready(function(){
          $('body').on('click', '.bono', function(){
           var id = $(this).attr('id');
        
            $('#solicitante').val('');
            $('#enviar_info').hide();


           console.log(solicitante);
           $('#formulario_solicitud').trigger("reset");
           $('#persona_juridica').hide();
            $('#beneficiario').hide();
            $('#persona_natural').hide();
            $('#politicas').hide();
            $('#pago').hide();




              if(id == 'aporte'){

                $('#modal_bono_aporte').modal('show');   

              }else{

                $(document).on('change', '#solicitante', function(event) {

                var solicitante = $("#solicitante option:selected").val()


                if(id == 'celebracion' && solicitante == 'pn'){
                
                  $("#motivo_pn").prop('required', true);
                  $("#motivo_pj").prop('required', false);

                }

                if(id == 'celebracion' && solicitante == 'pj'){    

                  $("#motivo_pj").prop('required', true);
                  $("#motivo_pn").prop('required', false);
                }


                if(id == 'celebracion'){
                  $('.motivo').show();
                  $('.tipo_bono').val('celebracion');
                  $('.quien').hide();
                }


                if(id == 'condolencias'){

                  $('.tipo_bono').val('Condolencias');
                  $('.motivo').hide();
                  $('.quien').show();

                  $("#motivo_pj").prop('required', false);
                  $("#motivo_pn").prop('required', false);
                }

                });

                $('#modal_bono').modal('show');   

              }

          })
        })



</script>


</body>

</html>