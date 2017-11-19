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
        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/toolkit-bold.js') }}"></script>
        <script src="{{ asset('js/application-bold.js') }}"></script>
    </body>
</html>
