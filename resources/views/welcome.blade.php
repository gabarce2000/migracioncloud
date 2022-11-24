@extends('layouts.base')


@section('content')


    <body>


        <!-- Page Content -->
        <div class="container">

            <!-- Jumbotron Header -->
              <header class="jumbotron hero-spacer">
                <h1>¡Bienvenido  a tu banco ULEAM!</h1>
                <p>Tenemos todo tipo de prestamos, cuentas, chequeras entre otros....</p>
                <p>
                <section class="flat">
                <button> <a href="http://weblowcostbcn.com/plantillas/librerias/contacto.php"> ¡Pídenos lo que quieras!</a></button>
                </section>
                </p>
              </header>

            <hr>

            <!-- Title -->
   <div class="row">
            <div class="col-lg-12">
                <h3>Últimas novedades</h3>
            </div>
    </div>
    <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/saldo.jpg" alt="">
                    <div class="caption flat">
                        <h3>Mi saldo</h3>
                            @auth
                            <p>$ {{auth()->user()->saldo}}</p>
                            <p># cuenta: {{auth()->user()->numero_cuenta}}</p>
                            <p> {{auth()->user()->tipo_cuenta}}</p>
                            <p> 
                            @endauth
                                <button><a href="/">Actualizar!</a></button>
                            </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/transferencia.jpg" alt="">
                    <div class="caption flat">
                        <h3>Transferir Dinero</h3>
                        <p>pago directo</p>
                        <p>&nbsp</p>
                        <p>&nbsp</p>
                        <p>
                            <button><a href="{{route('mov-transferencia.create')}}">Transferir Ahora!</a></button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/historial.jpg" alt="">
                    <div class="caption flat">
                        <h3>Historial</h3>
                        <p>
                            Revisa tus ultimos movimientos
                        </p>
                        <p>&nbsp</p>
                        <p>&nbsp</p>
                        <p>
                            <button><a href="{{route('mov-transferencia.index')}}">Revisar!</a></button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/usuario.jpg" alt="">
                        <div class="caption flat">
                            <h3>Perfil</h3>
                            <p>Actualiza</p>
                            <p>tus datos</p>
                            <p>&nbsp</p>
                            <p>
                                <button><a href="{{route('actualizarPerfil')}}">Actualizar</a></button>
                            </p>
                        </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/transferencia .jpg" alt="">
                        <div class="caption flat">
                            <h3>Transferencia Interbancaria</h3>
                            <p>Actualiza</p>
                            <p>tus datos</p>
                            <p>&nbsp</p>
                            <p>
                                <button><a href="{{route('actualizarPerfil')}}">Actualizar</a></button>
                            </p>
                        </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/BancoHome.jpg" alt="">
                        <div class="caption flat">
                            <h3>Imprimir Certificado Bancario</h3>
                            <p>Actualiza</p>
                            <p>tus datos</p>
                            <p>&nbsp</p>
                            <p>
                                <button><a href="{{route('actualizarPerfil')}}">Actualizar</a></button>
                            </p>
                        </div>
                </div>
            </div>
        </div>




@endsection