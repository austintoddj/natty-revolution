<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Events
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a href="https://www.facebook.com/events/1705643622780477" target="_blank" class="dropdown-item">Michigan Roar Natural Classic</a>
                            <a href="https://www.facebook.com/Diva-Classic-All-Womens-Event-401063200081726" target="_blank" class="dropdown-item">Diva Classic All Women's Event</a>
                            <a href="https://www.facebook.com/events/480484935664682" target="_blank" class="dropdown-item">Wisconsin Warrior Natural Classic</a>
                            <a href="https://www.facebook.com/events/298381637330687" target="_blank" class="dropdown-item">MTS Nutrition Inferno</a>
                            <a href="https://www.facebook.com/events/1249702451737632" target="_blank" class="dropdown-item">Michigan State Natural Bodybuilding Championships</a>
                            <a href="https://www.facebook.com/Minnesota-Mayhem-Natural-Bodybuilding-Championships-545085625591026" target="_blank" class="dropdown-item">Minnesota Mayhem Natural Bodybuilding Championships</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Results
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a href="#" target="_blank" class="dropdown-item">2018</a>
                            <a href="#" target="_blank" class="dropdown-item">2017</a>
                            <a href="#" target="_blank" class="dropdown-item">2016</a>
                            <a href="#" target="_blank" class="dropdown-item">2015</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
