@extends('layouts.app_admin')

@section('title', 'DASILA')

@section('header')

<nav class="navbar navbar-default header navbar-fixed-top">
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <div class="opener-left-menu is-open">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>
      <a href="index.html" class="navbar-brand"> 
        <b>DASILA</b>
      </a>

      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="user-name"><span>Nombre de usuario</span></li>
        <li ><a href="#" class="opener-right-menu"><span class="icons icon-envelope"></span><span style="color:#e53935;"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

@endsection

@section('content')

<div class="container-fluid mimin-wrapper">
  <!-- start:Left Menu -->
  <div id="left-menu">
    <div class="sub-left-menu scroll">
      <ul class="nav nav-list">
        <li><div class="left-bg"></div></li>
        {{-- Perfil --}}
        <li class="time" align="center">
          <img src="{{asset('asset/img/avatar3.png')}}" alt="" class="img-circle avatar"
          style="width: 70%; height:70%; margin:5%;">
        </li>
        <li>
          <h3 class="animated fadeInLeft" align="center">Nombre del usuario</h3>
        </li>
        <li class="time" align="right">
          <h1 class="animated fadeInLeft" style="margin-right:2%; font-size:25px;">21:00</h1>
          <p class="animated fadeInRight" style="margin-right:1%;">Sat,October 1st 2029</p>
        </li>
        {{-- Cierre de perfil --}}
        {{-- Opciones --}}
        <li class="active"><a href="#"><span class="fa-home fa"></span>Inicio</a></li>

        <li class="ripple">
          <a class="tree-toggle nav-header" href="#"><span class="fa-home fa"></span> Usuarios 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="http://127.0.0.1:8000/usuarios">Agregar usuario</a></li>
            <li><a href="http://127.0.0.1:8000/mostrar_usuarios">Ver usuarios</a></li>
          </ul>
        </li>

        <li class="ripple">
          <a class="tree-toggle nav-header" href="#"><span class="fa-home fa"></span> Productos 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="#">Agregar producto</a></li>
            <li><a href="#">Ver productos</a></li>
          </ul>
        </li>

        <li class=""><a href="#"><span class="fa-home fa"></span>Pedidos</a></li>

        <li class=""><a href="#"><span class="fa-home fa"></span>Ventas</a></li>

        <li class=""><a href="#"><span class="fa-home fa"></span>Configuración</a></li>

      </ul>
    </div>
  </div>
  <!-- end: Left Menu -->



  <!-- start: content -->
  <div id="content">

    <div class="col-md-12" style="padding:20px;">
      <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
          
          {{-- Aquí --}}
          <div class="col-md-12" >
            <div class="panel box-v4">
              <div class="panel-heading bg-white border-none">
                <h3 align="center"><span class="icons icon-user-follow"></span> Registro de nuevo usuario </h3>
                <button type="button" class="btn btn-primary btn-lg" ng-click="guardar()">Guardar</button>
              </div>
              <div class="panel-body padding-0">
                <div class="col-md-6 col-xs-6 col-md-6 col-lg-6box-v4-alert">
                  <h3>Datos personales</h3>
                  <form action="">

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="nombre" ng-model="datos.nombre" required>
                      <span class="bar"></span>
                      <label>Nombre(s)</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="paterno" ng-model="datos.paterno" required>
                      <span class="bar"></span>
                      <label>Apellido paterno</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="materno" ng-model="datos.materno" required>
                      <span class="bar"></span>
                      <label>Apellido materno</label>
                    </div>

                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text Animated" name="fechaNacimiento" required>
                      <span class="bar"></span>
                      <label><span class="fa fa-calendar"></span> Fecha de nacimiento
                    </div>

                  </form>

                </div>

                <div class="col-md-6 col-xs-6 col-md-6 col-lg-6box-v4-alert">
                  <h3>Datos de usuario</h3>
                    <form action="">
  
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" name="usuario" ng-model="datos.usuario" required>
                        <span class="bar"></span>
                        <label>Nombre de usuario</label>
                      </div>
  
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" name="contraseña" required>
                        <span class="bar"></span>
                        <label>Contraseña</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" name="confirmarContrasea" ng-model="datos.password" required>
                        <span class="bar"></span>
                        <label>Confirmar contraseña</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" name="#" ng-model="datos.imagen" required>
                        <span class="bar"></span>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select class="select2-A" name="tipo" ng-model="datos.tipo">
                          <optgroup label="Usuarios disponibles">
                            <option value="Gerente">Gerente</option>
                            <option value="Trabajador">Trabajador</option>
                            <option value="Cliente">Cliente</option>
                          </optgroup>
                      </div>
                    </form>
  
                  </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <!-- end: content -->
  </div>
</div>
@endsection




@section('scripts')


<script type="text/javascript">

</script>


@endsection

@section('scriptAngular')
    $scope.datos={};

    $scope.datos2 = [<?php echo $usuarios;?>];
    $scope.datos.nombre = $scope.datos2[0].nombre;
    $scope.datos.paterno = $scope.datos2[0].paterno;
    $scope.datos.materno = $scope.datos2[0].materno;
    $scope.datos.usuario = $scope.datos2[0].usuario;
    $scope.datos.password = $scope.datos2[0].password;
    $scope.datos.tipo = $scope.datos2[0].tipo;
    $scope.datos.imagen = $scope.datos2[0].imagen;

    $scope.guardar=function()
    {
      console.log($scope.datos.tipo);
      $http.put('/modificar/'+ $scope.datos2[0].id, $scope.datos).then(
            function(response)
            {
              alert('Se a modificado con exito');
              $scope.datos={};
              location.reload();
            },
            function(errorResponse)
            {
              alert('Complete todos los campos');
            }

          );
    }

@endsection