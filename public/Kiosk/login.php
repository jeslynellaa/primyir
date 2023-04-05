<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="/assets/favicon.ico">
  <script src="https://kit.fontawesome.com/c7e61bc11e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/assets/dcode.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <title>Primyir Kiosk</title>
  <!-- add icon link -->
  <link rel = "icon" href = 
  "img/SNHS.png" 
      type = "image/x-icon">
</head>
	
<body>
<body oncontextmenu="return false">
      <script>
      document.oncontextmenu = function() {
      return false;
      }
      </script>
	
	<div class="container">
		<div class="drop">
			<div class="content">

				<h2 class='animate__heartBeat'>Log in</h2>
				<form action="include/login-check.php" method="POST" autocomplete="off" class="sign-in-form">
                    <div class="error">
                        <?php if (isset($_GET['error'])) { ?>
                          <p class="login-error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                      </div>
					<div class="input-box">
						<input type="text" name="username" placeholder="Username" class="use-keyboard-input" id="username">
						</div>
					<div class="input-box">
						<input type="text" name="LRN_no" placeholder="LRN" class="use-keyboard-input" id="LRN_no">
						</div>
					<div class="input-box">
						<input type="submit" value="Login" href='#'>
						</div>
				</form>
		    </div>	
		</div>
		<a href="#" class='btn'><h5>Welcome to SNHS Kiosk</h5></a>
	<a href="#" class='btn signup'><h5>Pagbati!</h5></a>
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
	
</body>
<script src="js/keyboard.js"></script>
<script src="js/togglePassword.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
    ScrollReveal({
        reset: true,
    });

    ScrollReveal().reveal('.content', { delay: 1000, origin: 'top', distance: '60px', duration: 2500});
    ScrollReveal().reveal('h5', { delay: 1500, origin: 'bottom', distance: '10px', duration: 2500});

</script>
</html>