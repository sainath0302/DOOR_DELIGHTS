<?php

require_once('config.php');


session_start();


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style3.css">
	<title>login</title>
</head>
<body>

<nav>
  <div class="logo" data-aos="zoom-out-down">
      <h1>DOOR<span>DELIGHTS</span></h1>
      <p>One Click Makes Your Day Delicious</p>
  </div>

  <div class="main-nav">
    <ul>
	<li data-aos="zoom-in"><a href="index.php">Home</a></li>
        <li data-aos="zoom-in"><a href="#about">About Us</a></li>
        <li data-aos="zoom-in"><a href="menu.php">Menu</a></li>
        <li data-aos="zoom-in"><a href="gallery.php">Gallery</a></li>
        <li data-aos="zoom-in"><a href="#contact">Contact Us</a></li>
    </ul>
  </div>

  <div class="sign-in-up">
    <button type="button" onclick="popup('login-popup')">LOGIN</button>
    <button type= "button" onclick="popup('register-popup')">REGISTER</button>
  </div>

  <div class="cart-btn">
  <?php
  $count = 0;
  if(isset($_SESSION['cart']))
  {
    $count = count($_SESSION['cart']);
  }

  ?>
<a href="mycart.php">Mycart (<?php echo $count; ?>)</a>
</div>


</nav>

<div class="popup-container" id="login-popup">
	<div class="popup">
		<form action="login_register.php" method="POST" autocomplete="off">
			<h2>
				<span>USER LOGIN</span>
				<button type="reset" onclick="popup('login-popup')">X</button>
			</h2>
			<input type="text" name="email_username" placeholder="E-mail or Username" required>
			<input type="text" name="password" placeholder="Password" required>
			<div class="login">
			<button  type="submit" class="login-btn" name="login"><a href="login.php">LOGIN</a></button>
            </div>
		</form>
	</div>
</div>


<div class="popup-container" id="register-popup">
	<div class="register popup">
		<form action="login_register.php" method="POST" autocomplete="off">
			<h2>
				<span>USER REGISTRATION</span>
				<button type="reset" onclick="popup('register-popup')">X</button>
			</h2>
			<input type="text" name="fullname" placeholder="Full Name" required>
			<input type="text" name="username" placeholder="Username" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="password" name="password" placeholder="Password">
			<div class="register">
			<button  type="submit" class="register-btn" name="register"><a href="login.php">REGISTER</a></button>
            </div>
		</form>
	</div>
</div>
 
                



<script>


	function popup(popup_name)
	{
		get_popup = document.getElementById(popup_name);
		if(get_popup.style.display == "flex")
		{
			get_popup.style.display = "none";
		}
		else
		{
			get_popup.style.display = "flex"
		}
	}

</script>
</body>
</html>