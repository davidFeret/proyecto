<!DOCTYPE html>
<html lang="es" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Inicio: CSS --}}
    <link rel="stylesheet" href="{{asset('asset/public/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/public/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/public/css/agency.css')}}">
        {{-- Inicio: Ícono --}}
        <link rel="shortcut icon" href="{{asset('asset/img/logo.png')}}">
        {{-- Fin: Ícono --}}
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    {{-- Fin: CSS --}}

    @yield('styles')

    <title>App Name - @yield('title')</title>
</head>

<body ng-controller="ctrl" id="page-top">
    @yield('navbar')

    @yield('header')

    @yield('general')

    @yield('productos')

    @yield('informacion')

    @yield('equipo')

    @yield('contacto')

    @yield('footer')

    @yield('modales')

    {{-- Inicio: Scripts --}}
    <script src="{{asset('asset/public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('asset/public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{asset('asset/public/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('asset/public/js/contact_me.js')}}"></script>
    <script src="{{asset('asset/public/js/agency.min.js')}}"></script>
    {{-- Fin: Scripts --}}

    @yield('scripts')
    

    <script>
        var app = angular.module('app', []);
        app.controller('ctrl', function($scope, $http, $filter) {
            @yield('scriptAngular')
        });
    </script>
</body>
</html>