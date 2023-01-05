<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->

    <title>Primyir Online Portal</title>
    <!-- ======= add icon link ====== -->

    <link rel = "icon" href = "assets/imgs/SNHS.png" type = "image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/de2ccfef00.js" crossorigin="anonymous"></script>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my_app.css') }}" rel="stylesheet">
    

</head>
<body>
    <div id="wrapper">
        <!-- Side navigation -->
        <div class="sidenav" id="sidebar">
            <div class="sidebar-heading">
                e-SKWELAHAN
            </div>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-sm-center">
                        <img src="/svg/home-icon.svg" style="height:20px" class="pe-4">Home
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-sm-center">
                        <img src="/svg/grad-cap.svg" style="height:25px" class="pe-3">Academics
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-sm-center">
                        <img src="/svg/bulletin-icon.svg" style="height:25px" class="pe-3">Bulletin
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Page Content -->
        <div class="main">
            <nav class="navbar d-flex navbar-expand-md navbar-light bg-white shadow-sm ps-2 fixed-top" id="topNav">
                <!-- This is the main nav bar -->
                <div class="container">
                    <!--Sidebar button
                    <button type="button" class="btn btn-outline-light" id="menu-toggle" style="margin:0.4rem">
                        <span class="navbar-toggler-icon"></span>
                    </button>-->
                    <!--Toggle button for smaller screen-->
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!--Navbar logo, title, and text-->
                    <div class="d-flex me-auto">
                        <a class="navbar-brand d-flex" href="{{ url('/') }}">
                            <div><img src = "/png/snhs.png" style="height: 30px" class="pe-1 border-end"></div>
                        </a>
                        <div class="px-2 pt-1" style="font-size: 1.2rem" id="navbar-title">Welcome to SNHS</div>
                        <span class="navbar-text">
                            School Management System
                        </span>
                    </div>

                    <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <div>
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav pt-1">
                            
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
