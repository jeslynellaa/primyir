<?php

include('include/config.php');

if($data==false){
  die("connection error");
}

//index.php
$dbhost = "127.0.0.1";
$dbuser = "u245810598_primyiradmin";
$dbpass = "Primyirpass01";
$db = "u245810598_primyir";

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
  <div><img src="../png/'.$row["img"].'" title="<h3>'.$row["title"].'</h3>'.$row["small-content"].'"></div>
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
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"
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
                        <a href="general.html" class="button"><i class="fa-solid fa-bullhorn"></i></a>
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
                        <a href="map.html" class="button"><i class="fa-solid fa-map-pin"></i></a>
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
                        <a href="#" class="button"><i class="fa-regular fa-newspaper"></i></a>
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

                <?php 

                $dbhost = "127.0.0.1";
                $dbuser = "u245810598_primyiradmin";
                $dbpass = "Primyirpass01";
                $db = "u245810598_primyir";
                
                $con=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                
                  $id = $_GET["id"];
                  $read_news = "SELECT * FROM `articles` WHERE id = '$id' ";
                  $read_result = mysqli_query($con , $read_news);
                  if($read_news){
                    while( $row = mysqli_fetch_assoc($read_result) ){
                        $id = $row["id"];
                        $heading = $row["title"];
                        $img = $row["img"];
                        $description = $row["content"];
                        $category = $row["category"];
                        $time = $row["date_posted"];
                ?>

            <div class="news-cont">
                <div class="left-nc">
                    <div class="contentimg">
                        <img src="../png/<?php echo $img; ?>">
                    </div>
                    <div class="contenttext">
                        <div class="headercontent">
                            <i class="fa-solid fa-calendar-days acce"></i>
                            <h6>&nbsp;<?php echo $time; ?></h6>
                            <h6>&nbsp;&nbsp;&nbsp;&#x2022;&nbsp;&nbsp;&nbsp;</h6>
                            <h6><?php echo $category; ?></h6>
                        </div>
                        <h3><?php echo $heading; ?></h3>
                        <blockquote class="desc"><?php echo $description; ?></blockquote>
                    </div>
                    <div class="nxtprv">

                    <div class="leftnp">

                        <?php
                    
                        $dbhost = "127.0.0.1";
                        $dbuser = "u245810598_primyiradmin";
                        $dbpass = "Primyirpass01";
                        $db = "u245810598_primyir";
                        
                        $con=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                        $r = 0;
                        $s = mysqli_query($con, "SELECT *, DATE_FORMAT(date_posted, '%c/%e/%Y') AS date FROM `articles` 
                                                ORDER BY RAND() LIMIT 1;");
                        while($row = mysqli_fetch_array($s)){
                            echo 
                            '<a href="read-postt.php?id='.$row["id"].'" class="prvb">
                                <h5>Previous</h5>
                                <h3>'.$row["title"].'</h3>';
                            
                            if($r%1 == 0){
                                echo "</a>";
                            }
                            $r++;
                        }
                        ?>
                    </div>

                    <div class="rightnp">
                        <?php
                    
                        $dbhost = "127.0.0.1";
                        $dbuser = "u245810598_primyiradmin";
                        $dbpass = "Primyirpass01";
                        $db = "u245810598_primyir";
                        
                        $con=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                        $r = 0;
                        $s = mysqli_query($con, "SELECT *, DATE_FORMAT(date_posted, '%c/%e/%Y') AS date FROM `articles` 
                                                ORDER BY RAND() LIMIT 1;");
                        while($row = mysqli_fetch_array($s)){
                            echo 
                            '<a href="read-postt.php?id='.$row["id"].'" class="prvb">
                                <h5>Next</h5>
                                <h3>'.$row["title"].'</h3>';
                            
                            if($r%1 == 0){
                                echo "</a>";
                            }
                            $r++;
                        }
                        ?>
                    </div>

                    </div>
                </div>
                <?php
                    }
                  }
                  ?>
                <div class="right-nc">
                    <div class="right-latestpost">
                      <h3>Latest Post</h3>
                    </div>
                    <div class="side-post">


                    <?php
                    
                    $dbhost = "127.0.0.1";
                    $dbuser = "u245810598_primyiradmin";
                    $dbpass = "Primyirpass01";
                    $db = "u245810598_primyir";     
                    
                    $con=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                    $r = 0;
                    $s = mysqli_query($con, "SELECT *, DATE_FORMAT(date_posted, '%c/%e/%Y') AS date FROM `articles` 
                                            ORDER BY RAND() LIMIT 4;");
                    while($row = mysqli_fetch_array($s)){
                        echo 
                        '<a href="read-postt.php?id='.$row["id"].'" class="sidecolref">
                            <div class="sidecol">
                                <div class="sideimg-con">
                                    <img src="../png/'.$row["img"].'" class="imahe">
                                </div>
                                <div class="sideline">
                                    <h3 class="titulo">'.$row["title"].'</h3>
                                    <div class="sidecontent">
                                        <i class="fa-solid fa-calendar-days acce"></i>
                                        <h6>&nbsp;'.$row["date_posted"].'</h6>
                                        <h6>&nbsp;&nbsp;&nbsp;&#x2022;&nbsp;&nbsp;&nbsp;</h6>
                                        <h6>'.$row["category"].'</h6>
                                    </div>
                                </div>
                            </div>
                            ';
                        
                            if($r%1 == 0){
                                echo "</a>";
                            }
                            $r++;
                        }
                    ?>
                    
                    </div>

                    <div class="right-latestpost2">
                      <h3>&nbsp;</h3>
                    </div>

                    <div class="right-latestpost">
                        <h3>SNHS Through the Years</h3>
                    </div>
                    <div class="side-postt">
                        <iframe class="yt-frame" src="https://www.youtube.com/embed/uuwAv6nk7hw?rel=0&amp;fs=0&amp;showinfo=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    <div class="right-latestpost2">
                      <h3>&nbsp;</h3>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/header-carousel.js"></script>

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