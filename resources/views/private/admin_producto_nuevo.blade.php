@extends('layouts.app_admin')

@section('title', 'DASILA')

@section('styles')
@endsection

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
    {{-- Inicio: Menú izquierdo --}}
    <div id="left-menu">
        <div class="sub-left-menu scroll">
            <ul class="nav nav-list">
                <li><div class="left-bg"></div></li>
                {{-- Inicio: Perfil --}}
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
                {{-- Cierre: Perfil --}}
                {{-- Inicio: Opciones --}}
                <li ng-class="{active: {{$activo}} == 0}"><a href="#"><span class="fa-home fa"></span>Inicio</a></li>

                <li class="ripple" ng-class="{active: {{$activo}} == 1}">
                    <a class="tree-toggle nav-header" href="#"><span class="fa-home fa"></span> Usuarios 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                        <li><a href="/admin/usuarios/nuevo">Agregar usuario</a></li>
                        <li><a href="/admin/usuarios/registros">Ver usuarios</a></li>
                    </ul>
                </li>

                <li class="ripple" ng-class="{active: {{$activo}} == 2}">
                    <a class="tree-toggle nav-header" href="#"><span class="fa-home fa"></span> Productos 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                        <li><a href="/admin/productos/nuevo">Agregar producto</a></li>
                        <li><a href="/admin/productos/registros">Ver productos</a></li>
                    </ul>
                </li>

                <li ng-class="{active: {{$activo}} == 3}"><a href="/pedido"><span class="fa-home fa"></span>Pedidos</a></li>

                <li ng-class="{active: {{$activo}} == 4}"><a href="#"><span class="fa-home fa"></span>Ventas</a></li>

                <li ng-class="{active: {{$activo}} == 5}"><a href="#"><span class="fa-home fa"></span>Configuración</a></li>
                {{-- Fin: Opciones --}}

            </ul>
        </div>
    </div>
    {{-- Fin: Menú izquierdo --}}

    {{-- Inicio: Contenido --}}
    <div id="content">

        <div class="col-md-12" style="padding:20px;">
            <div class="col-md-12 padding-0">
                <div class="col-md-12 padding-0">
                    {{-- Inicio: Encabezado de sección de vista --}}
                    <div class="panel box-shadow-none content-header">
                        <div class="panel-body">
                        <div class="col-md-12">
                            <p class="animated fadeInDown"> Inicio
                                <span class="fa-angle-right fa"></span> 
                            </p>
                            <p>@{{files}}</p>
                        </div>
                        </div>
                    </div>
                    {{-- Fin: Encabezado de sección de vista --}}

                    {{-- Inicio: Contenido de vista --}}
                    <div class="panel">
                        <div class="panel box-v4">
                            <div class="panel-heading bg-white border-none">
                                <h3 align="center">Agregar un nuevo producto </h3>
                            </div>
                            <div class="panel-body padding-0">
                                <div class="col-md-12 col-xs-12 col-md-12 col-lg-12 box-v4-alert">
                                    <h3>Datos del producto</h3>

                                    <form action="/producto" method="POST" enctype="multipart/form-data" name="frmProducto">
                                        @csrf
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" name="nombre" ng-model="producto.nombre" required>
                                            <span class="bar"></span>
                                            <label>Nombre del producto</label>
                                        </div>
                    
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="number" class="form-text" name="precio" ng-model="producto.precio" required>
                                            <span class="bar"></span>
                                            <label>Precio del producto</label>
                                        </div>
                    
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <textarea type="text" class="form-text" name="description" ng-model="producto.description" rows="4" required></textarea>
                                            <span class="bar"></span>
                                            <label>Descripción del producto</label>
                                        </div>
                    
                                        <div class="form-group form-animate-text">
                                            <h4>Imagen principal del producto</h4>
                                            <input type="file" file-input="files" multiple class="form-text Animated" name="imagen">
                                            <span class="bar"></span>
                                        </div>
                    
                                        <div class="form-group form-animate-text">
                                            <button type="submit" style="font-size:15px;" class="btn btn-raised btn-primary" ng-click="guardar()"
                                            ng-disabled="!frmProducto.$valid">Guardar</button>
                                        </div>
                    
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    {{-- Fin: Contenido de vista --}}
                </div>
            </div>
        </div>

    </div>
    {{-- Fin: Contenido --}}
</div>

@endsection




@section('scripts')
@endsection

@section('scriptAngular')@endsection