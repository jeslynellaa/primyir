<?php

include('include/config.php');

if($data==false){
  die("connection error");
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
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/grades.css">
        <title>Primyir Kiosk</title>
        <!-- add icon link -->
        <link rel = "icon" href = 
        "img/SNHS.png" 
            type = "image/x-icon">
    </head>
   
   <body>
       
               <?php 
        
        session_destroy();
        
        ?>
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

        <div class="bg">
            <img src="img/bk.png">
        </div>

        <div class="greetings">
            <p>Pagbati, <b><?php echo $_SESSION['givenName'];?>!</b> This is your current status.</p>
        </div>

        <br><br><br><br>

        <div class="hello">

            <div class="hey">
                
                <div class="collapsible">
                    <input type="checkbox" id="collapsible-head">
                    <label for="collapsible-head" onclick="toggle()">
                    <div class="gradename">
                        <div class="gradelogo">
                            <i class="fa-solid fa-book"></i> &nbsp;
                        </div>
                        <div class="gradecontent">
                            <h3>Grade 7</h3>
                        <h6>2021-2022</h6>
                        </div>

                        <div class="arroww">
                            <img src="img/arrow.svg" class="square toggle-down">
                        </div>
                    </div>
                
                </label>
                    <div class="collapsible-text">
                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;EsP 7</h2>
                            <h3>98</h3>
                            <h3>98</h3>
                            <h3>89</h3>
                            <h3>99</h3>
                            <h4>99</h4>

                        </div>
                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>
                    </div>
                </div>

                <script>
var upClass = 'toggle-up';
var downClass = 'toggle-down';

function toggle() {
  var square = document.querySelector('.square');
  
  if (~square.className.indexOf(downClass)) {
    square.className = square.className.replace(downClass, upClass);
  } else {
        square.className = square.className.replace(upClass, downClass);
  }
  
}
                    </script>

            </div>

            <div class="hey1">
                
                <div class="collapsiblee">
                    <input type="checkbox" id="collapsiblee-head">
                    <label for="collapsiblee-head" onclick="togglee()">
                    <div class="gradename">
                        <div class="gradelogo">
                            <i class="fa-solid fa-book"></i> &nbsp;
                        </div>
                        <div class="gradecontent">
                            <h3>Grade 8</h3>
                        <h6>2022-2023</h6>
                        </div>

                        <div class="arroww">
                            <img src="img/arrow.svg" class="squaree toggle-downn">
                        </div>
                    </div>
                
                </label>

                <script>
                    var upClasss = 'toggle-upp';
                    var downClasss = 'toggle-downn';
                    
                    function togglee() {
                      var squaree = document.querySelector('.squaree');
                      
                      if (~squaree.className.indexOf(downClasss)) {
                        squaree.className = squaree.className.replace(downClasss, upClasss);
                      } else {
                            squaree.className = squaree.className.replace(upClasss, downClasss);
                      }
                      
                    }
                </script>

                    <div class="collapsiblee-text">
                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Filipino 8</h2>
                            <h3>85</h3>
                            <h3>82</h3>
                            <h3>88</h3>
                            <h3>91</h3>
                            <h4>92</h4>
                        </div>
                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;AP 8</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>
                        
                    </div>
                </div>

            </div>

            <div class="hey2">
                
                <div class="collapsibleee">
                    <input type="checkbox" id="collapsibleee-head">
                    <label for="collapsibleee-head" onclick="toggleee()">
                    <div class="gradename">
                        <div class="gradelogo">
                            <i class="fa-solid fa-book"></i> &nbsp;
                        </div>
                        <div class="gradecontent">
                            <h3>Grade 9</h3>
                        <h6>2023-2024</h6>
                        </div>

                        <div class="arroww">
                            <img src="img/arrow.svg" class="squareee toggle-downnn">
                        </div>
                    </div>
                
                </label>

                <script>
                    var up = 'toggle-uppp';
                    var down = 'toggle-downnn';
                    
                    function toggleee() {
                      var squareee = document.querySelector('.squareee');
                      
                      if (~squareee.className.indexOf(down)) {
                        squareee.className = squareee.className.replace(down, up);
                      } else {
                            squareee.className = squareee.className.replace(up, down);
                      }
                      
                    }
                </script>

                    <div class="collapsibleee-text">
                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 9</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>
                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;English 9</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>
                    </div>
                </div>

            </div>

            <div class="hey3">
                
                <div class="collapsibleeee">
                    <input type="checkbox" id="collapsibleeee-head">
                    <label for="collapsibleeee-head" onclick="toggleeee()">
                    <div class="gradename">
                        <div class="gradelogo">
                            <i class="fa-solid fa-book"></i> &nbsp;
                        </div>
                        <div class="gradecontent">
                            <h3>Grade 10</h3>
                        <h6>2024-2025</h6>
                        </div>

                        <div class="arroww">
                            <img src="img/arrow.svg" class="squareeee toggle-downnnn">
                        </div>
                    </div>
            

                </label>

                <script>
                    var upp = 'toggle-upppp';
                    var downn = 'toggle-downnnn';
                    
                    function toggleeee() {
                      var squareeee = document.querySelector('.squareeee');
                      
                      if (~squareeee.className.indexOf(downn)) {
                        squareeee.className = squareeee.className.replace(downn, upp);
                      } else {
                            squareeee.className = squareeee.className.replace(upp, downn);
                      }
                      
                    }
                </script>

                    <div class="collapsibleeee-text">
                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;TLE 10</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>
                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;EsP 10</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>

                        <div class="gradess">
                            <h2><i class="fa-solid fa-graduation-cap"></i>&nbsp;Math 7</h2>
                            <h3>88</h3>
                            <h3>85</h3>
                            <h3>89</h3>
                            <h3>81</h3>
                            <h4>99</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>

</html>