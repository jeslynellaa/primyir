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
            }
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
                    <a href="index.php">
                        <span class="icon">
                            <div class="logo">
                                <img src="/png/snhss.png" class="=logoo">
                                </div>
                        </span>
                        <span class="title"><b>Primyir Online Portal</b></span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
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

                        <div class="user">
                            <img src="/png/customer01.jpg" onclick="toggleMn()">
                        </div>

                        <!-- ======================= Drop-down Profile Menu ================== -->
                        <div class="sub-menu-wrap" id="subMenu">
                            <div class="sub-menu">
                                <div class="user-info">
                                    <img src="/png/user.png" alt="">
                                    <h2>

                                        <!--php echo $_SESSION['given_name'] . " " . $_SESSION['last_name'] ;
                                        ?-->

                                    </h2>
                                </div>
                                <hr>

                                <a href="edit-profile.php" class="sub-menu-link">
                                    <img src="/png/profile.png">
                                    <p>Edit Profile</p>
                                    <span></span>
                                </a>

                                <a href="change-pass.php" class="sub-menu-link">
                                    <img src="/png/setting.png">
                                    <p>Change Password</p>
                                    <span></span>
                                </a>

                                <a href="#" class="sub-menu-link">
                                    <img src="/png/logout.png">
                                    <p>Logout</p>
                                    <span></span>
                                </a>

                            </div>
                        </div>

                    </div>

                    <!-- ======================= Cards ================== -->
                    <div class="cardBox">
                                    <div class="card">
                                        <div>
                                            <div class="numbers">

                                                <!--?php
                                                    $sql = "SELECT* FROM `users` where `owner_type` = 'S'";
                        
                                                    if ($result = mysqli_query($data, $sql)) {
                        
                                                    $rowcount = mysqli_num_rows( $result );

                                                    echo $rowcount;
                                                    }
                                                ?-->

                                            </div>
                                            <div class="cardName">Student</div>
                                        </div>

                                        <div class="iconBx">
                                            <i class="fa-solid fa-graduation-cap icon-dash"></i>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div>
                                            <div class="numbers">

                                                <!--?php
                                                    $sql = "SELECT* FROM `users` where `owner_type` = 'T'";
                        
                                                    if ($result = mysqli_query($data, $sql)) {
                        
                                                    $rowcount = mysqli_num_rows( $result );

                                                    echo $rowcount;
                                                    }
                                                ?-->

                                            </div>
                                            <div class="cardName">Faculty</div>
                                        </div>

                                        <div class="iconBx">
                                            <i class="fa-solid fa-user icon-dash"></i>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div>
                                            <div class="numbers">

                                                <!--?php
                                                    $sql = "SELECT* FROM `notices`";
                        
                                                    if ($result = mysqli_query($data, $sql)) {
                        
                                                    $rowcount = mysqli_num_rows( $result );

                                                    echo $rowcount;
                                                }
                                                ?-->

                                            </div>
                                            <div class="cardName">Event</div>
                                        </div>

                                        <div class="iconBx">
                                            <i class="fa-regular fa-calendar-days icon-dash"></i>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div>
                                            <div class="numbers">

                                                <!--?php
                                                    $sql = "SELECT* FROM `sections`";
                        
                                                    if ($result = mysqli_query($data, $sql)) {
                        
                                                    $rowcount = mysqli_num_rows( $result );

                                                    echo $rowcount;
                                                    }
                                                ?-->

                                            </div>
                                            <div class="cardName">Class</div>
                                        </div>

                                        <div class="iconBx">
                                            <i class="fa-solid fa-book icon-dash"></i>
                                        </div>
                                    </div>
                                </div>

                <!-- ================ Order Details List ================= -->
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent Orders</h2>
                            <a href="#" class="btn">View All</a>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Price</td>
                                    <td>Payment</td>
                                    <td>Status</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>

                                <tr>
                                    <td>Dell Laptop</td>
                                    <td>$110</td>
                                    <td>Due</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>

                                <tr>
                                    <td>Apple Watch</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status return">Return</span></td>
                                </tr>

                                <tr>
                                    <td>Addidas Shoes</td>
                                    <td>$620</td>
                                    <td>Due</td>
                                    <td><span class="status inProgress">In Progress</span></td>
                                </tr>

                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>

                                <tr>
                                    <td>Dell Laptop</td>
                                    <td>$110</td>
                                    <td>Due</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>

                                <tr>
                                    <td>Apple Watch</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status return">Return</span></td>
                                </tr>

                                <tr>
                                    <td>Addidas Shoes</td>
                                    <td>$620</td>
                                    <td>Due</td>
                                    <td><span class="status inProgress">In Progress</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- ================= New Customers ================ -->
                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Curriculums</h2>
                        </div>

                        <table>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="/png/customer02.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br> <span>Italy</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="/png/customer01.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br> <span>India</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="/png/customer02.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br> <span>Italy</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="/png/customer01.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br> <span>India</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="/png/customer02.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br> <span>Italy</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="/png/customer01.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br> <span>India</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="/png/customer01.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br> <span>Italy</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="/png/customer02.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br> <span>India</span></h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- Right Side Of Navbar 
    <ul class="navbar-nav ms-auto">
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
    </ul>-->
    <main>
        <!--@yield('content')-->
    </main>
</body>
</html>
