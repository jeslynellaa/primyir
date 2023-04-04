<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!-- Place your kit's code here -->
            <script src="https://kit.fontawesome.com/c7e61bc11e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/general.css">
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
          <div class="cont">

            <div class="scene scene--cardd">
              <div class="cardd">
                <div class="cardd__face cardd__face--front"><img src="img/gen0.png"></div>
                <div class="cardd__face cardd__face--back"><img src="img/gen1.png"></div>
              </div>
            </div>


            <div class="collapsible">
              <input type="checkbox" id="collapsible-head">
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

                          $sql = "SELECT id, title, `details` FROM `general` WHERE id='1mandate'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo'
                              <label for="collapsible-head"><i class="fa-solid fa-bullseye"></i>&nbsp; '. $row["title"].'</label>
                            <div class="collapsible-text">';
                              echo " <h2> " . $row["title"]. "</h2>";
                              echo " <p> " . $row["details"]. "";
                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>

              </div>
          </div>
      </div>

      <body oncontextmenu="return false">
      <script>
      document.oncontextmenu = function() {
      return false;
      }
      </script>

          </div>
          <div class="container">
            <div class="arrow arrow-left"><i class="fas fa-chevron-circle-left"></i></div>
            <img src="img/gen5.png" alt="">
            <img src="img/gen3.png" alt="">
            <img src="img/gen4.png" alt="">
            <div class="arrow arrow-right"><i class="fas fa-chevron-circle-right"></i>
            </div>
            <div class="dots">
              <div class="dot">
                <i class="far fa-dot-circle"></i>
              </div>
              <div class="dot">
                <i class="far fa-circle"></i>
              </div>
              <div class="dot">
                <i class="far fa-circle"></i>
              </div>
            </div>
        </div>

        <div class="spring">
          <img src="img/spring.png">
        </div>
        
        <a class="button-down" href="#section2">
                <img src="img/downbtnn.png">
            </a>
            
        <style>
            .button-down{
                margin-top: -7%;
                margin-left: 95%;
                position: absolute;
                width: 50px;
                height: 50px;
                z-index: 10;
            }
            
            .button-down img{
                object-fit: cover;
                width: 100%;
                height: 100%;
                z-index: 10;
                transition: 0.2s ease-in-out;
            }
            
            .button-down:hover{
                margin-top: -6%;
            }
        </style>

        </section>

        <section id="section2">
          <div class="gbg2">
            <img src="img/gbg2.png">
          </div>
            <div class="hati">
                <div class="hatil">

                    <div class="wrapperr">
                        <div class="collapsiblee">
                            <input type="checkbox" id="collapsible-headd">
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

                          $sql = "SELECT id, title, `details` FROM `general` WHERE id='2vision'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo'
                              <label for="collapsible-headd"><i class="fa-solid fa-bullseye"></i>&nbsp; '. $row["title"].'</label>
                            <div class="collapsible-textt">';
                              echo " <h2> " . $row["title"]. "</h2>";
                              echo " <p> " . $row["details"]. "";
                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>

            
                            </div>
                        </div>
                    </div>

                </div>

                <div class="hatir">
                    <p class="item-1"><b>“We dream of Filipinos who passionately love their country …”</b><br>
                        
                        <i>Our vision is more than just the end-goal of a plan. It is a dream, a wish, a prayer – what we fervently hope for and what we diligently work towards. By envisioning, we begin to fulfill our mandate and responsibilities as a teacher and do our duty as Filipinos. We want to develop learners who are true citizens and patriots, who have a strong desire to serve their country and work for its betterment.</i><br>
                        <br><br><b>…and whose values and competencies enable them to realize their full potential…</b><br>


                        <i>Inculcate the values and develop the necessary competencies deemed necessary and desirable to ensure a lifelong learning.</i></p>

                    <p class="item-2"><b>…and contribute meaningfully to building the nation…</b><br>
                        
                        <i>Because as a learner-centered institution we want them to know how to improve themselves and realize their dreams, while keeping in mind and heart their love for the country and care for fellowmen, maximizing the endowment of skills and talents, not for selfish gain, but to contribute to building a nation every Filipino deserves.</i></p>

                    <p class="item-3"><b>As a learner-centered public institution…</b><br>
                        <i>As stated in our mandate, the Department of Education (DepEd), “shall protect and promote the rights of all citizens to quality education at all levels, and shall take appropriate steps to make such education accessible to all”.<br>

                            <br>In all our decisions and actions, we put the Filipino learner first. In the end, our most important stakeholders are our learners… </i><br><br>
                        <b>…the Department of Education continuously improves itself……to better serve its stakeholders.”</b><br>
                        <i>Just like our students, we do not stop learning. We constantly seek to be better, both as individuals and as an organization.</i></p>
                </div>
            </div>
            
                    <a class="button-downn" href="#section3">
                <img src="img/downbtnn.png">
            </a>
            
        <style>
            .button-downn{
                margin-top: 35%;
                margin-left: 90%;
                position: absolute;
                width: 50px;
                height: 50px;
                z-index: 10;
            }
            
            .button-downn img{
                object-fit: cover;
                width: 100%;
                height: 100%;
                z-index: 10;
                transition: 0.2s ease-in-out;
            }
            .button-downn:hover{
                margin-top: 36%;
            }
        </style>
        </section>

        <section id="section3">
          <div class="gbg3">
            <img src="img/gbg3.png">
          </div>
            <div class="hatii">

                <div class="hatill">
                    <p class="itemm-1"><b>“As a learner-centered public institution…”</b><br>
                        
                        <i>The Department of Education is the government agency that formulates, implements, and coordinates policies, plans, programs, and projects in areas of formal and non-formal basic education. In all our decisions and actions, we put the Filipino learner first.</i><br>
                        <br><br><b>“..the Department of Education continuously improves itself..”</b><br>


                        <i>Just like our students, we do not stop learning. We constantly seek to be better, both as an institution and as individuals.</i></p>

                    <p class="itemm-2"><b>How can we serve our learners better? “..to better serve its stakeholders.”</b><br>
                        
                        <i>Through time, our learners have changing needs and the Department must adapt and be better to serve them better.</i><br><br>

                        <b>A closer look at our DepEd Mission in action<br>A closer look at being an organization that embodies our DepEd Core Values</b><br>
                        <i>“To protect and promote the right of every Filipino to quality, equitable, culture based, and complete basic education where: As stated in the 1987 Philippine Constitution, our mission states our duty as stewards of education to protect and promote the right of all citizens."</i><br></p>

                    <p class="itemm-3">

                            <b>How do we fulfill our mission as the Department of Education in delivering quality, equitable, culture-based, and complete basic education?</b><br><br>
                        <i>Do we provide our learners a child-friendly, gender-sensitive, safe and motivating environment?<br>
                            Do our teachers ensure the development of each uniquire learner?<br>
                            Do our policies, systems, processes, and behaviors ensure an enabling and supportive environment for effective learning to happen?<br>
                            Do we actively practice shared governance of basic education with the entire community in developing all Filipinos?</i>                        </p>
                </div>

                <div class="hatirr">

                    <div class="wrapperrr">
                        <div class="collapsibleee">
                            <input type="checkbox" id="collapsible-headdd">
                            
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

                          $sql = "SELECT id, title, `details` FROM `general` WHERE id='3mission'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo'
                              <label for="collapsible-headdd"><i class="fa-solid fa-bullseye"></i>&nbsp; '. $row["title"].'</label>
                            <div class="collapsible-texttt">';
                              echo " <h2> " . $row["title"]. "</h2>";
                              echo " <p> " . $row["details"]. "";
                            }
                          } else {
                            echo "no results";
                          }
                          $conn->close();
                        ?>

                                    <i class="fa-solid fa-graduation-cap"></i>&nbsp;<b>Students</b> learn in a child-friendly, gender-sensitive, safe, and motivating environment.<br><br>
                                    <i class="fa-solid fa-chalkboard-user"></i>&nbsp;<b>Teachers</b> facilitate learning and constantly nurture every learner.<br><br>
                                    <i class="fa-solid fa-clipboard-user"></i>&nbsp;<b>Administrators</b> and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.<br><br>
                                    <i class="fa-solid fa-people-group"></i>&nbsp;<b>Family, community, and other stakeholders</b> are actively engaged and share responsibility for developing life-long learners.
            
                                </p>
            
                            </div>
                        </div>
                    </div>

                </div>

                <div class="hatir">
                </div>
            </div>
            
                                <a class="button-downnn" href="#section4">
                <img src="img/downbtnn.png">
            </a>
            
        <style>
            .button-downnn{
                margin-top: 40%;
                margin-left: 95%;
                position: absolute;
                width: 50px;
                height: 50px;
                z-index: 10;
            }
            
            .button-downnn img{
                object-fit: cover;
                width: 100%;
                height: 100%;
                z-index: 10;
                transition: 0.2s ease-in-out;
            }
            
            .button-downnn:hover{
                margin-top: 41%;
            }
        </style>
        </section>

        <section id="section4">

          <div class="bgg">
            <img src="img/bgg.png">
          </div>
          <br><br>

            <div class="s4header">
                <h3>DepEd Core Values</h3>
                <p>Republic Act No. 8491 states that our national Motto shall be <b>“MAKA-DIYOS, MAKA-TAO, MAKAKALIKASAN AT MAKABANSA.”</b><br>

                In adopting these as our 4 core values, what does it mean to be “Maka-Diyos”, “Maka-tao”, “Makakalikasan”, and “Makabansa” in the context of the Department of Education?</p>
            </div>
            <div class="wow">

                <div class="card bg-dark text-white">
                    <div class="card-inner">
                      <img src="img/ggmakadiyos.png" class="card-img" alt="...">
                      <div class="card-img-overlay"><br>
                        <h5 class="card-title">Maka-Diyos</h5>
                        <p class="card-text">
                            <br><br><b>Behavior Statements:</b><br>
                            Expresses one’s spiritual beliefs while respecting the spiritual beliefs of others<br>

                            <br><b>Indicators:</b><br>
                            &#x2022;&nbsp;Engages oneself in worthwhile spiritual activities

                            &#x2022;&nbsp;Respects sacred places
                            
                            &#x2022;&nbsp;Respects religious beliefs of others
                            
                            &#x2022;&nbsp;Demonstrates curiosity and willingness to learn about other ways to express spiritual life</p><br>

                        <p class="card-text"><br><b>Behavior Statements:</b><br>
                            Shows adherence to ethical principles by upholding truth<br>

                            <br><b>Indicators:</b><br>
                            &#x2022;&nbsp;Tells the truth<br>

                            &#x2022;&nbsp;Returns borrowed things in good condition<br>

                            &#x2022;&nbsp;Demonstrates intellectual honesty<br>

                            &#x2022;&nbsp;Expects honesty from others<br>

                            &#x2022;&nbsp;Aspires to be fair and kind to all<br>

                            &#x2022;&nbsp;Identifies personal biases<br>

                            &#x2022;&nbsp;Recognizes and respects one’s feelings and those of others</p>
                      </div>
                    </div>
                  </div>


                  <div class="card bg-dark text-white">
                    <div class="card-inner">
                      <img src="img/ggmakatao.png" class="card-img" alt="...">
                      <div class="card-img-overlay"><br>
                        <h5 class="card-title">Makatao</h5>
                        <p class="card-text">
                            <br><br><b>Behavior Statements:</b><br>
                            Is sensitive to individual, social, and cultural differences<br>

                            <br><b>Indicators:</b><br>
                            &#x2022;&nbsp;Shows respect for all<br>

                            &#x2022;&nbsp;Waits for one’s turn<br>

                            &#x2022;&nbsp;Upholds and respects the dignity and equality of all including those with special needs<br>

                            &#x2022;&nbsp;Volunteers to assist others in times of need<br>

                            &#x2022;&nbsp;Recognizes and respects people from different economic, social, and cultural backgrounds.</p><br>

                        <p class="card-text"><br><b>Behavior Statements:</b><br>
                            Demonstrates contributions toward solidarity<br>

                            <br><b>Indicators:</b><br>
                            &#x2022;&nbsp;Cooperates during activities<br>

                            &#x2022;&nbsp;Recognizes and accepts the contribution of others toward a goal<br>

                            &#x2022;&nbsp;Considers diverse views<br>

                            &#x2022;&nbsp;Accepts defeat and celebrates others’ success<br>

                            &#x2022;&nbsp;Enables others to succeed<br>

                            &#x2022;&nbsp;Speaks out against and prevents bullying</p>
                      </div>
                    </div>
                  </div>

                  <div class="card bg-dark text-white">
                    <div class="card-inner">
                      <img src="img/ggmakakalikasan.png" class="card-img" alt="...">
                      <div class="card-img-overlay"><br>
                        <h5 class="card-title">Makakalikasan</h5>
                        <p class="card-text">
                            <br><br><b>Behavior Statements:</b><br>
                            Cares for the environment and utilizes resources wisely, judiciously, and economically<br>

                            <br><b>Indicators:</b><br>
                            &#x2022;&nbsp;Shows a caring attitude toward the environment<br>

                            &#x2022;&nbsp;Practices waste management<br>

                            &#x2022;&nbsp;Conserves energy and resources<br>

                            &#x2022;&nbsp;Takes care of school materials, facilities, and equipment<br>

                            &#x2022;&nbsp;Keeps work area in order during and after work<br>

                            &#x2022;&nbsp;Keeps one’s work neat and orderly</p><br>
                      </div>
                    </div>
                  </div>

                  <div class="card bg-dark text-white">
                    <div class="card-inner">
                      <img src="img/ggmakabansa.png" class="card-img" alt="...">
                      <div class="card-img-overlay"><br>
                        <h5 class="card-title">Makabansa</h5>
                        <p class="card-text">
                            <br><b>Behavior Statements:</b><br>
                            Demonstrates pride in being a Filipino; exercises the rights and responsibilities of a Filipino citizen<br>

                            <br><b>Indicators:</b><br>
                            &#x2022;&nbsp;Identifies oneself as a Filipino<br>

                            &#x2022;&nbsp;Respects the flag and national anthem<br>

                            &#x2022;&nbsp;Takes pride in diverse Filipino cultural expressions, practices, and traditions<br>

                            &#x2022;&nbsp;Promotes the appreciation and enhancement of Filipino languages<br>

                            &#x2022;&nbsp;Abides by the rules of the school, community, and country<br>
                            &#x2022;&nbsp;Enables others to develop interest and pride in being a Filipino</p><br>

                        <p class="card-text"><br><b>Behavior Statements:</b><br>
                            Demonstrates appropriate behavior in carrying out activities in the school, community, and country<br>

                            <br><b>Indicators:</b><br>
                            &#x2022;&nbsp;Manages time and personal resources efficiently and effectively<br>

                            &#x2022;&nbsp;Perseveres to achieve goals despite difficult circumstances<br>

                            &#x2022;&nbsp;Conducts oneself appropriately in various situations</p>
                      </div>
                    </div>
                  </div>


            </div>
            
                        
            <a class="button-up" href="#section1">
                <img src="img/upbtn.png">
            </a>
            
        <style>
            .button-up{
                margin-top: -5%;
                margin-left: 95%;
                position: absolute;
                width: 50px;
                height: 50px;
                z-index: 10;
                transition: linear 0.2s ease-in-out;
            }
            
            .button-up img{
                object-fit: cover;
                width: 100%;
                height: 100%;
                z-index: 10;
                transition: linear 0.2s ease-in-out;
            }
            
                        .button-up:hover{
                margin-top: -6%;
            }
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
      
      .cardd {
    position: absolute;
      width: 100%;
  height: 100%;
    margin-left:-10%;
    margin-top:-20%;
      }
      
          .collapsible {
    margin-top: -10%;
    }
    
