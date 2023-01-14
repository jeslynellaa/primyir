<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->

    <title>Primyir Online Portal</title>
    <!-- ======= add icon link ====== -->
    <link rel = "icon" href = "/png/snhs.png" type = "image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/de2ccfef00.js" crossorigin="anonymous"></script>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/loader.js') }}" defer></script>

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
            })
        })
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
                    <a href="/home">
                        <span class="icon">
                            <i class="fa-solid fa-house icon-nav"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-graduation-cap icon-nav"></i>
                        </span>
                        <span class="title">Student</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-apple-whole icon-nav"></i>
                        </span>
                        <span class="title">Faculty</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-book icon-nav"></i>
                        </span>
                        <span class="title">Section</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-chair icon-nav"></i>
                        </span>
                        <span class="title">Class</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-globe icon-nav"></i>
                        </span>
                        <span class="title">Subject</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-calendar icon-nav"></i>
                        </span>
                        <span class="title">Event</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-file icon-nav"></i>
                        </span>
                        <span class="title">Report</span>
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

            <!--<div class="user">
                <img src="/png/customer01.jpg" onclick="toggleMn()">
            </div>

            <-- ======================= Drop-down Profile Menu ================== 
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="/png/user.png" alt="">
                        <h2>
                            
                        </h2>
                    </div>
                    <hr>

                    <a href="#" class="sub-menu-link">
                        <img src="/png/profile.png">
                        <p>Edit Profile</p>
                        <span></span>
                    </a>

                    <a href="change-pass.php" class="sub-menu-link">
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

                </div>
            </div>-->
        </div><!--End of Topbar -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="givenName" class="col-md-4 col-form-label text-md-end">{{ __('Given Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="givenName" type="text" class="form-control @error('givenName') is-invalid @enderror" name="givenName" value="{{ old('givenName') }}" required autocomplete="givenName" autofocus>

                                        @error('givenName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="middleName" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="middleName" type="text" class="form-control @error('middleName') is-invalid @enderror" name="middleName" value="{{ old('middleName') }}" autocomplete="middleName" autofocus>

                                        @error('middleName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                        @error('lastName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="sex" class="col-md-4 col-form-label text-md-end">Gender</label>

                                    <div class="col-md-6">
                                        <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus>

                                        @error('sex')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                
                                <div class="row mb-3">
                                    <label for="contactNum" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="contactNum" type="text" class="form-control @error('contactNum') is-invalid @enderror" name="contactNum" value="{{ old('contactNum') }}" autocomplete="contactNum" autofocus>

                                        @error('contactNum')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birth Date') }}</label>   
                                    
                                    <div class="col-md-6">
                                        
                                        <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" placeholder="mm/dd/yyyy" required autofocus>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('User Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="accountStatus" class="col-md-4 col-form-label text-md-end">{{ __('Account Status') }}</label>

                                    <div class="col-md-6">
                                        <input id="accountStatus" type="text" class="form-control @error('accountStatus') is-invalid @enderror" name="accountStatus" value="{{ old('accountStatus') }}" required autocomplete="accountStatus" autofocus>

                                        @error('accountStatus')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="owner_type" class="col-md-4 col-form-label text-md-end">{{ __('Owner Type') }}</label>

                                    <div class="col-md-6">
                                        <input id="owner_type" type="text" class="form-control @error('owner_type') is-invalid @enderror" name="owner_type" value="{{ old('owner_type') }}" required autocomplete="owner_type" autofocus>

                                        @error('owner_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

