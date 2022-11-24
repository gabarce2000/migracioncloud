<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BANCO ULEAM</title>

   <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/heroic-features.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/base.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    </head>

<body>
    <div id="app">



        <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url('/') }}">Sobre Nosotros</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/') }}">Contacto</a>
                        </li>

                        @if (Route::has('login'))
                        <li>
                                @auth
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                        </li>    
                                @else
                        <li> 
                                <a href="{{ route('login') }}">Login</a>
                        </li>  
                                    @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register')}}">Register</a> 
                                    </li>
                                    @endif
                                @endauth
                            @endif
                        </li>
                        


                        <li style="margin-left: 200px;"> 
                            <a >
                            @if(@auth()->check())
                                Hola, {{auth()->user()->name}}
                            @endif
                            </a>
                        </li> 
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        
        <hr>
        <hr>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

        </div>
            <hr>
            <!-- Footer -->
            <footer>
                <!-- <div class="row"> -->
                    <!-- <div class="col-lg-12"> -->
                        <p>&nbsp Derechos reservados</p>
                    <!-- </div> -->
                <!-- </div> -->
            </footer>
        </div>

        <script src="{{asset('js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
