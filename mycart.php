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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css?v=1" />
    <title>mycart</title>
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


<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>My Cart</h1>
        </div>

        <div class="col-lg-9">
        <table class="table">
  <thead>
      <tr>
      <th class="text-center" scope="col">Serial No.</th>
      <th class="text-center" scope="col">Item Name</th>
      <th class="text-center" scope="col">Item Price</th>
      <th class="text-center" scope="col">Quantity</th>
      <th class="text-center" scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
      <?php
      $total = 0;
    if(isset($_SESSION['cart']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
          $sr = $key + 1;
        $total = $total + $value['Price'];
        echo "
          <tr>
            <td>$sr</td>
            <td>$value[Item_Name]</td>
            <td>$value[Price]</td>
            <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
            <td>
            <form action='manage_cart.php' method='POST'>
                <button name='Remove_Item' class=' btn-outline-danger'>Remove</button>
                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
            </form>
            </td>
          </tr>
          
          
        ";
      }

    }

      ?>
    
  </tbody>
</table>
        </div>

        <div class="col-lg-3">
            <div>
            <h4>Total:</h4>
            <h5><?php echo $total ?></h5>
            <br>
            <form>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Pay With Card
                </label>
            </div>           
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Cash On Delivery
                </label>
            </div>
            <button class = " btn-primary btn-block"><a style="color: white; text-decoration:none;" href="payment.php">Proceed ToPay</a></button>

            </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>