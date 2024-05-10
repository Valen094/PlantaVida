<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'planta_vida') }}</title>


    <style>
    thead input {
            width: 100%;
        }

        th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        margin: 0 auto;
    }
 
    div.container {
        width: 80%;
    }
    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div id="app">
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg bg-light text-uppercase " id="mainNav">
            <div class="container">

                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">

                    @if (Auth::guest())
                   
                   @else


                   <li class="nav-item mx-0 mx-lg-1"><a  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('usuarios.index')}}">Usuarios</a></li>

                   <li class="nav-item mx-0 mx-lg-1"><a  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('home')}}">Bonos felicitaciones y condolencias</a></li>

                   <li class="nav-item mx-0 mx-lg-1"><a  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('aporte.index')}}">Bono Aporte Ambiental</a></li>

                   <li class="nav-item mx-0 mx-lg-1"><a  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('reporte_general')}}">Reporte General</a></li>

                   <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">{{ Auth::user()->name }}</a></li>


                        <li class="nav-item mx-0 mx-lg-1" >
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Salir
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                      
                   @endif


                    </ul>
                </div>
            </div>
        </nav>

        <br><br>
      

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script src="https://cdn.datatables.net/fixedcolumns/4.0.1/js/dataTables.fixedColumns.min.js"></script>

    

    @yield('js')



</body>
</html>
