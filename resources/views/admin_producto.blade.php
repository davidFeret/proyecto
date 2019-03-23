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
          <a class="tree-toggle nav-header" href="#"><span class="icon-user"></span> Usuarios 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="#">Agregar usuario</a></li>
            <li><a href="#">Ver usuarios</a></li>
          </ul>
        </li>

        <li class="ripple">
          <a class="tree-toggle nav-header" href="#"><span class="icon-drawar"></span> Productos 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="/admin/producto/agregar">Agregar producto</a></li>
            <li><a href="/admin/producto/registros">Ver productos</a></li>
          </ul>
        </li>

        <li class=""><a href="#"><span class="icon-basket-loaded"></span>Pedidos</a></li>

        <li class=""><a href="#"><span class="fa-home fa"></span>Ventas</a></li>

        <li class=""><a href="#"><span class="icon-settings"></span>Configuración</a></li>

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
          <div class="col-md-12">
            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                    <div class="col-md-12">
                        <p class="animated fadeInDown">
                            Productos <span class="fa-angle-right fa"></span> Agregar producto
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel box-v4">
              <div class="panel-heading bg-white border-none">
                <h3 align="center"><span class="icons icon-plus"></span> Agregar un nuevo producto </h3>
              </div>
              <div class="panel-body padding-0">
                <div class="col-md-12 col-xs-12 col-md-12 col-lg-12 box-v4-alert">
                  <h3>Datos del producto</h3>

                  <form action="/admin/producto/guardar" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="nombre">
                      <span class="bar"></span>
                      <label>Nombre del producto</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="number" class="form-text" name="precio">
                      <span class="bar"></span>
                      <label>Precio del producto</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <textarea type="text" class="form-text" name="description" rows="4"></textarea>
                      <span class="bar"></span>
                      <label>Descripción del producto</label>
                    </div>

                    <div class="form-group form-animate-text">
                        <h4>Imagen principal del producto</h4>
                        <input type="file" class="form-text Animated" name="imagen">
                        <span class="bar"></span>
                    </div>

                    <div class="form-group form-animate-text">
                        <button type="button" style="font-size:15px;" class="btn btn-raised btn-primary">Guardar</button>
                    </div>

                  </form>

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
@endsection