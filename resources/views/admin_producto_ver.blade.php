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

@section('styles')
<style>
    table tbody:hover{
        cursor: pointer;
    }
</style>
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
            <li><a href="#">Agregar usuario</a></li>
            <li><a href="#">Ver usuarios</a></li>
          </ul>
        </li>

        <li class="ripple">
          <a class="tree-toggle nav-header" href="#"><span class="fa-home fa"></span> Productos 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="/admin/producto/agregar">Agregar producto</a></li>
            <li><a href="/admin/producto/registros">Ver productos</a></li>
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

                {{-- Aquí --}}
                <div class="col-md-12">
                    <div class="panel box-shadow-none content-header">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <p class="animated fadeInDown">
                                Productos <span class="fa-angle-right fa"></span> Ver productos
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 top-20 padding-0">
                        <div class="col-md-12">
                            <div class="panel">
                              <div class="col-sm-6 col-md-3 product-grid">
                                  <div class="thumbnail">
                                    <div class="product-location">
                                      <span class="fa-map-marker fa"></span> Banyumas
                                      </div>
                                    <div class="product-price product-price-bottom">
                                      <h4>$1,716</h4>
                                    </div>
                                    <img src="../../asset/img/avatar.jpg" alt="..." >
                                    <div class="caption">
                                      <small>Category</small>
                                      <small class="pull-right">
                                        <span class="rate fa-star fa"></span>
                                        <span class="rate fa-star fa"></span>
                                        <span class="rate fa-star fa"></span>
                                        <span class="rate fa-star fa"></span>
                                        <span class="rate fa-star-half fa"></span>
                                      </small>
                                      <h4>Product Name</h4>
                                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                                      <p><a href="#" class="btn btn-primary" role="button">Buy</a></p>
                                    </div>
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



@endsection

@section('scriptAngular')

@endsection