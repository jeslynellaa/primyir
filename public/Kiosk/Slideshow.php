<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/9ee7358d14.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/Slideshow.css">
        <title>Primyir Kiosk</title>
        <!-- add icon link -->
        <link rel = "icon" href = 
        "img/SNHS.png" 
            type = "image/x-icon">
    </head>

<body>
    
        <!-- =============== Loading ================ -->
    <div id="preloader"></div>
    <script src="js/loader.js"></script>
    
    
    <div class="start">
        <a href="menu.php" class="link"><img src="img/Start.png" alt=""></a>
    </div>
    <div class="container">
        <div class="transition">
          <div class="cover cover1"></div>
          <div class="cover cover2"></div>
          <div class="cover cover3"></div>
        </div>
      </div>
    <div class="slider">
        <figure>
            <div class="slide">
                <img src="img/Slider1.png" alt="">
            </div>

            <div class="slide">
                <img src="img/Slider2.png" alt="">
            </div>

            <div class="slide">
                <img src="img/Slider3.png" alt="">
            </div>

            <div class="slide">
                <img src="img/Slider4.png" alt="">
            </div>

            <div class="slide">
                <img src="img/Slider5.png" alt="">
            </div>

        </figure>
    </div>
    <body oncontextmenu="return false">
        <script>
        document.oncontextmenu = function() {
        return false;
        }
        </script>

</body>

<script src="js/transition.js"></script>
