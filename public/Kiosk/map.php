<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!-- Place your kit's code here -->
            <script src="https://kit.fontawesome.com/de2ccfef00.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="css/map.css">
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

  <body oncontextmenu="return false">
    <script>
    document.oncontextmenu = function() {
    return false;
    }
    </script>

        <div class="bg">
            <img src="img/floormap.png">
        </div>

        <div class="menuuu">
            <div class="toggle"><i class="fa-solid fa-layer-group"></i></div>
            <li style="--i:0;">
                <a href="#" class="b1" onClick="myFunction()">1<i class="fa-solid fa-stairs"></i></a>
            </li>

            <li style="--i:1;">
                <a href="#" class="b2" onClick="myFunction2()">2<i class="fa-solid fa-stairs"></i></a>
            </li>

            <li style="--i:2;">
                <a href="#" class="b3" onClick="myFunction3()">3<i class="fa-solid fa-stairs"></i></a>
            </li>

            <li style="--i:3;">
                <a href="#" class="b4" onClick="myFunction4()">4<i class="fa-solid fa-stairs"></i></a>
            </li>

            <li style="--i:4;">
                <a href="#"class="b5" onClick="myFunction5()"><i class="fa-solid fa-triangle-exclamation"></i></a>
            </li>
        </div>

        <div class="content">
            <div id="first">
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

                          $sql = "SELECT id, floor, `img` FROM `map` WHERE id='1'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<img src="img/'.$row["img"].'"/>';

                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
              </div>
            <div id="second">
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

                          $sql = "SELECT id, floor, `img` FROM `map` WHERE id='2'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<img src="img/'.$row["img"].'"/>';

                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
            </div>
            <div id="third">
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

                          $sql = "SELECT id, floor, `img` FROM `map` WHERE id='3'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<img src="img/'.$row["img"].'"/>';

                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>   
          </div>
            <div id="fourth">
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

                          $sql = "SELECT id, floor, `img` FROM `map` WHERE id='4'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<img src="img/'.$row["img"].'"/>';

                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
          </div>
            <div id="fifth">
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

                          $sql = "SELECT id, floor, `img` FROM `map` WHERE id='5'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<img src="img/'.$row["img"].'"/>';

                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>
          </div>
        </div>

        <div class="containerr">
            <div class="transition">
              <div class="cover cover1"></div>
              <div class="cover cover2"></div>
              <div class="cover cover3"></div>
            </div>
        </div>

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
                      <a href="snhs.php" class="button"><i class="fa-solid fa-bullhorn"></i></a>
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
        
        <style>
                  .arrow {
    border-right: 6.666666666666667px solid #01380a;
    border-top: 6.666666666666667px solid #01380a;
      }
      
      html, body{
        max-width: 100%;
        overflow-x: hidden;
        overflow-y: hidden;
      }
      
      .content{
    margin-top: 0%;
    }
    
    @media only screen and (max-width: 1280px) {
        .content{
            margin-top: 7%;
        }
    }
    
    @media only screen and (max-width: 1100px) {
        .content{
            margin-top: 10%;
        }
    }
    
    @media only screen and (max-width: 1000px) {
        .content{
            margin-top: 0%;
        }
        
        .menuuu{
            margin-top: 45vh;
            margin-left: 65vw;
        }
    }
        </style>

    </body>

    <script src="js/loader.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        ScrollReveal({
            reset: true,
        });

        ScrollReveal().reveal('.content, #first', { delay: 500, origin: 'top', distance: '60px', duration: 2500});
        </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
    const myFunction = () => {
        document.getElementById("first").style.display ='block';
        document.getElementById("second").style.display ='none'
        document.getElementById("third").style.display ='none'
        document.getElementById("fourth").style.display ='none'
        document.getElementById("fifth").style.display ='none'
      }
      
      const myFunction2 = () => {
        document.getElementById("second").style.display ='block'
        document.getElementById("first").style.display ='none'
        document.getElementById("third").style.display ='none'
        document.getElementById("fourth").style.display ='none'
        document.getElementById("fifth").style.display ='none'
      }
      
      const myFunction3 = () => {
        document.getElementById("third").style.display ='block'
        document.getElementById("first").style.display ='none'
        document.getElementById("second").style.display ='none'
        document.getElementById("fourth").style.display ='none'
        document.getElementById("fifth").style.display ='none'
      }

      const myFunction4 = () => {
        document.getElementById("fourth").style.display ='block'
        document.getElementById("first").style.display ='none'
        document.getElementById("third").style.display ='none'
        document.getElementById("second").style.display ='none'
        document.getElementById("fifth").style.display ='none'
      }
      
      const myFunction5 = () => {
        document.getElementById("fifth").style.display ='block'
        document.getElementById("first").style.display ='none'
        document.getElementById("second").style.display ='none'
        document.getElementById("fourth").style.display ='none'
        document.getElementById("third").style.display ='none'
      }
    </script>

    <script>
        let toggle = document.querySelector('.toggle');
        let menu = document.querySelector('.menuuu');
        toggle.onclick = function(){
            menu.classList.toggle('active')
        }
    </script>

    </html>