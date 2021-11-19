<?php

  $message_sent = false;
  if(isset($_POST['Email']) && $_POST['Email'] != ''){

    if( filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){

      $userName = $_POST['UName'];
      $userEmail = $_POST['Email'];
      $messageSubject = $_POST['subject'];
      $message = $_POST['msg'];

      
      $body = "";

      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "message: ".$message. "\r\n";

      $message_sent = true;

    }

   

  }


?>

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
    <title>DOOR DELIGHTS</title>
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
        <li data-aos="zoom-in"><a href="#aboutus">About Us</a></li>
        <li data-aos="zoom-in"><a href="menu.php">Menu</a></li>
        <li data-aos="zoom-in"><a href="gallery.php">Gallery</a></li>
        <li data-aos="zoom-in"><a href="#contactus">Contact Us</a></li>
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
  <button type='button' data-aos='zoom-in'><a href='login.php'>LOGIN</a></button>
  <button type= 'button' data-aos='zoom-in'><a href='login.php'>REGISTER</a></button>
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
<header>
    <div class="slider">
        <div class="slide">
            <div>
                <h1 data-aos="zoom-in">DOOR DELIGHTS</h1>
                <p data-aos="slide-down">One click makes your day delicious</p>
                <div class="slider-btn" data-aos="zoom-out">
              <button><a href="login.php">Get Started</a></button>
            </div>
            </div>
        </div>
    </div>
</header>
<!-----------------------------------------------Menu-section------------------------------------>
<section class="container menu-container">
    <h1 data-aos="slide-down">Pick a dish of our menu</h1>
    <div class="menu">
        <div class="left-menu">
            <div class="top-menu" data-aos="zoom-out-up">
            <a href="menu.php" class="btn" data-aos="flip-left">Explore More &#10132;</a>

            </div>
            <div class="bottom-menu" data-aos="zoom-in">
                <p>We deliver best food and happines for our coustomers.Food makes every one happy,it delivers moments and memories for everyone.Here we go presenting the best food around you!!</p>
            </div>
        </div>

        <div class="right-menu">
            <div class="card1" data-aos="flip-right"></div>
            <div class="card2" data-aos="flip-right"></div>
            <div class="card3" data-aos="flip-right"></div>
            <div class="card4" data-aos="flip-right"></div>
        </div>
    </div>
</section>
<!--------------------about us-------------->
<section class="container about-container" id="aboutus">
    <h1 class="h11" data-aos="zoom-out-right">About Us </h1>
    <div class="About">
        <div class="left-about-section">
            <div class="card1" data-aos="flip-left">
                <img src="./images/team.jpg" alt="" height="50px" width="50px">
                <h1>Our Team </h1>
               <p>We have the best 24/7 support team who takes care of your issues and queries.Our support team is egar and delightful to help you bring out the best food.</p>
              </div>
            <div class="card2" data-aos="flip-left">
                <img src="./images/fast.jpg" alt="" height="50px" width="50px">
                <h1>Lightning-Fast Delivery</h1>
                <p> Experience superfast delivery for food delivered fresh & on time to make your hunger run-away!</p>
            </div>
            <div class="card3" data-aos="flip-left">
                <img src="./images/cost.jpg" alt="" height="50px" width="40px">
                <h1>No Minimum Order</h1>
                <p>Order in for yourself or for the group, with no restrictions on order value.We also provide you best offers,use promocodes for discounts.</p>  
              </div>
            <div class="card4" data-aos="flip-left">
                <img src="./images/safety.jpg" alt="" height="50px" width="50px">
                <h1>Safety Measures</h1>
                <p>To ensure that your order is delivered safely, we regularly send reminders to our delivery partners on best practices of respiratory hygiene, proper method and frequency of hand washing, as well as identification of associated symptoms.</p>
              </div>
        </div>

        <div class="right-about-section" data-aos="fade-up">
        <img src="./images/bg1.jpg" height="490px" > 
        </div>
    </div>
</section>
<!------------------------top pics---------------------->