#section1{
    width: 100%;
    height: 100vh;
    align-items: center;
}

#section2{
    width: 100%;
    height: 100vh;
    align-items: center;
    padding: 5%;
}

#section3{
    width: 100%;
    height: 100vh;
    background: green;
    align-items: center;
}

#section4{
    width: 100%;
    height: 100vh;
    background: pink;
    align-items: center;
}
      
      @media only screen and (max-width: 1280px) {
        html, body{
        max-width: 100%;
        overflow-x: hidden;
      }
      
    .cardd {
        position: absolute;
        width: 100%;
        height: 100%;
      }
      
    .cardd__face--front {
      width: 80%;
      height: 100%;
    
    }
    
    .cardd__face--back {
        position:absolute;
      width: 80%;
      height: 100%;
      transform: rotateY(180deg);
      margin-left:15%;
    }
    
    .collapsible {
        position: absolute;
    width: 500px;
    overflow: hidden;
    font-weight: 500;
    margin-left: 50%;
    }
    
    .item-1, 
.item-2, 
.item-3 {
    margin-left: 5%;
}

.item-1 b, .item-1 i, .item-2 b, .item-2 i, .item-3 b, .item-3 i {
    font-size: 150%;
    line-height: 100%;
}

    .itemm-1, 
.itemm-2, 
.itemm-3 {
    margin-left: -15%;
}

.itemm-1 b, .itemm-1 i, .itemm-2 b, .itemm-2 i, .itemm-3 b, .itemm-3 i {
    font-size: 150%;
    line-height: 100%;
}

  .s4header{
   margin-top:5%;
  }
  
  .wow{
    margin-top: 15%;
}

            .button-downn{
                margin-top: 52%;
                margin-left: 90%;
                position: absolute;
                width: 50px;
                height: 50px;
                z-index: 10;
            }
            
                        .button-downn:hover{
                margin-top: 53%;
            }
            
                        .button-downnn{
                margin-top: 57%;
            }
            
            .button-downnn:hover{
                margin-top: 58%;
            }
            
                        .button-up{
                margin-top: -1.5%;
            }
            
            
                        .button-up:hover{
                margin-top: -2.5%;
            }
      }
      
@media only screen and (max-width: 1100px) {
    
            html, body{
        max-width: 100%;
        overflow-x: hidden;
      }
      
    .cardd {
        position: absolute;
        width: 100%;
        height: 100%;
        margin-left:-10%;
        margin-top:10%;
      }
      
    .cardd__face--front {
      width: 70%;
      height: 90%;
    
    }
    
    .cardd__face--back {
        position:absolute;
      width: 70%;
      height: 90%;
      transform: rotateY(180deg);
      margin-left:25%;
    }
    
    .collapsible {
        position: absolute;
    width: 450px;
    overflow: hidden;
    font-weight: 500;
    margin-left: 45%;
    }
    
    .item-1, 
.item-2, 
.item-3 {
    margin-left: 11.5%;
    width: 55%;
}

.item-1 b, .item-1 i, .item-2 b, .item-2 i, .item-3 b, .item-3 i {
    font-size: 130%;
    line-height: 100%;
}ss

    .itemm-1, 
.itemm-2, 
.itemm-3 {
        margin-left: 40%;
    width: 55%;
}

.itemm-1 b, .itemm-1 i, .itemm-2 b, .itemm-2 i, .itemm-3 b, .itemm-3 i {
    font-size: 130%;
    line-height: 100%;
}

  .s4header{
   margin-top:8%;
  }
  
    .s4header p{
    font-size:90%;
  }
  
  .wow{
    margin-top: 20%;
}

            .button-down{
                margin-top: -9%;
                margin-left: 93%;
            }
            
            .button-down:hover{
                margin-top: -8%;
            }

            .button-downn{
                margin-top: 58%;
                margin-left: 88%;
            }
            
                        .button-downn:hover{
                margin-top: 59%;
            }
            
                        .button-downnn{
                margin-top: 63%;
                margin-left: 93%;
            }
            
            .button-downnn:hover{
                margin-top: 64%;
            }
            
                        .button-up{
                margin-top: -10%;
                margin-left: 93%;
            }
            
            
                        .button-up:hover{
                margin-top: -11%;
            }
      }
      
@media only screen and (max-width: 1000px) {
    html, body{
    max-width: 100%;
    overflow-x: hidden;
    }
    
        .cardd {
        position: absolute;
        width: 65%;
        height: 65%;
        margin-left:5%;
        margin-top:-10%;
      }
      
    .cardd__face--front {
      width: 70%;
      height: 90%;
    
    }
    
    .cardd__face--back {
        position:absolute;
      width: 70%;
      height: 90%;
      transform: rotateY(180deg);
      margin-left:25%;
    }
    
        .collapsibleee {
    width: 250px;
    margin-top: -30%;
    }
    
    .collapsibleee label{
    font-size: 110%;
    }
    
.collapsible-texttt h2{
    font-size:70%;
}

.collapsible-texttt p{
    font-size:70%;
}
    
    .collapsiblee {
    width: 250px;
    margin-top: -15%;
    }
    
    .collapsiblee label{
    font-size: 110%;
    }
    
.collapsible-textt h2{
    font-size:70%;
}

.collapsible-textt p{
    font-size:70%;
}

    .collapsible {
        position: absolute;
    width: 400px;
    overflow: hidden;
    font-weight: 500;
    margin-left: 40%;
    margin-top: -15%;
    }
    
    .collapsible label{
    font-size: 110%;
    }
    
.collapsible-text h2{
    font-size:70%;
}

.collapsible-text p{
    font-size:70%;
}
    
    .item-1, 
.item-2, 
.item-3 {
    margin-left: 7%;
    width: 55%;
}

.item-1 b, .item-1 i, .item-2 b, .item-2 i, .item-3 b, .item-3 i {
    font-size: 100%;
    line-height: 100%;
}ss

.itemm-1, 
.itemm-2, 
.itemm-3 {
        margin-left: 40%;
    width: 55%;
    margin-top: -10%;
}

.itemm-1 b, .itemm-1 i, .itemm-2 b, .itemm-2 i, .itemm-3 b, .itemm-3 i {
    font-size: 100%;
    line-height: 10%;
}

  .s4header{
   margin-top:-3%;
  }
  
    .s4header p{
    font-size:80%;
  }
  
  .wow{
    margin-top: 7%;
}

.card {
    width: 300px;
    height: 300px;
  }
    
    
}
    
      </style>

    </body>

       <!-- Javascript file -->
       <script>

