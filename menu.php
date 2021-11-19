<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css?v=1" />
    <title>Menu</title>
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

<!-------------------------------------------explore-section---------------------------------->
<section class="explore-section">
    <h1>MENU</h1>
<div class="hero">
      <div class="btn-box">
        <button id="btn-1" onclick="openNI()">North Indian</button>
        <button id="btn-2" onclick="openSI()">
         South Indian
        </button>
        <button id="btn-3" onclick="openCS()">Chinese And Starters</button>
        <button id="btn-4" onclick="openPB()">Pizza And Burgers</button>
        <button id="btn-5" onclick="openDB()">Deserts and Beverages</button>
      </div>

      <div class="content-wrapper">
        <div id="content-1" class="content">
          <div class="content-section">
              <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n1.jpg" alt="" width="315px" height="280px">
                <h2>Panner Butter Masala</h2>
                <h3> From Haweli</h3>
                <h3>Rs 190/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Kaju Panner">
                <input type="hidden" name="Price" value="180">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">   
            <div class="content-card">
            <img src="./images/n2.jpg" alt="" width="315px" height="280px">
                <h2>Chole bhature</h2>
                <h3> From Parathas & More</h3>
                <h3>Rs 159/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chole Bhature">
                <input type="hidden" name="Price" value="159">
                </div>
            </div>
             </form>
             <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n3.jpg" alt="" width="315px" height="280px">
                <h2>Malai Kofta</h2>
                <h3> From Sahib Sindh Sultan</h3>
                <h3>Rs 199/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Malai Kofta">
                <input type="hidden" name="Price" value="199">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n4.jpg" alt="" width="315px" height="280px">
                <h2>Palak Panner</h2>
                <h3> From NorFest-The Dhaba</h3>
                <h3>Rs 160/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Palak Panner">
                <input type="hidden" name="Price" value="160">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n5.jpg" alt="" width="315px" height="280px">
                <h2> Punjabi Chicken</h2>
                <h3> From Punjabi Affair</h3>
                <h3>Rs 220/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Punjabi Chicken">
                <input type="hidden" name="Price" value="220">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
           <div class="content-card">
            <img src="./images/n6.jpg" alt="" width="315px" height="280px">
                <h2>Dhai Aloo Chat</h2>
                <h3> From Agra Chat Center</h3>
                <h3>Rs 120/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Dhai Aloo Chat">
                <input type="hidden" name="Price" value="120">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n7.jpg" alt="" width="315px" height="280px">
                <h2>Butter Chicken</h2>
                <h3> From Sigree </h3>
                <h3>Rs 270/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Butter Chicken">
                <input type="hidden" name="Price" value="270">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n8.jpg" alt="" width="315px" height="280px">
                <h2>Dhum Aloo</h2>
                <h3> From Deccan Pavilion</h3>
                <h3>Rs 200/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Dhum Aloo">
                <input type="hidden" name="Price" value="200">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n12.jpg" alt="" width="315px" height="280px">
                <h2>Pav Bhaji</h2>
                <h3> From Pav Experts</h3>
                <h3>Rs 129/-</h3>
            
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Pav Bhaji">
                <input type="hidden" name="Price" value="129">
                </div>
            </div>
             </form>
             <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n9.jpg" alt="" width="315px" height="280px">
                <h2>Butter Naan</h2>
                <h3> From Paranthas</h3>
                <h3>Rs 60/-[Each]</h3>
            
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Butter Naan">
                <input type="hidden" name="Price" value="60">
                </div>
            </div>
           </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n10.jpg" alt="" width="315px" height="280px">
                <h2>Garlic Naan</h2>
                <h3> From Lazeez</h3>
                <h3>Rs 69/-[Each]</h3>
            
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Garlic Naan">
                <input type="hidden" name="Price" value="69">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/n11.jpg" alt="" width="315px" height="280px">
                <h2>Kulcha</h2>
                <h3> From Kulcha Ghar</h3>
                <h3>Rs 50/-[Each]</h3>
            
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Kulcha">
                <input type="hidden" name="Price" value="50">
                </div>
            </div>
           </form>
          </div>
        </div>

        <div id="content-2" class="content">
          <div class="content-section">
          <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s6.jpg" alt="" width="315px" height="280px">
                <h2>Idli</h2>
                <h3> From Happy Homes </h3>
                <h3>Rs 89/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Idli">
                <input type="hidden" name="Price" value="89">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s7.jpg" alt="" width="315px" height="280px">
                <h2>Dosa</h2>
                <h3> From Chutneys </h3>
                <h3>Rs 99/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Dosa">
                <input type="hidden" name="Price" value="99">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/bir2.jpg" alt="" width="315px" height="280px">
                <h2>Zafrani Chicken Biryani</h2>
                <h3> From Paradise </h3>
                <h3>Rs 370/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Zafrani Chicken Birayni">
                <input type="hidden" name="Price" value="370">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s2.jpg" alt="" width="315px" height="280px">
                <h2>Nihari Gosht</h2>
                <h3> From Blue Fox </h3>
                <h3>Rs 270/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Nihari Ghost">
                <input type="hidden" name="Price" value="270">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s3.jpg" alt="" width="315px" height="280px">
                <h2>Tandoori Chicken</h2>
                <h3> From Absolute Barbecue  </h3>
                <h3>Rs 240/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Tandoori Chicken">
                <input type="hidden" name="Price" value="240">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s4.jpg" alt="" width="315px" height="280px">
                <h2>Lemon Rice</h2>
                <h3> From Meal Box </h3>
                <h3>Rs 170/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Lemon Rice">
                <input type="hidden" name="Price" value="170">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s5.jpg" alt="" width="315px" height="280px">
                <h2>Sambar Rice</h2>
                <h3> From Anand Bhavan </h3>
                <h3>Rs 150/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Sambar Rice">
                <input type="hidden" name="Price" value="150">
                </div>
            </div>
            </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s8.jpg" alt="" width="315px" height="280px">
                <h2> Hyderabadi Biryani</h2>
                <h3> From Paradise</h3>
                <h3>Rs 280/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chicken Dum Biryani">
                <input type="hidden" name="Price" value="270">
                </div>
            </div>
           </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s9.jpg" alt="" width="315px" height="280px">
                <h2>Mutton Biryani</h2>
                <h3> From Sha Gouse </h3>
                <h3>Rs 320/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Mutton Biryani">
                <input type="hidden" name="Price" value="320">
                </div>
            </div>
           </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s10.jpg" alt="" width="315px" height="280px">
                <h2>Mushroom Biryani</h2>
                <h3> From Mehfil </h3>
                <h3>Rs 230/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Mushroom Biryani">
                <input type="hidden" name="Price" value="230">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s11.jpg" alt="" width="315px" height="280px">
                <h2>chicken chettinad</h2>
                <h3> From The Non-veg Heaven  </h3>
                <h3>Rs 200/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chicken chettinad">
                <input type="hidden" name="Price" value="200">  
                </div>
            </div>
        </form>
        <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/s12.jpg" alt="" width="315px" height="280px">
                <h2>Raggi Muda and Koli Charu </h2>
                <h3> From Rajadhani </h3>
                <h3>Rs 290/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Raggi Muda and Koli Charu">
                <input type="hidden" name="Price" value="290">
                </div>
            </div>
            </form>
          </div>
        </div>

        <div id="content-3" class="content">
          <div class="content-section">
          <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/soup3.jpg" alt="" width="315px" height="280px">
                <h2>Chicken soup</h2>
                <h3> From Soups and Salads </h3>
                <h3>Rs 150/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chicken soup">
                <input type="hidden" name="Price" value="150">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/soup2.jpg" alt="" width="315px" height="280px">
                <h2>Tomato soup</h2>
                <h3> From Treat </h3>
                <h3>Rs 99/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Tomato soup">
                <input type="hidden" name="Price" value="99">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c3.jpg" alt="" width="315px" height="280px">
                <h2>Chilli Panner</h2>
                <h3> From Mist The Poolside Kitchen</h3>
                <h3>Rs 179/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chilli Panner">
                <input type="hidden" name="Price" value="179">
                </div>
            </div>
             </form>
             <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/rec2.jpg" alt="" width="315px" height="280px">
                <h2>Chicken  Lollipop </h2>
                <h3> From Mehfil</h3>
                <h3>Rs 240/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart"  class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chicken Lollipop">
                <input type="hidden" name="Price" value="240">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c5.jpg" alt="" width="315px" height="280px">
                <h2>schezwan Chicken Noodles</h2>
                <h3> From Republic of Noodles </h3>
                <h3>Rs 180/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="schezwan Chicken Noodles">
                <input type="hidden" name="Price" value="180">
                </div>
            </div>
             </form>
             <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c11.jpg" alt="" width="315px" height="280px">
                <h2>Apollo Fish</h2>
                <h3> From The Fisherman's Wharf </h3>
                <h3>Rs 220/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Apollo Fish">
                <input type="hidden" name="Price" value="220">
                </div>
            </div>
           </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c7.jpg" alt="" width="315px" height="280px">
                <h2>Steamed Momos</h2>
                <h3> From Wow!Momos </h3>
                <h3>Rs 131/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Steamed Momos">
                <input type="hidden" name="Price" value="131">
                </div>
            </div>
           </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c8.jpg" alt="" width="315px" height="280px">
                <h2>Fried Momos</h2>
                <h3> From Momo Nation Cafe </h3>
                <h3>Rs 160/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Fried Momos">
                <input type="hidden" name="Price" value="160">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c9.jpg" alt="" width="315px" height="280px">
                <h2>Gobi Manchuria</h2>
                <h3> From Bowl O China </h3>
                <h3>Rs 145/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Gobi Manchuria">
                <input type="hidden" name="Price" value="145">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">  
            <div class="content-card">
            <img src="./images/c10.png" alt="" width="315px" height="280px">
                <h2>Mixed Veg Rolls</h2>
                <h3> From Basket </h3>
                <h3>Rs 120/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Mixed Veg Rolls">
                <input type="hidden" name="Price" value="120">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">    
            <div class="content-card">
            <img src="./images/c6.jpg" alt="" width="315px" height="280px">
                <h2>schezwan Panner Noodles</h2>
                <h3> From Noodles Den </h3>
                <h3>Rs 150/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="schezwan Panner Noodles">
                <input type="hidden" name="Price" value="150">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c12.jpg" alt="" width="315px" height="280px">
                <h2>schezwan Rice</h2>
                <h3> From Sitara Grand </h3>
                <h3>Rs 145/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Schezwan Rice">
                <input type="hidden" name="Price" value="145">
                </div>
            </div>
           </form>           
          </div>
        </div>

        <div id="content-4" class="content">
          <div class="content-section">
          <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/pizza2.jpg" alt="" width="315px" height="280px">
                <h2>Margherita Pizza</h2>
                <h3> From Ocean of Bakes </h3>
                <h3>Rs 145/-</h3>
            
                <br>
                <div class="dl-btn">
                <button class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Margherita Pizza">
                <input type="hidden" name="Price" value="145">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/pizza1.jpg" alt="" width="315px" height="280px">
                <h2>Chicken Tikka Pizza</h2>
                <h3> From Pizza Hut </h3>
                <h3>Rs 185/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value=">Chicken Tikka Pizza">
                <input type="hidden" name="Price" value="185">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/burger1.jpg" alt="" width="315px" height="280px">
                <h2>Veg Cheese Burger</h2>
                <h3> From KS Bakers </h3>
                <h3>Rs 135/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Veg Cheese Burger">
                <input type="hidden" name="Price" value="135">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/burger2.jpg" alt="" width="315px" height="280px">
                <h2>Chicken Cheese burger</h2>
                <h3> From Tipsy Topsy </h3>
                <h3>Rs 105/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Hacking by Jon Ericson">
                <input type="hidden" name="Price" value="105">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/pizza4.jpg" alt="" width="315px" height="280px">
                <h2>Veg Cheese Pizza</h2>
                <h3> From Chef Bakers </h3>
                <h3>Rs 145/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Veg Cheese Pizza">
                <input type="hidden" name="Price" value="145">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/bu1.jpg" alt="" width="315px" height="280px">
                <h2>Veg Sandwich</h2>
                <h3> From Cakes N Bakes </h3>
                <h3>Rs 99/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Veg Sandwich">
                <input type="hidden" name="Price" value="99">
                </div>
            </div>
           </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/v1.png" alt="" width="315px" height="280px">
                <h2>Aloo Tikki Burger </h2>
                <h3> From Burger singh </h3>
                <h3>Rs 99/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Aloo Tikki Burger">
                <input type="hidden" name="Price" value="99">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/v2.jpg" alt="" width="315px" height="280px">
                <h2>Chicken Cheese Pizza </h2>
                <h3> From Overstory </h3>
                <h3>Rs 245/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chicken Cheese Pizza">
                <input type="hidden" name="Price" value="245">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/v3.png" alt="" width="315px" height="280px">
                <h2>Cheese Loaded Sandwich</h2>
                <h3> From Sandwich Ghar </h3>
                <h3>Rs 145/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Cheese Loaded Sandwich">
                <input type="hidden" name="Price" value="145">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/v4.jpg" alt="" width="315px" height="280px">
                <h2>Garlic Bread</h2>
                <h3> From breads N More </h3>
                <h3>Rs 100/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Garlic Bread">
                <input type="hidden" name="Price" value="100">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/v6.jpg" alt="" width="315px" height="280px">
                <h2>Chicken Tandoori Sandwich</h2>
                <h3> From Karachi Cafe </h3>
                <h3>Rs 165/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chicken Tandoori Sandwich">
                <input type="hidden" name="Price" value="165">
                </div>
            </div>
             </form>
             <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/v5.jpg" alt="" width="315px" height="280px">
                <h2>French Fries</h2>
                <h3> From Fries N Dips </h3>
                <h3>Rs 79/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="French Fries">
                <input type="hidden" name="Price" value="79">
                </div>
            </div>
          </form>
          </div>
        </div>

        <div id="content-5" class="content">
          <div class="content-section">
          <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d1.jpg" alt="" width="315px" height="280px">
                <h2>Chocolate Siziling Browine</h2>
                <h3> From Chocolate Room </h3>
                <h3>Rs 185/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Chocolate Siziling Browine">
                <input type="hidden" name="Price" value="185">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d2.jpg" alt="" width="315px" height="280px">
                <h2>Choco Lava Cake</h2>
                <h3> From Dominos </h3>
                <h3>Rs 135/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Choco Lava Cake">
                <input type="hidden" name="Price" value="135">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d3.jpg" alt="" width="315px" height="280px">
                <h2>Kadhu Ka Kheer</h2>
                <h3> From Agra Mithaiwala </h3>
                <h3>Rs 125/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Kadhu Ka Kheer">
                <input type="hidden" name="Price" value="125">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d4.jpg" alt="" width="315px" height="280px">
                <h2>Fruit Salad</h2>
                <h3> From Naturals </h3>
                <h3>Rs 150/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Fruit Salad">
                <input type="hidden" name="Price" value="150">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d5.jpg" alt="" width="315px" height="280px">
                <h2>Rasagulla</h2>
                <h3> From Daadus</h3>
                <h3>Rs 200/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Rasagulla">
                <input type="hidden" name="Price" value="200">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d6.jpg" alt="" width="315px" height="280px">
                <h2>Kala Jamun</h2>
                <h3> From Olive Mithaighar </h3>
                <h3>Rs 215/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Kala Jamun">
                <input type="hidden" name="Price" value="215">
                </div>
            </div>
           </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d7.jpg" alt="" width="315px" height="280px">
                <h2>Rasberry moctail</h2>
                <h3> From Shakes Heaven </h3>
                <h3>Rs 145/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Rasberry moctail">
                <input type="hidden" name="Price" value="145">
                </div>
            </div>
           </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d8.jpg" alt="" width="315px" height="280px">
                <h2>Mint Moctail</h2>
                <h3> From Moctail Bar </h3>
                <h3>Rs 125/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Mint Moctai">
                <input type="hidden" name="Price" value="125">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d9.jpg" alt="" width="315px" height="280px">
                <h2>Nutella Shake</h2>
                <h3> From Makers of Milkshakes </h3>
                <h3>Rs 185/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Nutella Shake">
                <input type="hidden" name="Price" value="185">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d10.jpg" alt="" width="315px" height="280px">
                <h2>Oreo Shake</h2>
                <h3> From Temptyes</h3>
                <h3>Rs 165/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Oreo Shake">
                <input type="hidden" name="Price" value="165">
                </div>
            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d12.jpg" alt="" width="315px" height="280px">
                <h2>Watermelon Shake</h2>
                <h3> From Drunken Monkey </h3>
                <h3>Rs 125/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Watermelon Shake">
                <input type="hidden" name="Price" value="125">
                </div>
            </div>
           </form>
           <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/d11.jpeg" alt="" width="315px" height="280px">
                <h2>Special Lassi</h2>
                <h3> From Lassi shop </h3>
                <h3>Rs 99/-</h3>
            
                <br>
                <div class="dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                <input type="hidden" name="Item_Name" value="Special Lassi">
                <input type="hidden" name="Price" value="99">
                </div>
            </div>
           </form>
          </div>
        </div>
        
      </div>
    </div>
