<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Gallery</title>
</head>
<body>
<nav>
  <div class="logo" data-aos="zoom-out-down">
      <h1>Door<span>DELIGHTS</span></h1>
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
<?php
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
  {
    echo "
    <div class='user'>
    $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
    </div>
    ";
  }
  else
  {
     echo "
    <div class='sign-in-up'>
    <button type='button'><a href='login.php'>LOGIN</a></button>
    <button type= 'button'><a href='login.php'>REGISTER</a></button>
    </div>
     
     ";
  }


  ?>

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
<div class="gallery-wrapper">
       <div class="top-container">
         <h1>Our Gallery</h1>
       </div>
       <div class="bottom-container-1">
         <div class="gallery-wrap">
          <div class="card1"data-aos="zoom-out">
            <img src="./images/g1.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" data-aos="zoom-out">
            <img src="./images/g2.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" data-aos="zoom-out">
            <img src="./images/g3.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" data-aos="zoom-out">
            <img src="./images/g4.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" data-aos="zoom-out">
            <img src="./images/g5.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" data-aos="zoom-out">
            <img src="./images/g6.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" data-aos="zoom-out">
            <img src="./images/g7.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" data-aos="zoom-out">
             <img src="./images/g8.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" >
            <img src="./images/g9.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" >
            <img src="./images/g10.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" >
            <img src="./images/g11.jpg" alt="" height="255px" width="245px">
          </div>
          <div class="card1" >
             <img src="./images/g12.jpg" alt="" height="255px" width="245px">
          </div>
         </div>
       </div>
     </div>  

     <section class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <div class="card-1">
                    <h2>Download Our App</h2>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="logos">
                        <img src="./images/play-store.png" alt="">
                        <img src="./images/app-store.png" alt="">
                    </div>
                </div>

                <div class="card-2">
                    <h1>DOOR <span>DELIGHTS</span></h1>
                    <p>One click makes your day delicious</p>
                    <span>Our Purpose is To Sustainably Make the pleasure and Benefits of Sports Accessible to the Many</span>
                </div>

                <div class="card-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="#">Coupons</a></li>
                        <li><a href="#">Coupons</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Join Affiliate</a></li>
                    </ul>
                </div>

                <div class="card-3">
                    <h3>Follow Us</h3>

                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <h4>Copyright © 2021, All Right Reserved | Door Delights</h4>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script> 

</body>
</html>