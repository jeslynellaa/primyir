@extends('layouts.faculty-app')

@section('content')
<?php

//index.php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";
$db = "eskwelahan2";

$connect=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
function make_query($connect)
{
 $query = "SELECT * FROM `notices` ORDER BY RAND() LIMIT 5";
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
  <div><img src="/png/'.$row["img"].'" title="<h3>'.$row["title"].'</h3>'.$row["small-content"].'"></div>
</div>
  ';
  $count = $count + 1;
 }
 return $output;
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <!-- ======= Styles ======-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- ======================= Main Content ================== -->
    <!-- ======================= Header ================== -->

    <div class="bxslider">
    </div>

    <!-- ======================= News Proper ================== -->
    <div class="header-text">
        <h4>THERE IS A LOT GOING ON AT SNHS</h4>
        <h2 data-text="Latest&nbsp;News&nbsp;&&nbsp;Events">Latest&nbsp;News&nbsp;&&nbsp;Events</h2>
    </div>

    <div class="news-container">
        <table style="border = 0; cellpadding=10; cellspacing=5; align=center">
            <?php
            
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "123456";
                $db = "eskwelahan2";
                
                $con=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                $r = 0;
                $s = mysqli_query($con, "SELECT *, DATE_FORMAT(date_posted, '%M %e %Y') AS date FROM `notices` 
                                ORDER BY `date_posted` DESC LIMIT 6;");
                while($row = mysqli_fetch_array($s)){

                    $id = $row["id"];
                    $heading = $row["title"];
                    $img = $row["img"];
                    $description = $row["content"];
                    $category = $row["category"];
                    $time = $row["date_posted"];

                    if($r%3 == 0){
                        echo "<tr>";
                    }
                    echo 
                    '<td>
                    <div class="news-card">
                        <img src="/png/'.$row["img"].'">       
                        <div class="news-info">
                            <div class = "news-tag">
                                <a href="category.php?category='.$row["category"].'" class="categpage">'.$row["category"].'</a>
                                <h6>'.$row["date"].'</h6>
                            </div>
                            <h3>'.$row["title"].'</h3>
                            <a href="read-post.php?id='.$row["id"].'" class="hey">READ MORE</a>
                        </div>
                    </div></td>';
                    
                    if($r%3 == 3){
                        echo "</tr>";
                    }
                    $r++;
                }
            ?>
        </table>
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
                    $db = "eskwelahan2";
                    
                    $con=mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                    $r = 0;
                    $s = mysqli_query($con, "SELECT *, DATE_FORMAT(date_posted, '%c/%e/%Y') AS date FROM `notices` 
                                            ORDER BY RAND() LIMIT 8;");
                    while($row = mysqli_fetch_array($s)){
                        echo 
                        '<a href="read-post.php?id='.$row["id"].'" class="carddd swiper-slide">
                            <div class="card-content">
                                <h1 class="titlee">'.$row["title"].'</h1>
                                <div class="accessories">
                                    <i class="fa-solid fa-calendar-days acce"></i>
                                    <h4>&nbsp;'.$row["date"].'</h4>
                                    <p>&nbsp;&nbsp;&nbsp;&#x2022;&nbsp;&nbsp;&nbsp;</p>
                                    <h4>'.$row["category"].'</h4>
                                </div>
                                <p class="description">'.$row["small-content"].'</p>
                            </div>

                            <div class="image-content">
                                <div class="card-image">
                                    <img src="/png/'.$row["img"].'" alt="" class="card-img">
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

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/header-carousel.js"></script>

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
    <script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/scriptswipe.js') }}" defer></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection