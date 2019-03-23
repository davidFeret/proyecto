@extends('layouts.app_admin')

@section('title', 'Iniciar sesión')

@section('content')

<div class="container-fluid dashboard form-signin-wrapper">

    <form class="form-signin">
        <div class="panel periodic-login">
            <div class="panel-body text-center">
                <h5 class="atomic-symbol"> <span class="fa fa-windows"></span> </h5>
                <p class="element-name">Iniciar sesión</p>

                <i class="icons icon-arrow-down"></i>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" ng-model="usuario.usuario" required>
                    <span class="bar"></span>
                    <label>Nombre de usuario</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" ng-model="usuario.password" required>
                    <span class="bar"></span>
                    <label>Contraseña</label>
                </div>
                <button type="submit" class="btn col-md-12" ng-click="ingresar()"> Ingresar </button>
            </div>
            <div class="text-center" style="padding:5px;">
                <a href="#">Olvidé mi contraseña </a>
                <a href="/login/create">| Registrarse</a>
            </div>
        </div>
    </form>

</div>

@endsection

@section('scriptAngular')
$scope.usuario = {};

$scope.ingresar = function () {
    $http.post('/ingresar', $scope.usuario).then(
        function(response) {
            console.log(response);
            if(response.data == 'true') {
                console.log("Ingresado correctamente");
                location.replace("/admin");
            }
            else
                console.log("Error de credenciales");
                {{-- location.href = "/login"; --}}
        }, function(error) {
            console.log(error);
        }
    );
};
@endsection