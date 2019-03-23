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
                                <span class="fa-angle-right fa"></span> Usuario
                                <span class="fa-angle-right fa"></span> Registros
                            </p>
                        </div>
                        </div>
                    </div>
                    {{-- Fin: Encabezado de sección de vista --}}

                    {{-- Inicio: Contenido de vista --}}
                    <div class="panel">
                        <div class="panel-heading"><h3 align="center">Registro de usuarios</h3></div>
                        <div class="panel-body">
                            <div class="responsive-table">
                                <table id="tblUsuarios" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre de usuario</th>
                                            <th>Fecha de creación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-click="informacion(actual.id)" ng-repeat="actual in registros" data-toggle="modal" data-target="#myModal">
                                            <td>@{{ actual.usuario }}</td>
                                            <td>@{{ actual.created_at }}</td>
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
                                    <h4 class="modal-title" align="center">Información de usuario</h4>
                                    <button class="btn btn-warning" ng-click="desbloquear()">
                                        <span><i class="fa" ng-class="{'fa-unlock': editarConfirmacion, 'fa-lock': editarConfirmacion == false}"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="col-md-12 panel form-element-padding" style="padding-bottom:50px;padding-right:0px;">
                                        <div class="panel-body">
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <img ng-src="{{asset('perfil')}}/@{{registro.imagen}}" class="img-circle avatar" alt="" style="width: 100%; height:100%; margin-top:60%;">
                                            </div>
                                            <div class="col-sm-8 col-md-8 col-lg-8" style="padding: 15px">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12"><input id="nombre" ng-model="registro.nombre" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Nombre" ng-disabled="!editarConfirmacion"></div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12"><input id="paterno" ng-model="registro.paterno" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Apellido paterno" ng-disabled="!editarConfirmacion"></div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12"><input id="materno" ng-model="registro.materno" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Apellido materno" ng-disabled="!editarConfirmacion"></div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12"><input ng-model="registro.nacimiento" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Fecha de nacimiento" ng-disabled="!editarConfirmacion"></div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12"><input ng-model="registro.usuario" type="text" class="form-control info" style="margin: 1% !important;" placeholder="Nombre de usuario" ng-disabled="!editarConfirmacion"></div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12"><input ng-model="registro.password" type="text" class="form-control info" style="margin: 1% !important;" placeholder="Contraseña" ng-disabled="!editarConfirmacion"></div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12"><input ng-model="registro.created_at" type="text" class="form-control info" style="margin: 1% !important;" placeholder="Fecha de creación" disabled></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="text-align: center">
                                        <button class="btn-flip btn btn-success" ng-click="editar(registro.id)" data-dismiss="modal" ng-disabled="!editarConfirmacion">
                                            <div class="flip">
                                                <div class="side">
                                                    <span class="fa fa-edit"></span> Editar
                                                </div>
                                                <div class="side back">
                                                    ¿Estás seguro?
                                                </div>
                                            </div>
                                            <span class="icon"></span>
                                        </button>
                                        <button class="btn-flip btn btn-danger" ng-click="eliminar(registro.id)" data-dismiss="modal">
                                            <div class="flip">
                                                <div class="side">
                                                    <span class="fa fa-trash"></span> Eliminar
                                                </div>
                                                <div class="side back">
                                                    ¿Estás seguro?
                                                </div>
                                            </div>
                                            <span class="icon"></span>
                                        </button>
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

    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $('#tblUsuarios').DataTable();
        });
    </script> --}}

    <script type="text/javascript">
        $(document).ready(function(){
            $("#eliminar").on("click",function(){
                $(this).find(".flip").animate().replaceWith("<span class='fa fa-check' style='font-size:2em;'></span>");
            });
        });
    </script>
@endsection

@section('scriptAngular')
    $scope.registros = {};
    $scope.registro  = {};
    $scope.editarConfirmacion = false;
    
    $scope.tabla = function() {
        $http.get('/admin/usuarios/informacion').then(
            function(response) {
                console.log(response);
                $scope.registros = response.data;
            }, function(error) {
                console.log(error);
            }
        );
    };
    $scope.tabla();

    $scope.desbloquear = function() {
        $scope.editarConfirmacion = !($scope.editarConfirmacion);
    };

    $scope.restaurarValores = function() {
        $scope.editarConfirmacion = false;
        $scope.registro = {
            id        : "",
            nombre    : "",
            paterno   : "",
            materno   : "",
            nacimiento: "",
            usuario   : "",
            password  : "",
            imagen    : "default.png"
        };
    };

    $scope.restaurarValores();

    $scope.informacion = function(id) {
        $scope.restaurarValores();
        $http.get('/admin/'+id).then(
            function(response) {
                $scope.registro = response.data[0];
                console.log($scope.registro);
                {{-- console.log(response); --}}
            }, function(error) {
                console.log(error);
            }
        );
    };

    $scope.eliminar = function(id) {
        $http.delete('/admin/'+id).then(
            function(response) {
                if(response.data == "Eliminado") {
                    console.log("Eliminado");
                    $scope.tabla();
                    $scope.restaurarValores();
                } else {
                    console.log("Error al eliminar");
                }
            }, function(error) {
                console.log(error);
            }
        );
    };

    $scope.editar = function(id) {
        $http.put('/admin/'+id, $scope.registro).then(
            function(response) {
                if(response.data == "Actualizado") {
                    $scope.tabla();
                    $scope.restaurarValores();
                } else {
                    console.log("Error al actualizar");
                }
                {{-- console.log(response); --}}
            }, function(error) {
                console.log(error);
            }
        );
    };

    $scope.validarNombre = function () {
        var text = document.getElementById("nombre");
        text.addEventListener("keypress", _check);
        function _check(e) {
        var textV = "which" in e ? e.which : e.keyCode,
            char = String.fromCharCode(textV),
            regex = /[a-z,ñ ]/ig;
            if(!regex.test(char)) e.preventDefault(); return false;
        }
    };

    $scope.validarPaterno = function () {
        var text = document.getElementById("paterno");
        text.addEventListener("keypress", _check);
        function _check(e) {
        var textV = "which" in e ? e.which : e.keyCode,
            char = String.fromCharCode(textV),
            regex = /[a-z,ñ ]/ig;
            if(!regex.test(char)) e.preventDefault(); return false;
        }
    };

    $scope.validarMaterno = function () {
        var text = document.getElementById("materno");
        text.addEventListener("keypress", _check);
        function _check(e) {
        var textV = "which" in e ? e.which : e.keyCode,
            char = String.fromCharCode(textV),
            regex = /[a-z,ñ ]/ig;
            if(!regex.test(char)) e.preventDefault(); return false;
        }
    };

    window.addEventListener("load", $scope.validarNombre);
    window.addEventListener("load", $scope.validarPaterno);
    window.addEventListener("load", $scope.validarMaterno);
@endsection