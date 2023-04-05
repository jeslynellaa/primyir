<?php


//index.php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";
$db = "primyir";

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
  <div><img src="../assets/imgs/'.$row["img"].'" title="<h3>'.$row["title"].'</h3>'.$row["small-content"].'"></div>
</div>
  ';
  $count = $count + 1;
 }
 return $output;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!-- Place your kit's code here -->
            <script src="https://kit.fontawesome.com/c7e61bc11e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="css/snhs.css">
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
  
  <script>

    <body oncontextmenu="return false">
      <script>
      document.oncontextmenu = function() {
      return false;
      }
      </script>

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


        <section id="section1">
            <div class="toppic">
                <img src="img/toppic.png">
            </div>

            <div class="toppic2">
                <img src="img/toppic2.png">
            </div>


            <div class="toptext">
                <h5>continues to shine… Amidst the challenges of times</h5>

                <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT `name`, details FROM `info`";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h3> " . $row["name"]. "</h3>";
                              echo " <p> " . $row["details"]. "</p>";
                            }
                          } else {
                            echo "0 results";
                          }
                          $conn->close();
                        ?>
                <a href="#section2" class="btnexplr"><button>explore</button></a>
            </div>

        
        </section>

        <section id="section2">
            <div class="dividee">
                <div class="leftdiv">
                    <div class="sides2">
                        <img src="img/sides2.png">
                    </div>
                </div>

                <div class="rightdiv">
                    <div class="imgcon">
                        <img src="img/texture.png">
                    </div>


                    <div class="conheader">
                        <h3 class="headtitle">Be future-ready. Be ka-Primyir.</h3>
                    </div>

                    <div class="content1" id="con1">
                        <div class="cont">
                            <img src="img/education0.png">
                        </div>
                        <div class="contt">

                        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `description` WHERE id='1'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h3> " . $row["title"]. "</h3>";
                              echo " <h5> " . $row["description"]. "</h5>";
                            }
                          } else {
                            echo "0 results";
                          }
                          $conn->close();
                        ?>
                        </div>
                    </div>

                    <div class="content1" id="con2">
                        <div class="cont1">
                            <img src="img/education3.png">
                        </div>
                        <div class="contt">
                        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `description` WHERE id='2'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h3> " . $row["title"]. "</h3>";
                              echo " <h5> " . $row["description"]. "</h5>";
                            }
                          } else {
                            echo "0 results";
                          }
                          $conn->close();
                        ?>
                        </div>
                    </div>

                    <div class="content1" id="con3">
                        <div class="cont2">
                            <img src="img/education2.png">
                        </div>
                        <div class="contt">
                        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `description` WHERE id='3'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h3> " . $row["title"]. "</h3>";
                              echo " <h5> " . $row["description"]. "</h5>";
                            }
                          } else {
                            echo "0 results";
                          }
                          $conn->close();
                        ?>
                        </div>
                    </div>

                    <div class="content1" id="con4">
                        <div class="cont3">
                            <img src="img/education1.png">
                        </div>
                        <div class="contt">
                        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `description` WHERE id='4'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h3> " . $row["title"]. "</h3>";
                              echo " <h5> " . $row["description"]. "</h5>";
                            }
                          } else {
                            echo "<h3>0 results</h3>";
                          }
                          $conn->close();
                        ?>
                        </div>
                    </div>

                </div>
            </div>

            <a class="button-down" href="#section3">
                <img src="img/downbtnn.png">
            </a>
        </section>


        <section id="section3">
            <div class="bgulit">
                <img src="img/bgagain.png">
            </div>
            <br>
	<div class="process-wrapper">
		<div id="progress-bar-container">
			<ul>
				<li class="step step01 active"><div class="step-inner">Foundation</div></li>
				<li class="step step02"><div class="step-inner">RESPONSIVE PART</div></li>
				<li class="step step03"><div class="step-inner">Creative cREATIONS</div></li>
				<li class="step step04"><div class="step-inner">TESTIMONIALS PART</div></li>
				<li class="step step05"><div class="step-inner">OUR LOCATIONS</div></li>
			</ul>
				
				<div id="line">
					<div id="line-progress"></div>
				</div>
		</div>

			<div id="progress-content-section">
				<div class="section-content discovery active">

        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `history` WHERE id='1'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h2> " . $row["title"]. "</h2>";
                              echo " <p> " . $row["description"]. "</p>";
                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
        </div>
				
				<div class="section-content strategy">
        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `history` WHERE id='2'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h2> " . $row["title"]. "</h2>";
                              echo " <p> " . $row["description"]. "</p>";
                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
				</div>
				
				<div class="section-content creative">
        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `history` WHERE id='3'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h2> " . $row["title"]. "</h2>";
                              echo " <p> " . $row["description"]. "</p>";
                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
        </div>
				
				<div class="section-content production">
        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `history` WHERE id='4'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h2> " . $row["title"]. "</h2>";
                              echo " <p> " . $row["description"]. "</p>";
                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
        </div>
				
				<div class="section-content analysis">
        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "123456";
                          $dbname = "primyir";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT id, title, `description` FROM `history` WHERE id='5'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo " <h2> " . $row["title"]. "</h2>";
                              echo " <p> " . $row["description"]. "</p>";
                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
        </div>
			</div>
	</div>

    <a class="button-downn" href="#section5">
                <img src="img/downbtnn.png">
            </a>

        </section>

     <section id="section5">

        <div class="bg5">
            <img src="img/bg5.png">
        </div>

        <div class="divide5">
            <div class="leftdiv5">
                <h3>Looking back, SNHS had its own share of crises; it has survived the Second World War, two super typhoons, two people power revolutions, an earthquake of high intensity that almost rocked its very foundation.</h3>
            </div>

            <div class="rightdiv5">
                <br><br>
                <div class="texts5">
                    <h5>SNHS THROUGH THE YEARS</h5>
                    <p>tap to flip</p>
                </div>
                <br>
                <div class="sepate5">
                    <div class="tile">
                        <div class="tile__face tile__face--front">
                          <img src="img/1950s-SNHS.png">
                        </div>
                        <div class="tile__face tile__face--back">
                            <div class="cont-tile">
                            <h5>1950s</h5><br>
                            <p>The reconstructed building was named Sorsogon Provincial High School.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tilee">
                        <div class="tilee__face tilee__face--front">
                          <img src="img/2010s-SNHS-beforefire.png">
                        </div>
                        <div class="tilee__face tilee__face--back">
                            <div class="cont-tile">
                            <h5>2010s</h5><br>
                            <p>A fleeting view of the Sorsogon National High School before it was completely engulfed in flames.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sepate5">

                    <div class="tileee">
                        <div class="tileee__face tileee__face--front">
                          <img src="img/2010s-SNHS-afterfire.png">
                        </div>
                        <div class="tileee__face tileee__face--back">
                        <div class="cont-tile">
                          <h5>2010s</h5><br>
                          <p>The state of the Sorsogon National High School Main Building after it had been consumed by the fire.</p>
                          </div>
                        </div>
                    </div>

                    <div class="tileeee">
                        <div class="tileeee__face tileeee__face--front">
                          <img src="img/2010s-SNHS-present.png">
                        </div>
                        <div class="tileeee__face tileeee__face--back">
                            <div class="cont-tile">
                            <h5>Present</h5><br>
                            <p>The newly refurbished Main Building of SNHS, which was inaugurated on June 5th, 2016.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
         </div>

         <a class="button-downnn" href="#section4">
                <img src="img/downbtnn.png">
            </a>
         
     </section>

        <section id="section4">
            <div class = "bgs3">
                <img src="img/bg-sec3.png">
            </div>

            <div class="whites3">

                <div class="s3-header">
                    <div class="s3h">
                        <i class="fa-solid fa-chalkboard s3hicon"></i>
                        <h3>SNHS Executives</h3>
                    </div>
                    <h5 class="txth">The principals of the Sorsogon National High School whose leadership helped in the development of the school:</h5>
                </div>
                
                    <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">

                                <?php
                            
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "123456";
                                  $dbname = "primyir";
                                    
                                    $con=mysqli_connect($servername, $username, $password, $dbname);
                                    $r = 0;
                                    $s = mysqli_query($con, "SELECT *FROM `principal` ORDER BY id DESC;");
                                    while($row = mysqli_fetch_array($s)){
                                        echo 
                                        '<div class="carddd swiper-slide">
                                        <div class="image-content">
                                            <div class="card-image">
                                                <img src="img/'.$row["img"].'" alt="" class="card-img">
                                            </div>
                                        </div>
                                        
                                        <div class="card-content">
                                            <h1 class="titlee">'.$row["name"].'</h1>
                                            <p class="description">'.$row["serviceyr"].'</p>
                                        </div>';
                                        
                                        if($r%1 == 0){
                                            echo "</div>";
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
            
                     <a class="button-downnnn" href="#section6">
                <img src="img/downbtnn.png">
            </a>
            
            <style>
                .button-downnnn{
    margin-top: 42%;
    margin-left: 95%;
    position: absolute;
    width: 50px;
    height: 50px;
    z-index: 10;
}

.button-down img,.button-downn img,.button-downnn img{
    opacity: 1;
}

.button-downnnn img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    z-index: 10;
    
            </style>
       
        </section>

        <section id="section6">

<div class = "bgs4">
  <img src="img/sec6.png">
</div>

<div class="hati">

<div class="hatileft">
  <div id="big-image">
    <img src="img/snhste1.png" id="myDiv" onclick="myFunction()">
    <img src="img/snhspa1.png" id="myDivv" onclick="myFunctionn()">
    <img src="img/snhspj1.png" id="myDivvv" onclick="myFunctionnn()">
  </div>
</div>

<div class="hatiright">
  <div class="small-images">
    <img src="img/snhste.png">
    <img src="img/snhsspa.png">
    <img src="img/snhsspj.png">
  </div>
</div>

</div>

                     <a class="button-up" href="#section1">
                <img src="img/upbtn.png">
            </a>
            
            <style>
                .button-up{
    margin-top: 42%;
    margin-left: 95%;
    position: absolute;
    width: 50px;
    height: 50px;
    z-index: 10;
}


.button-up img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    z-index: 10;
    
            </style>

</section>

<style>
      .arrow {
    border-right: 6.666666666666667px solid #01380a;
    border-top: 6.666666666666667px solid #01380a;
      }
      
      html, body{
        max-width: 100%;
        overflow-x: hidden;
      }
      
      #progress-bar-container {
	width:90vw;
	height:100px;
}

      .process-wrapper {
    margin-top: -1%;
    margin-left: 5%;
}

#progress-content-section {
	width:90vw;
	margin-top:-3%;
}
      
      @media only screen and (max-width: 1300px) {
        html, body{
        max-width: 100%;
        overflow-x: hidden;
      }
      
      .toptext h3{
    font-weight: 600;
    font-size: 700%;
}

.toppic2 img{
    margin-left:-5%;
}

.toptext p{
    width:90%;
}

.toptext{
    margin-top: 23%;
    margin-left:5%;
}

.conheader .headtitle{
    font-size: 5.2vh;

}
}

      @media only screen and (max-width: 1100px) {
        html, body{
        max-width: 100%;
        overflow-x: hidden;
      }
      
      .toptext h3{
    font-weight: 600;
    font-size: 450%;
}

.toppic2 img{
    position:absolute;
    margin-left:-25%;
    width:120%;
}

.toptext p{
    width:70%;
}

.toptext{
    margin-top: 30%;
    margin-left:5%;
}

.conheader .headtitle{
    font-size: 5.2vh;
}

.toptext button{
    margin-left: 10%;
}

      @media only screen and (max-width: 1000px) {
        html, body{
        max-width: 100%;
        overflow-x: hidden;
      }
      
      .toptext h3{
    font-weight: 600;
    font-size: 550%;
}

.toppic2 img{
    position:absolute;
    margin-left:5%;
    margin-top:1%;
    width:95%;
    height:95%;
}

.toptext p{
    width:95%;
    font-size: 65%;
}

.toptext{
    margin-top: 15%;
    margin-left:5%;
}

.conheader .headtitle{
    font-size: 5.2vh;
}

.toptext button{
    margin-left: 20%;
}

.content1 .cont, .content1 .cont1, .content1 .cont2, .content1 .cont3{
    width: 50px;
    height: 50px;
}

.content1 .cont img, .content1 .cont1 img, .content1 .cont2 img, .content1 .cont3 img{
    width: 80%;
    height: 80%;
}

.content1 .contt h3{
    font-size: 100%;
}

.content1 .contt h5{
    font-size: 55%;
}

.process-wrapper {
    margin-top: -5%;
    margin-left: 0;
}

#progress-bar-container {
	width:80vw;
	height:100px;
}

#progress-bar-container li {
	font-size:7px;
}

