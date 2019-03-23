@extends('layouts.app_admin')

@section('title', 'DASILA')

@section('styles')
<style>
    .addImage {
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
            <li class="user-name"><span>Nombre de usuario</span> <p class="mensaje"></p> </li>
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
                                <span class="fa-angle-right fa"></span> Productos
                                <span class="fa-angle-right fa"></span> Registros
                            </p>
                        </div>
                        </div>
                    </div>
                    {{-- Fin: Encabezado de sección de vista --}}

                    {{-- Inicio: Contenido de vista --}}
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 product-grid" ng-repeat="producto in productos">
                                <div class="thumbnail">
                                    <div class="product-location addImage" ng-click="imagenesExtra(producto.id)" data-toggle="modal" data-target="#modalImage">
                                        <i class="fa fa-plus-square"></i>
                                    </div>
                                    <div class="product-price product-price-bottom">
                                        <h4>$@{{producto.precio}}</h4>
                                    </div>
                                    <img ng-src="{{asset('productos')}}/@{{producto.imagen}}" ng-click="imagenes(producto.id)" class="addImage" data-toggle="modal" data-target="#modalPrincipal" style="width: 250px; height:237px;">
                                    <div class="caption">
                                        <small>@{{producto.descuento}}% de descuento</small>
                                        <small class="pull-right">
                                            <span class="rate fa-star fa"></span>
                                            <span class="rate fa-star fa"></span>
                                            <span class="rate fa-star fa"></span>
                                            <span class="rate fa-star fa"></span>
                                            <span class="rate fa-star-half fa"></span>
                                        </small>
                                        <h5>@{{producto.producto}}</h5>
                                        <p>@{{producto.description}}</p>
                                        <p align="center">
                                            <button class="btn btn-success" ng-click="informacionProducto(producto.id)" data-toggle="modal" data-target="#modalProducto">Modificar</button>
                                            <button class="btn btn-danger" ng-click="eliminarProducto(producto.id)">Eliminar</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- Fin: Contenido de vista --}}
                    {{-- Inicio: Contenido de modal para agregar imagen extra --}}
                    <div id="modalImage" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" align="center">Imágenes extra del producto</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 panel form-element-padding" style="padding-bottom:50px;padding-right:0px;">
                                        <div class="panel-body">
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <div class="form-group form-animate-text" align="center">
                                                    <form action="#" method="POST" enctype="multipart/form-data" id="frmImagen">
                                                        @csrf
                                                        <h4 align="center">Agregar nueva imagen</h4>
                                                        <input type="text" ng-model="idProducto" ng-hide="true" id="idProducto">
                                                        <input type="file" class="form-control" id="file" name="file" class="form-text Animated">
                                                        <span class="bar"></span>
                                                        <input type="submit" name="submit" class="btn btn-primary" value="Subir imagen">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-md-8 col-lg-8" style="padding: 15px">
                                                <div class="col-sm-7 col-md-7 col-lg-7" ng-repeat="imagen in imagenesExtraProducto">
                                                    <img ng-src="{{asset('productos')}}/@{{imagen.imagen}}" ng-click="cambiarExtraImagen(imagen.id)" ng-class="{avatar: imagen.id == extraImagen}" alt="" style="width: 200px; height:150px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="text-align: center">
                                        {{-- Botones --}}
                                        <button class="btn-flip btn btn-danger" ng-click="eliminarExtraImagen()" data-dismiss="modal">
                                            <div class="flip">
                                                <div class="side">
                                                    <span class="icons icon-trash"></span> Eliminar imagen
                                                </div>
                                                <div class="side back">
                                                    ¿Estás seguro?
                                                </div>
                                            </div>
                                            <span class="icon"></span>
                                        </button>
                                        {{-- <button class="btn-flip btn btn-danger" data-dismiss="modal" type="button" id="cancelar">
                                            Cancelar
                                        </button> --}}
                                    </div>
                                </div>
                                <div class="modal-footer" style="text-align: center"></div>
                            </div>
                        
                        </div>
                    </div>
                    {{-- Fin: Contenido de modal para agregar imagen extra --}}

                    {{-- Inicio: Contenido de modal para agregar imagen extra --}}
                    <div id="modalPrincipal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" align="center">Imágenes del producto</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 panel form-element-padding" style="padding-bottom:50px;padding-right:0px;">
                                        <div class="panel-body">
                                            <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 15px">
                                                <div class="col-sm-6 col-md-6 col-lg-6" ng-repeat="imagen in imagenesProducto">
                                                    <img ng-src="{{asset('productos')}}/@{{imagen.imagen}}" ng-class="{avatar: imagen.id == imagenPrincipal}" ng-click="cambiarImagen(imagen.id)" alt="" style="width: 200px; height: 150px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="text-align: center">
                                        {{-- Botones --}}
                                        <button class="btn-flip btn btn-success" ng-click="cambiarImagenPrincipal()" data-dismiss="modal">
                                            <div class="flip">
                                                <div class="side">
                                                    <span class="fa fa-edit"></span> Guardar cambios
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
                    {{-- Fin: Contenido de modal para agregar imagen extra --}}
                    {{-- Inicio: Contenido de modal para editar datos de producto --}}
                    <div id="modalProducto" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" align="center">Datos de producto</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="col-md-12 panel form-element-padding" style="padding-bottom:50px;padding-right:0px;">
                                        <div class="panel-body">
                                            <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 15px">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label for="#">Nombre del producto</label>
                                                        <input ng-model="informacionRegistro.producto" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Producto">
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label for="#">Precio</label>
                                                        <input ng-model="informacionRegistro.precio" type="number" class="form-control primary" style="margin: 1% !important;" placeholder="Precio del producto">
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label for="#">Descripción</label>
                                                        <textarea ng-model="informacionRegistro.description" type="text" class="form-control primary" style="margin: 1% !important;" placeholder="Descripción del producto"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="text-align: center">
                                        <button class="btn-flip btn btn-success" ng-click="editarProducto(informacionRegistro.id)" data-dismiss="modal">
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
                                    </div>
                                    
                                </div>
                                <div class="modal-footer" style="text-align: center"></div>
                            </div>
                        
                        </div>
                    </div>
                    {{-- Fin: Contenido de modal para editar datos de producto --}}
                </div>
            </div>
        </div>

    </div>
    {{-- Fin: Contenido --}}