var cards = document.querySelectorAll('.cardd');

[...cards].forEach((cardd)=>{
  cardd.addEventListener( 'click', function() {
    cardd.classList.toggle('is-flipped');
  });
});

       </script>

    <script>

      
        // Get card element
const card = document.querySelectorAll('.card');

// Loop through cards. 
// This is so you can have multiple cards on a page.
for (let i = 0; i < card.length; i++) {
   // Add a click event listener to each card.
   card[i].addEventListener("click", function() {
     // Toggle active class on card
     card[i].classList.toggle("active");
   });
}
    </script>

    <script>
      const imgs = document.querySelectorAll(".container img");
const dots = document.querySelectorAll(".dot i");
const leftArrow = document.querySelector(".arrow-left");
const rightArrow = document.querySelector(".arrow-right");

let currentIndex = 0;
let time = 5000; // default time for auto slideshow

const defClass = (startPos, index) => {
  for (let i = startPos; i < imgs.length; i++) {
    imgs[i].style.display = "none";
    dots[i].classList.remove("fa-dot-circle");
    dots[i].classList.add("fa-circle");
  }
  imgs[index].style.display = "block";
  dots[index].classList.add("fa-dot-circle");
};

defClass(1, 0);

leftArrow.addEventListener("click", function(){
  currentIndex <= 0 ? currentIndex = imgs.length-1 : currentIndex--;
  defClass(0, currentIndex);
});

rightArrow.addEventListener("click", function(){
  currentIndex >= imgs.length-1 ? currentIndex = 0 : currentIndex++;
  defClass(0, currentIndex);
});

const startAutoSlide = () => {
  setInterval(() => {
    currentIndex >= imgs.length-1 ? currentIndex = 0 : currentIndex++;
    defClass(0, currentIndex);
  }, time);
};

startAutoSlide(); // Start the slideshow
    </script>

</html>