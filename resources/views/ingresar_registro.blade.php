@extends('layouts.app_admin')

@section('title', 'Registro')

@section('content')

<div class="container-fluid dashboard form-signin-wrapper">

    <form class="form-signin">
        <div class="panel periodic-login">
            <div class="panel-body text-center">
                <h5 class="atomic-symbol"> <span class="fa fa-windows"></span> </h5>
                <p class="element-name">Registrarse</p>

                <i class="icons icon-arrow-down"></i>

                <div class="form-group" style="margin-top:20px !important;">
                    <h3>Datos personales</h3>
                </div>
                
                <div class="form-group form-animate-text" style="margin-top:30px !important;">
                    <input type="text" class="form-text" ng-model="usuario.nombre" required>
                    <span class="bar"></span>
                    <label>Nombre(s)</label>
                </div>

                <div class="form-group form-animate-text" style="margin-top:30px !important;">
                    <input type="text" class="form-text" ng-model="usuario.paterno" required>
                    <span class="bar"></span>
                    <label>Apellido paterno</label>
                </div>

                <div class="form-group form-animate-text" style="margin-top:30px !important;">
                    <input type="text" class="form-text" ng-model="usuario.materno" required>
                    <span class="bar"></span>
                    <label>Apellido materno</label>
                </div>

                <div class="col-sm-12">
                    <div class="col-sm-12 padding-0">
                        <input type="radio" name="option" ng-model="usuario.sexo" value="Masculino" style="margin-bottom: 10%;"> Masculino
                        <input type="radio" name="option" ng-model="usuario.sexo" value="Femenino" style="margin-left: 20%"> Femenino
                    </div>
                </div>

                <div class="form-group" style="margin-top:20px !important;">
                    <h3>Datos de usuario</h3>
                </div>

                <div class="form-group form-animate-text" style="margin-top:30px !important;">
                    <input type="text" class="form-text" ng-model="usuario.usuario" required>
                    <span class="bar"></span>
                    <label>Nombre de usuario</label>
                </div>

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" ng-model="usuario.password" required>
                    <span class="bar"></span>
                    <label>Contraseña</label>
                </div>

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" ng-model="usuario.confirm_password" ng-class="{error_login: usuario.password != usuario.confirm_password}" required>
                    <span class="bar"></span>
                    <label>Confirmar contraseña</label>
                </div>

                <button type="button" class="btn col-md-12" ng-click="registro()" ng-disabled="usuario.password != usuario.confirm_password"> Registrarse </button>
            </div>
            <div class="text-center" style="padding:5px;">
                <a href="/login"> ¿Ya tienes una cuenta? </a>
            </div>
        </div>
    </form>

</div>

@endsection

@section('scriptAngular')
$scope.usuario = {};

$scope.registro = function () {
    $http.post('/login', $scope.usuario).then(
        function(response) {
            console.log(response);
            if(response.data == 'false')
                console.log("Ya existe ese nombre de usuario");
            else
                location.href = "/login";
        }, function(error) {
            console.log(error);
        }
    );
};

@endsection