<section class="chef-reccomend">
      <div class="container-2 category-container">
        <div class="category">
          <h1 data-aos="zoom-out">Most Favourites</h1>
          <div class="category-wrap">
          
            <div class="card1" data-aos="zoom-in">
              <img
                src="./images/rec2.jpg"
                alt=""
                height="255px"
                width="380px"
              />
              <div class="bottom">
                <h2>Chicken Lollipop</h2>
               <b> <p>From Mehfil</p></b>
                <span>Rs.240</span>
                <a href="menu.php" class="btn-1">Go to Menu</a>
              </div>
            </div>

            <div class="card1" data-aos="zoom-in">
              <img
                src="./images/rec1.jpg"
                alt=""
                height="255px"
                width="380px"
              />
              <div class="bottom">
                <h2>Panner Butter Masala</h2>
                <b><p>From Haweli</p></b>
                <span>Rs.190</span>
                <a href="menu.php" class="btn-1">Go to Menu </a>
              </div>
            </div>

            <div class="card1" data-aos="zoom-in">
              <img
                src="./images/rec4.jpg"
                alt=""
                height="255px"
                width="380px"
              />
              <div class="bottom">
                <h2>Hyderabadi Biryani</h2>
                <b><p>From Paradise</p></b>
                <span>Rs.280</span>
                <a href="menu.php" class="btn-1">Go to Menu </a>
              </div>
            </div>
         

          
            <div class="card1" data-aos="zoom-in">
              <img
                src="./images/rec5.jpg"
                alt=""
                height="255px"
                width="380px"
              />
              <div class="bottom">
                <h2>Schezwan Noodles</h2>
                <b><p>From Republic of Noodles</p></b>
                <span>Rs.180</span>
                <a href="menu.php" class="btn-1">Go to Menu </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------------news section----------------->
    <section class="News">
    <div class="main-section">
        <div class="sub-section" data-aos="flip-up">
            <div class="top-section">
                <div class="inner-top-heading-section">
                    <h1>Subscribe to newsletter</h1>
                </div>
                <div class="inner-top-info-section">
                    <span>Free Promocodes  </span>
                    <span>Free Delivery  </span>
                    <span>Free Membership </span>
                </div>
            </div>

            <div class="bottom-section">
                <div class="form-section">
                    <input type="email" name="email" placeholder="Enter your email Address">
                </div>
                <div class="button">
                    <a href="">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------customer reviews------------------>
<section class="client">
      <div class="container">
      <h1 data-aos="zoom-in">Customer Reviews</h1>
        <div class="client-box" >
          <div class="card" data-aos="fade-left">
            <p>
            Helpful in hunger and provides the food from different restaurants with Great discounts. Can use this website for good food.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./images/cli1.jpg" alt="" />
            <h2>Krunal</h2>
          </div>

          <div class="card" data-aos="zoom-in">
            <p>
            Door Delights is the best way for online food delivery. I always use their service and they never disappoint me.


            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./images/user3.png" alt="" />
            <h2> Preethi</h2>
          </div>

          <div class="card" data-aos="fade-right">
            <p>
            Very fast delivery! I got ontime food delivery. Even delivered food was hot and fresh.Great services with quality.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./images/cli2.jpg" alt="" />
            <h2> Rahul</h2>
          </div>
        </div>
      </div>
    </section>

     <!-----------------------contact us---------------------------->
     <section class="contact" id="contactus">
        <div class="contact-head">
          <h1 class="contact-heading" data-aos="fade-up-left">Contact Us</h1>

          <div class="contact-wrapper">
            <div class="card1" data-aos="flip-left">
              <img
                src="./images/call.png"
                alt=""
              />
              <h1>Call Us On</h1>
              <h6>+91 9048930201</h6>
            </div>
            <div class="card1" data-aos="zoom-in">
              <img
                src="./images/msg.png"
                alt=""
              />
              <h1>Email Us On</h1>
              <h6>DoorDelightss@company.com</h6>
            </div>
            <div class="card1" data-aos="flip-right">
              <img
                src="./images/loc1.jpg"
                alt=""
              />
              <h1>Visit Office</h1>
              <h6>15-20,Jubliehills,Hyderabad,500072</h6>
            </div>
          </div>
          <?php
          if($message_sent):
          ?>
            
            <div class="contact-box" style="width: 400px; height: 100px; margin-top: 2rem; background-color: #78f26b;">
            <h3 style="margin-top: 2rem; color: black; font-weight: 500; font-size: 2rem; text-align: center;">Thanks, We'll be in Touch</h3>
            </div>


          <?php
          else:
          ?>


          <form action="index.php" method="POST">
            <div class="input-wrap">
              <input type="text" placeholder="Your Name" name="UName" / data-aos="flip-down">
              <input type="email" placeholder="Your Email" name="Email" / data-aos="flip-down">
            </div>
            <div class="input-wrap-2">
              <input type="text" placeholder="Your Subject" name="subject" / data-aos="flip-down">
              <textarea id="" cols="30" rows="10" placeholder="Your Message" data-aos="flip-down" name="msg"></textarea
              >
            </div>
            <div class="btn-wrapper" data-aos="zoom-in-right">
              <button class="btn-primary">Send Message</button>
            </div>
            <?php
            endif;
            ?>
          </form>
        </div>
      </section>

    <!--------------------------fotter-section------------------>
    <section class="footer">
        <div class="container" data-aos="zoom-out">
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
                    <span>Our Purpose is To Sustainably Make the people get best and hygenic food around them.</span>
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