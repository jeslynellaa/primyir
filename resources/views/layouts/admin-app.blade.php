<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Primyir Online Portal</title>
    <!-- ======= add icon link ====== -->
    <link rel = "icon" href = "/png/snhs.png" type = "image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/de2ccfef00.js" crossorigin="anonymous"></script>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/loader.js') }}" defer></script>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            let subMenu = document.getElementById("subMenu");

            $.toggleMn(){
                subMenu.classList.toggle("open-menu")
            }
        })
    </script>

    <script>
        jQuery(document).ready(function($) {
            var loader = document.getElementById("preloader");

            window.addEventListener("load", function(){
                loader.style.display = "none";
            });
        });
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/my_app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grades.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
    <!-- =============== Loading ================ -->
    <div id="preloader"></div>

    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <div class="logo">
                                <img src="/png/snhss.png" class="=logoo">
                            </div>
                        </span>
                        <span class="title"><b>Primyir Online Portal</b></span>
                    </a>
                </li>

                <li>
                    <a href="/admin">
                        <span class="icon">
                            <i class="fa-solid fa-house icon-nav"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/students">
                        <span class="icon">
                            <i class="fa-solid fa-graduation-cap icon-nav"></i>
                        </span>
                        <span class="title">Students</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/faculty">
                        <span class="icon">
                            <i class="fa-solid fa-apple-whole icon-nav"></i>
                        </span>
                        <span class="title">Faculty</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/sections">
                        <span class="icon">
                            <i class="fa-solid fa-book icon-nav"></i>
                        </span>
                        <span class="title">Sections</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-chair icon-nav"></i>
                        </span>
                        <span class="title">Class</span>
                    </a>
                </li> -->

                <li>
                    <a href="/admin/subjects">
                        <span class="icon">
                            <i class="fa-solid fa-globe icon-nav"></i>
                        </span>
                        <span class="title">Subjects</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/events">
                        <span class="icon">
                            <i class="fa-solid fa-calendar icon-nav"></i>
                        </span>
                        <span class="title">Events</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/reports">
                        <span class="icon">
                            <i class="fa-solid fa-file icon-nav"></i>
                        </span>
                        <span class="title">Reports</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="user">
                <img src="/png/customer01.jpg" onclick="toggleMn()">
            </div>

            @if(!Route::is('register'))
                <!-- ======================= Drop-down Profile Menu ================== -->
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="/png/user.png" alt="">
                            <h2>
                                {{ Auth::user()->givenName }}
                                {{ Auth::user()->lastName }}
                            </h2>
                        </div>
                        <hr>

                        <a href="{{ route('profile.edit', Auth::user()->id) }}" class="sub-menu-link">
                            <img src="/png/profile.png">
                            <p>Edit Profile</p>
                            <span></span>
                        </a>

                        <a href="{{ route('pw.edit', Auth::user()->id) }}" class="sub-menu-link">
                            <img src="/png/setting.png">
                            <p>Change Password</p>
                            <span></span>
                        </a>
                        
                        <a class="sub-menu-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <img src="/png/logout.png">
                            <p>{{ __('Logout') }}</p>
                            <span></span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div><!--End of sub-menu -->
                </div><!--End of sub-menu-wrap-->
            @endif
        </div><!--End of Topbar -->

        <main>
            @yield('content')
        </main>

    </div> <!--End of main -->
</body>
</html>