</section>
<!--------------------------fotter-section------------------>
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



    <script>
      var content1 = document.getElementById("content-1");
      var content2 = document.getElementById("content-2");
      var content3 = document.getElementById("content-3");
      var content4 = document.getElementById("content-4");
      var content5 = document.getElementById("content-5");
      var btn1 = document.getElementById("btn-1");
      var btn2 = document.getElementById("btn-2");
      var btn3 = document.getElementById("btn-3");
      var btn4 = document.getElementById("btn-4");
      var btn5 = document.getElementById("btn-5");

      function openNI() {
        content1.style.transform = "translatex(0)";
        content2.style.transform = "translatex(100%)";
        content3.style.transform = "translatex(100%)";
        content4.style.transform = "translatex(100%)";
        content5.style.transform = "translatex(100%)";
        btn1.style.color = "orange";
        btn2.style.color = "black";
        btn3.style.color = "black";
        btn4.style.color = "black";
        btn5.style.color = "black";
        content1.style.transitionDelay = "0.3s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
        content5.style.transitionDelay = "0s";
      }
      function openSI() {
        content1.style.transform = "translatex(100%)";
        content2.style.transform = "translatex(0)";
        content3.style.transform = "translatex(100%)";
        content4.style.transform = "translatex(100%)";
        content5.style.transform = "translatex(100%)";
        btn1.style.color = "black";
        btn2.style.color = "orange";
        btn3.style.color = "black";
        btn4.style.color = "black";
        btn5.style.color = "black";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0.3s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
        content5.style.transitionDelay = "0s";
      }
      function openCS() {
        content1.style.transform = "translatex(100%)";
        content2.style.transform = "translatex(100%)";
        content3.style.transform = "translatex(0)";
        content4.style.transform = "translatex(100%)";
        content5.style.transform = "translatex(100%)";
        btn1.style.color = "black";
        btn2.style.color = "black";
        btn3.style.color = "orange";
        btn4.style.color = "black";
        btn5.style.color = "black";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0.3s";
        content4.style.transitionDelay = "0s";
        content5.style.transitionDelay = "0s";
      }
      function openPB() {
        content1.style.transform = "translatex(100%)";
        content2.style.transform = "translatex(100%)";
        content3.style.transform = "translatex(100%)";
        content4.style.transform = "translatex(0)";
        content5.style.transform = "translatex(100%)";
        btn1.style.color = "black";
        btn2.style.color = "black";
        btn3.style.color = "black";
        btn4.style.color = "orange";
        btn5.style.color = "black";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0.3s";
        content5.style.transitionDelay = "0s";
      }
      function openDB() {
        content1.style.transform = "translatex(100%)";
        content2.style.transform = "translatex(100%)";
        content3.style.transform = "translatex(100%)";
        content4.style.transform = "translatex(100%)";
        content5.style.transform = "translatex(0)";
        btn1.style.color = "black";
        btn2.style.color = "black";
        btn3.style.color = "black";
        btn4.style.color = "black";
        btn5.style.color = "orange";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
        content5.style.transitionDelay = "0.3s";
      }
    </script>
</body>
</html>