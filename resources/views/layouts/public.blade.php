<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Lora:400,400italic|Roboto:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toolkit-bold.css') }}">
    <link rel="stylesheet" href="{{ asset('css/application-bold.css') }}">
</head>

<body>

@include('public.partials.navbar')

@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/toolkit-bold.js') }}"></script>
<script src="{{ asset('js/application-bold.js') }}"></script>
</body>
</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<!-- Styles -->--}}
{{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app">--}}
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--<div class="container">--}}
{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--{{ config('app.name', 'Laravel') }}--}}
{{--</a>--}}
{{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--<span class="navbar-toggler-icon"></span>--}}
{{--</button>--}}

{{--<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">--}}
{{--<ul class="navbar-nav">--}}
{{--<li class="nav-item"><a href="#" class="nav-link">About</a></li>--}}
{{--<li class="nav-item dropdown">--}}
{{--<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"--}}
{{--data-toggle="dropdown"--}}
{{--aria-haspopup="true" aria-expanded="false">--}}
{{--Events--}}
{{--</a>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li class="nav-item dropdown">--}}
{{--<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"--}}
{{--data-toggle="dropdown"--}}
{{--aria-haspopup="true" aria-expanded="false">--}}
{{--Results--}}
{{--</a>--}}
{{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
{{--<a href="#" target="_blank" class="dropdown-item">2018</a>--}}
{{--<a href="#" target="_blank" class="dropdown-item">2017</a>--}}
{{--<a href="#" target="_blank" class="dropdown-item">2016</a>--}}
{{--<a href="#" target="_blank" class="dropdown-item">2015</a>--}}
{{--</div>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}

{{--</div>--}}
{{--</nav>--}}

{{--@yield('content')--}}
{{--</div>--}}

{{--<!-- Scripts -->--}}
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
