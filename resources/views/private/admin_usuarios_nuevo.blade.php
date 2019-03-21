@extends('layouts.app_admin')

@section('title', 'DASILA')

@section('styles')
<link rel="stylesheet" href="{{asset('asset/css/plugins/jquery.steps.css')}}">
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
                                <span class="fa-angle-right fa"></span> Registro
                            </p>
                        </div>
                        </div>
                    </div>
                    {{-- Fin: Encabezado de sección de vista --}}

                    {{-- Inicio: Contenido de vista --}}
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 align="center">Registro de un nuevo usuario</h3>
                        </div>
                        <div class="panel-body">
                            <form id="frmUsuario" action="#">
                                <h3>Datos personales</h3>
                                <fieldset>
                                    <legend>Información personal</legend>

                                    <label for="nombre">Nombre completo</label>
                                    <div class="form-group form-animate-text" style="margin-bottom:40px !important;">
                                        <input type="text" class="form-text required" name="nombre" id="nombre" required>
                                        <span class="bar"></span>
                                    </div>

                                    <label for="paterno">Apellido paterno</label>
                                    <div class="form-group form-animate-text" style="margin-bottom:40px !important;">
                                        <input type="text" class="form-text required" name="paterno" id="paterno" required>
                                        <span class="bar"></span>
                                    </div>

                                    <label for="materno">Apellido materno</label>
                                    <div class="form-group form-animate-text" style="margin-bottom:40px !important;">
                                        <input type="text" class="form-text required" name="materno" id="materno" required>
                                        <span class="bar"></span>
                                    </div>
                                </fieldset>
                                
                                <h3>Usuario</h3>
                                <fieldset>
                                    <legend>Información de usuario</legend>

                                    <label for="usuario">Nombre de usuario</label>
                                    <div class="form-group form-animate-text" style="margin-bottom:40px !important;">
                                        <input type="text" class="form-text required" name="usuario" id="usuario" required>
                                        <span class="bar"></span>
                                    </div>

                                    <label for="password-2">Contraseña</label>
                                    <div class="form-group form-animate-text" style="margin-bottom:40px !important;">
                                        <input type="password" class="form-text required" name="password" id="password-2" required>
                                        <span class="bar"></span>
                                    </div>

                                    <label for="confirm-2">Confirmar contraseña</label>
                                    <div class="form-group form-animate-text" style="margin-bottom:40px !important;">
                                        <input type="password" class="form-text required" name="confirm" id="confirm-2" required>
                                        <span class="bar"></span>
                                    </div>
                                    
                                </fieldset>
                                
                                <h3>Políticas</h3>
                                <fieldset>
                                    <legend>Términos y condiciones</legend>
                                
                                    <input id="terminos-2" name="terminos" type="checkbox" class="required"> <label for="terminos-2">He leído y acepto los términos y condiciones.</label>
                                    <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                </fieldset>
                            </form>
    
    
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
{{-- Inicio: Pluggins para formulario --}}
<script src="{{asset('asset/js/plugins/jquery.steps.min.js')}}"></script>
<script src="{{asset('asset/js/plugins/jquery.validate.min.js')}}"></script>
{{-- Fin: Pluggins para formulario --}}

<script type="text/javascript">
$(document).ready(function(){
    var form = $("#frmUsuario").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex)
            {
                return true;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            agregar();
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });
});

function agregar() {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == "200") {
            alert("Agregado");
            location.replace("/admin/usuarios/registros");
        }
    };

    var valores = {
        nombre: document.getElementById('nombre').value,
        paterno: document.getElementById('paterno').value,
        materno: document.getElementById('materno').value,
        usuario: document.getElementById('usuario').value,
        password: document.getElementById('password-2').value,
        _token: document.getElementById('token').value
    };

    http.open("POST", "/admin", true);
    http.setRequestHeader("Content-Type", "application/json");
    http.send(JSON.stringify(valores));
}

function _keyValidationNombre() {
    var text = document.getElementById("nombre");
    text.addEventListener("keypress", _check);
    function _check(e) {
    var textV = "which" in e ? e.which : e.keyCode,
        char = String.fromCharCode(textV),
        regex = /[a-z,ñ ]/ig;
        if(!regex.test(char)) e.preventDefault(); return false;
    }
}

function _keyValidationPaterno() {
    var text = document.getElementById("paterno");
    text.addEventListener("keypress", _check);
    function _check(e) {
    var textV = "which" in e ? e.which : e.keyCode,
        char = String.fromCharCode(textV),
        regex = /[a-z,ñ ]/ig;
        if(!regex.test(char)) e.preventDefault(); return false;
    }
}

function _keyValidationMaterno() {
    var text = document.getElementById("materno");
    text.addEventListener("keypress", _check);
    function _check(e) {
    var textV = "which" in e ? e.which : e.keyCode,
        char = String.fromCharCode(textV),
        regex = /[a-z,ñ ]/ig;
        if(!regex.test(char)) e.preventDefault(); return false;
    }
}

window.addEventListener("load", _keyValidationNombre);
window.addEventListener("load", _keyValidationPaterno);
window.addEventListener("load", _keyValidationMaterno);
</script>
@endsection

@section('scriptAngular')@endsection