</div>

@endsection




@section('scripts')
    <script src="{{asset('js/jquery_ajax.min.js')}}"></script>
    {{-- Script para agregar imagen extra --}}
    <script>
        $(document).ready(function(e){
            $("#frmImagen").on('submit', function(e){
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '/admin/productos/agregar/imagen/'+$("#idProducto").val(),
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(msg){
                        console.log(msg);
                        location.replace("/admin/productos/registros");
                    }
                });
            });

            //file type validation
            $("#file").change(function() {
                var file = this.files[0];
                var imagefile = file.type;
                var match= ["image/jpeg","image/png","image/jpg"];
                if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
                    alert('Please select a valid image file (JPEG/JPG/PNG).');
                    $("#file").val('');
                    return false;
                }
            });
        });
    </script>
@endsection

@section('scriptAngular')
$scope.productos = {};
$scope.imagenesExtraProducto = {};
$scope.imagenesProducto = {};
$scope.imagenPrincipal = "";
$scope.extraImagen = "";
$scope.idProducto = "";
$scope.informacionRegistro = {};

$scope.registros = function() {
    $http.get('/admin/productos/informacion').then(
        function(response) {
            $scope.productos = response.data;
        }, function(error) {
            console.log(error);
        }
    );
};
$scope.registros();

$scope.imagenesExtra = function (id){
    $scope.extraImagen = "";
    $scope.idProducto = id;
    $http.get('/admin/productos/informacion/extraimages/'+id).then(
        function(response) {
            console.log(response);
            $scope.imagenesExtraProducto = response.data;

            $scope.registros();
        }, function(error) {
            console.log(error);
        }
    );
};

$scope.imagenes = function(id) {
    $scope.idProducto = id;
    $http.get('/admin/productos/informacion/images/'+id).then(
        function(response) {
            $scope.imagenPrincipal = response.data[0].imgPrincipal;
            $scope.imagenesProducto = response.data;

            $scope.registros();
        }, function(error) {
            console.log(error);
        }
    );
};

$scope.cambiarImagen = function(id) {
    $scope.imagenPrincipal = id;
};

$scope.cambiarExtraImagen = function(id) {
    $scope.extraImagen = id;
};

$scope.cambiarImagenPrincipal = function() {
    $http.post('/admin/productos/actualizar/principal/'+$scope.idProducto, $scope.imagenPrincipal).then(
        function(response) {
            console.log(response);
            $scope.registros();
        }, function(error) {
            console.log(error);
        }
    );
};

$scope.eliminarExtraImagen = function() {
    $http.delete('/admin/productos/eliminar/extraimagen/'+$scope.extraImagen).then(
        function(response) {
            if(response.data == "Eliminado")
                console.log("Eliminado con éxito");
            else
                console.log("Error al eliminar");
            $scope.registros();
        }, function(error) {
            console.log(error);
        }
    );
};

$scope.informacionProducto = function(id) {
    $http.get('/admin/productos/informacion/producto/'+id).then(
        function(response) {
            {{-- console.log(response); --}}
            $scope.informacionRegistro = response.data;
        }, function(error) {
            console.log(error);
        }
    );
};

$scope.editarProducto = function(id) {
    console.log("Dentro");
    $http.put('/producto/'+id, $scope.informacionRegistro).then(
        function(response) {
            if(response.data == "Success") {
                console.log("Actualizado con éxito");
                $scope.registros();
            } else 
                console.log("Error");
        }, function(error) {
            console.log(error);
        }
    );
};

$scope.eliminarProducto = function(id) {
    console.log("Dentro");
    $http.delete('/producto/'+id).then(
        function(response) {
            if(response.data == "Success") {
                console.log("Actualizado con éxito");
                $scope.registros();
            } else 
                console.log("Error");
        }, function(error) {
            console.log(error);
        }
    );
};
@endsection