#progress-bar-container li .step-inner {
    font-size: 12px;
}

#progress-content-section {
	width:80vw;
	margin-top:-3%;
}

#progress-content-section .section-content h2 {
	font-size:10px;
}

#progress-content-section .section-content p {
	font-size:6px;
}

  .cont-tile h5{
    font-size: 80%;
  }
  
    .cont-tile p{
    font-size: 50%;
    margin-top:-10%;
  }
  
  .tile, .tilee, .tileee, .tileeee {
    width: 30vw;
    height: 25vh;
      
  }
  
    .carddd{
    width: 100%;
    height: 5%;
    margin-top: -3.5%;
  }
  
    .card-content{
    padding: 15px;
  }
  
    .titlee{
    font-size: 2.5vh;
  }
  
  .description{
    font-size: 2vh;
  }
  
  .s3-header .s3h h3, .s3-header .s3hicon{
    font-size: 1.5em;
}

.s3-header .txth{
    font-size: 0.8em;
}


}
</style>

    </body>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/scriptt.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({
            reset: true,
        });
        
        ScrollReveal().reveal('.toppic2 img', { delay: 500, origin: 'top', distance: '60px', duration: 2500});
        ScrollReveal().reveal('.toptext h5, .toptext p', { delay: 500, origin: 'right', distance: '60px', duration: 2500});
        ScrollReveal().reveal('.toptext h3', { delay: 500, origin: 'left', distance: '60px', duration: 2500});
        ScrollReveal().reveal('.toptext button', { delay: 1000, origin: 'bottom', distance: '60px', duration: 2500, interval: 200});
        ScrollReveal().reveal('.headtitle', { delay: 500, origin: 'left', distance: '60px', duration: 2500});
        ScrollReveal().reveal('.content1 .cont, .content1 .cont1, .content1 .cont2, .content1 .cont3, .content1 .cont img, .content1 .contt h3, .content1 .contt h5', { delay: 500, origin: 'top', duration: 1500, interval: 100,});
        ScrollReveal().reveal('.process-wrapper', { delay: 500, origin: 'bottom', distance: '60px', duration: 2500});
        ScrollReveal().reveal('.progress-content-section', { delay: 500, origin: 'top', distance: '60px', duration: 2500});
        ScrollReveal().reveal('.whites3', { delay: 500, origin: 'bottom', distance: '60px', duration: 2500});
        ScrollReveal().reveal('.s3-header, .slide-container', { delay: 1000, origin: 'bottom', distance: '60px', duration: 2500, interval: 200});
        ScrollReveal().reveal('.swiper-button-prev, .swiper-button-next', { delay: 2000, origin: 'bottom', distance: '60px', duration: 2500, interval: 200});
        ScrollReveal().reveal('.texts5', { delay: 1000, origin: 'left', distance: '60px', duration: 2500, interval: 200});
        ScrollReveal().reveal('.sepate5', { delay: 3000, origin: 'bottom', distance: '60px', duration: 2500, interval: 300});
   
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script>
    
            $(".step").click( function() {
            $(this).addClass("active").prevAll().addClass("active");
            $(this).nextAll().removeClass("active");
        });

        $(".step01").click( function() {
            $("#line-progress").css("width", "3%");
            $(".discovery").addClass("active").siblings().removeClass("active");
        });

        $(".step02").click( function() {
            $("#line-progress").css("width", "25%");
            $(".strategy").addClass("active").siblings().removeClass("active");
        });

        $(".step03").click( function() {
            $("#line-progress").css("width", "50%");
            $(".creative").addClass("active").siblings().removeClass("active");
        });

        $(".step04").click( function() {
            $("#line-progress").css("width", "75%");
            $(".production").addClass("active").siblings().removeClass("active");
        });

        $(".step05").click( function() {
            $("#line-progress").css("width", "100%");
            $(".analysis").addClass("active").siblings().removeClass("active");
        });

 
    </script>

    <script>
        const tile = document.querySelector(".tile");

        tile.addEventListener("click", function () {
        tile.classList.toggle("is-flipped");
        });
    </script>

