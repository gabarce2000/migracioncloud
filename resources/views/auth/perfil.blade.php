@extends('layouts.base')
<br>
<br>
<br>
<siv class="container">


    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                
                <form class="form-horizontal" method="POST" action="{{ route('guardarPerfil') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend class="text-center header">¡Actualizar Datos!</legend>

                        @foreach($usuarios as $usuario)
                            
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user fa-2x"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="name" type="text" placeholder="Nombre" value="{{$usuario->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user fa-2x"></i></span>
                                <div class="col-md-8">
                                    <input id="cedula" name="cedula" type="text" placeholder="Cedula" value="{{$usuario->cedula}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o fa-2x"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="E-mail" value="{{$usuario->email}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square fa-2x"></i></span>
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="Teléfono" value="{{$usuario->telefono}}" class="form-control">
                                </div>
                            </div>
                        @endforeach
                <!--         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o fa-2x"></i></span>
                            <div class="col-md-8">
                                <input id="contrasenia" name="contrasenia" type="text" placeholder="Nueva Contraseña" class="form-control">
                            </div>
                        </div>
                 -->
       <!--                  <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o fa-2x"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje aquí. " rows="7"></textarea>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-default btn-lg">Guardar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>