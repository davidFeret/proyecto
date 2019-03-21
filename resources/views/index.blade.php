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
                                <span class="fa-angle-right fa"></span> Home
                            </p>
                        </div>
                        </div>
                    </div>
                    {{-- Fin: Encabezado de sección de vista --}}

                    {{-- Inicio: Contenido de vista --}}
                    <div class="panel">
                        <a href="/login">Click aquí para ir a login</a>
                    </div>
                    {{-- Fin: Contenido de vista --}}
                </div>
            </div>
        </div>

    </div>
    {{-- Fin: Contenido --}}
</div>

@endsection




@section('scripts')@endsection

@section('scriptAngular')@endsection