<script>
    const tilee = document.querySelector(".tilee");

    tilee.addEventListener("click", function () {
    tilee.classList.toggle("is-flipped");
    });
</script>

<script>
    const tileee = document.querySelector(".tileee");

    tileee.addEventListener("click", function () {
    tileee.classList.toggle("is-flipped");
    });
</script>

<script>
    const tileeee = document.querySelector(".tileeee");

    tileeee.addEventListener("click", function () {
    tileeee.classList.toggle("is-flipped");
    });
</script>

<script>
  
  $(function(){
    $("#big-image img:eq(0)").nextAll().hide();
    $(".small-images img").click(function(e){
        var index = $(this).index();
        $("#big-image img").eq(index).show().siblings().hide();
    });
});

function myFunction() {
  document.getElementById("myDiv").style.marginLeft = "50px";
  document.getElementById("myDivv").style.marginLeft = "0px";
  document.getElementById("myDivv").style.marginLeft = "0px";
}

function myFunctionn() {
  document.getElementById("myDiv").style.marginLeft = "0px";
  document.getElementById("myDivv").style.marginLeft = "50px";
  document.getElementById("myDivv").style.marginLeft = "0px";
}

function myFunctionnn() {
  document.getElementById("myDiv").style.marginLeft = "0px";
  document.getElementById("myDivv").style.marginLeft = "0px";
  document.getElementById("myDivv").style.marginLeft = "50px";
}
</script>

</html>