<!DOCTYPE html>
<html lang="es" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- start: Css -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <!-- plugins -->
    <link rel="stylesheet" href="{{asset('asset/css/plugins/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/plugins/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/plugins/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/plugins/select2.min.css')}}">

    <link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">
    <!-- end: Css -->

    @yield('styles')

    <title>App Name - @yield('title')</title>
</head>

<body>
    @yield('header')

    @yield('content')

    <script src="{{asset('js/angular.min.js')}}"></script>
    <!-- start: Javascript -->
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.ui.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    
    <!-- plugins -->
    <script src="{{asset('asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('asset/js/plugins/chart.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/select2.full.min.js')}}"></script>

    <!-- custom -->
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>

    @yield('scripts')

    <script>
        var app = angular.module('app', []);
        app.controller('ctrl', function($scope, $http, $filter) {
            @yield('scriptAngular')
        });
    </script>
</body>
</html>