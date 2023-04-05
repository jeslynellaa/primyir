<?php

include('include/config.php');

//index.php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";
$db = "primyir";

$connect=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
function make_query($connect)
{
 $query = "SELECT * FROM `articles` ORDER BY RAND() LIMIT 5";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= 
  '
  <div><img src="../png/'.$row["img"].'" title="<h3>'.$row["title"].'</h3>'.$row["smallcnt"].'"></div>
</div>
  ';
  $count = $count + 1;
 }
 return $output;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c7e61bc11e.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Latest compiled and minified Bootstrap CSS -->
 
  
    <title>Primyir Online Portal</title>
    <!-- ======= add icon link ====== -->

    <link rel = "icon" href = "assets/imgs/SNHS.png" type = "image/x-icon">
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/styleee.css">
</head>

<body>
    
    <!-- =============== Loading ================ -->
    <div id="preloader"></div>
    
            <section class="menu menu--circle">
            <input type="checkbox" id="menu__active"/>
            <label for="menu__active" class="menu__active">
              <div class="menu__toggle">
                <div class="icon">
                  <div class="hamburger"></div>
                </div>
              </div>
              <input type="radio" name="arrow--up" id="degree--up-0"/>
              <input type="radio" name="arrow--up" id="degree--up-1" />
              <input type="radio" name="arrow--up" id="degree--up-2" />
              <div class="menu__listings">
                <ul class="circle">
                  <li>
                    <div class="placeholder">
                      <div class="upside">
                        <a href="menu.php" class="button"><i class="fa-solid fa-list"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="placeholder">
                      <div class="upside">
                        <a href="general.php" class="button"><i class="fa-solid fa-bullhorn"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="placeholder">
                      <div class="upside">
                        <a href="snhs.php" class="button"><i class="fa-solid fa-circle-info"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="placeholder">
                      <div class="upside">
                        <a href="map.php" class="button"><i class="fa-solid fa-map-pin"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="placeholder">
                      <div class="upside">
                        <a href="login.php" class="button"><i class="fa-solid fa-graduation-cap"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="placeholder">
                      <div class="upside">
                        <a href="bulletin.php" class="button"><i class="fa-solid fa-bell"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="placeholder">
                      <div class="upside">
                        <a href="articles.php" class="button"><i class="fa-regular fa-newspaper"></i></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="menu__arrow menu__arrow--top">
                <ul>
                  <li>
                    <label for="degree--up-0"><div class="arrow"></div></label>
                    <label for="degree--up-1"><div class="arrow"></div></label>
                    <label for="degree--up-2"><div class="arrow"></div></label>
                  </li>
                </ul>
              </div>
            </label>
          </section>
                <!-- ======================= Main Content ================== -->
                <!-- ======================= Header ================== -->
                <script>
                    $(function(){
                    $('.bxslider').bxSlider({
                        pager: false,
                        mode: 'fade',
                        auto: true,
                        captions: true,
                        slideMargin: 0,
                        captions: true,
                        responsive: true,
                        useCSS: true,
                        touchEnabled: true,
                        });
                    });
                </script>

                <div class="bxslider">
                    <?php echo make_slides($connect); ?>
                </div>

            <!-- ======================= News Proper ================== -->
            <div class="header-text">
                <h4>THERE IS A LOT GOING ON AT SNHS</h4>
                <h2 data-text="Latest&nbsp;News&nbsp;&&nbsp;Events">Latest&nbsp;News&nbsp;&&nbsp;Events</h2>
            </div>

            <div class="news-container">

            <?php
                    
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";
$db = "primyir";
                    
                    $con=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                    $r = 0;
                    $s = mysqli_query($con, "SELECT *, DATE_FORMAT(date_posted, '%M %e %Y') AS date FROM `articles` 
                                    ORDER BY `date_posted` DESC LIMIT 6;");
                                        while($row = mysqli_fetch_array($s)){

                                          $id = $row["id"];
                                          $heading = $row["title"];
                                          $img = $row["thumbnail"];
                                          $description = $row["content"];
                                          $category = $row["category"];
                                          $time = $row["date_posted"];
                                          $smalldescription = $row["smallcnt"];

                                          echo 
                                          '<div class="news-card">
                                          <img src="../png/'.$row["img"].'">     
                                            <div class="news-info">
                                              <div class = "news-tag">
                                              <a href="category.php?category='.$row["category"].'" class="categpage">'.$row["category"].'</a>
                                              <h6>'.$row["date"].'</h6>
                                              </div>
                                              <h3>'.$row["title"].'</h3>
                                              <a href="read-postt.php?id='.$row["id"].'" class="hey">READ MORE</a>
                                          </div> 
                                              ';
                                          
                                              if($r%1 == 0){
                                                  echo "</div>";
                                              }
                                              $r++;
                                          }
              ?>

            </div>
            
                    <div class="header-textt">
                        <h4>Keep up with what's happening and learn the facts, ka-Primyir.</h4>
                        <h2 data-text="Other&nbsp;Reports">Other&nbsp;Reports</h2>
                    </div>

                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">

                            <?php
                    
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";
$db = "primyir";
                        
                        $con=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                        $r = 0;
                        $s = mysqli_query($con, "SELECT *, DATE_FORMAT(date_posted, '%c/%e/%Y') AS date FROM `articles` 
                                                ORDER BY RAND() LIMIT 8;");
                        while($row = mysqli_fetch_array($s)){
                            echo 
                            '<a href="read-postt.php?id='.$row["id"].'" class="carddd swiper-slide">
                            <div class="card-content">
                                <h1 class="titlee">'.$row["title"].'</h1>
                                <div class="accessories">
                                    <i class="fa-solid fa-calendar-days acce"></i>
                                    <h4>&nbsp;'.$row["date"].'</h4>
                                    <p>&nbsp;&nbsp;&nbsp;&#x2022;&nbsp;&nbsp;&nbsp;</p>
                                    <h4>'.$row["category"].'</h4>
                                </div>
                                <p class="description">'.$row["smallcnt"].'</p>
                            </div>

                            <div class="image-content">
                                <div class="card-image">
                                    <img src="../png/'.$row["img"].'" alt="" class="card-img">
                                </div>
                            </div>';
                            
                            if($r%1 == 0){
                                echo "</a>";
                            }
                            $r++;
                        }
                        ?>
                            </div>

                        </div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                    </div>

    </div>
</div>

    <!-- =========== Scripts =========  -->
    <script src="js/main.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/header-carousel.js"></script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMn(){
            subMenu.classList.toggle("open-menu")
        }
    </script>

    <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function(){
        loader.style.display = "none";
      })
    </script>

<script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/scriptswipe.js"></script>


    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>