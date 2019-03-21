@extends('layouts.app_admin')

@section('title', 'DASILA')

@section('styles')
<link rel="stylesheet" href="{{asset('asset/css/plugins/datatables.bootstrap.min.css')}}">

<style>
    table tbody:hover{
        cursor: pointer;
    }
</style>
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
                                <span class="fa-angle-right fa"></span> Pedidos
                                <span class="fa-angle-right fa"></span> Registros
                            </p>
                        </div>
                        </div>
                    </div>
                    {{-- Fin: Encabezado de sección de vista --}}

                    {{-- Inicio: Contenido de vista --}}
                    <div class="panel">
                        <div class="panel-heading"><h3>Pedidos</h3></div>
                        <div class="panel-body">
                            <div class="responsive-table">
                                <table id="tblUsuarios" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre de cliente</th>
                                            <th>Nombre de producto</th>
                                            <th>Cantidad</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-click="informacion(actual.id)" ng-repeat="actual in registros" data-toggle="modal" data-target="#myModal">
                                            <td>@{{ actual.nombre }}</td>
                                            <td>@{{ actual.producto }}</td>
                                            <td>@{{ actual.cantidad }}</td>
                                            <td>@{{ actual.total }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- Fin: Contenido de vista --}}
                    {{-- Inicio: Contenido de modal --}}
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" align="center">Información específica de pedido</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="col-md-12 panel form-element-padding" style="padding-bottom:50px;padding-right:0px;">
                                        <div class="panel-body">
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <img ng-src="{{asset('perfil')}}/@{{registro.imagen}}" class="img-circle avatar" alt="" style="width: 100%; height:100%; margin-top:60%;">
                                            </div>
                                            <div class="col-sm-8 col-md-8 col-lg-8" style="padding: 15px">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label for="Nombre del cliente"></label>
                                                        <input ng-model="registro.nombre" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Nombre" disabled>
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <label for="Apellido paterno del cliente"></label>
                                                        <input ng-model="registro.paterno" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Apellido paterno" disabled>
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <label for="Apellido materno del cliente"></label>
                                                        <input ng-model="registro.materno" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Apellido materno" disabled>
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <label for="Producto solicitado"></label>
                                                        <input ng-model="registro.producto" type="text" class="form-control info" style="margin: 1% !important;" placeholder="Nombre del producto" disabled>
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label for="Cantidad solicitada del producto"></label>
                                                        <input ng-model="registro.cantidad" type="text" class="form-control info" style="margin: 1% !important;" placeholder="Cantidad solicitada" disabled>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label for="Total de la compra"></label>
                                                        <input ng-model="registro.total" type="text" class="form-control info" style="margin: 1% !important;" placeholder="Total de la compra" disabled>
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label for="Fecha de pedido"></label>
                                                        <input ng-model="registro.created_at" type="text" class="form-control info" style="margin: 1% !important;" placeholder="Fecha de pedido" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="text-align: center">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer" style="text-align: center"></div>
                            </div>
                        
                        </div>
                    </div>
                    {{-- Fin: Contenido de modal --}}
                </div>
            </div>
        </div>

    </div>
    {{-- Fin: Contenido --}}
</div>

@endsection




@section('scripts')
    <script src="{{asset('asset/js/plugins/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/datatables.bootstrap.min.js')}}"></script>
@endsection

@section('scriptAngular')
    $scope.registros = {};
    $scope.registro = {};
    
    $scope.tabla = function() {
        $http.get('/admin/pedidos/registros').then(
            function(response) {
                console.log(response);
                $scope.registros = response.data;
            }, function(error) {
                console.log(error);
            }
        );
    };
    $scope.tabla();


    $scope.informacion = function(id) {
        $http.get('/admin/pedidos/registros/informacion/'+id).then(
            function(response) {
                $scope.registro = response.data[0];
                console.log($scope.registro);
                {{-- console.log(response); --}}
            }, function(error) {
                console.log(error);
            }
        );
    };
@endsection