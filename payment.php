<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment1.css">
    <title>Payment</title>
</head>
<body>
    <section class="payment-body">
        <div class="container">
            <div class="address-container">
                <div class="detailes-section">
                    <h2>Billing Address</h2>
                    <form>
                        <label>Full Name</label><br>
                        <input type="text" name="" class="full-name" placeholder="Full Name(Required)*"><br>

                        <label>Phone number</label><br>
                        <input type="tel" class="Phone" name="" placeholder="Phone number(Required)*"><br>

                    </form>
                </div>
                
                <div class="home-section">
                    <div class="home-left-section">
                        <form>
                            <input type="text" class="Pincode" placeholder="Pincode(Required)*"><br>
                            <input type="text" class="state" placeholder="State(Required)*"><br>
                        </form>
                    </div>
                    <div class="home-right-section">
                        <form>
                            <input type="text" name="" class="town" placeholder="Town"><br>
                             <input type="text" class="city" placeholder="City(Required)*"><br>
                        </form>
                    </div>
                </div>

                <div class="address-section">
                    <form>
                        <label>House</label><br>
                        <input type="text" class="house" placeholder="House No., Bulding Name (Required)*"><br>
                        <label>Road Name or Street Name</label><br>
                        <input type="text" class="road" placeholder="Road name/Street name,Area,Colony (Required)*">
                    </form>
                </div>

                <div class="button">
                    <button class="btn"><a style="text-decoration:none;" href="mycart.php">Back To cart</button></a>
                </div>
            </div>



            <div class="payment-container">
                
                <div class="holder-name">
                <h2>Payment Details</h2>
                <div class="payment-methods">
                    <div class="g-pay">
                        <img src="./images/g-pay.webp" alt="" height="90px" widht="100px">
                    </div>
                    <div class="paytm">
                        <img src="./images/paytm.jpg" alt="" height="90px" widht="100px">
                    </div>
                    <div class="ph-pay">
                        <img src="./images/ph-pay.png" alt="" height="90px" widht="100px">
                    </div>
                </div>
                <h4 class="or">or</h4>
                    <label>Cards Holder Name</label><br>
                    <input type="text" class="name" placeholder="Enter Name on Card"><br>
                </div>

                <div class="card-number">
                    <label>Card Number</label><br>
                    <input type="text" class="Card-number" placeholder="Card Number"><br>
                </div>

                <div class="expiry-detailes">
                    <div class="expiry-month">
                        <label>Exp Month</label><br>
                        <input type="text" class="month" placeholder="month"><br>
                    </div>
                    <div class="expiry-year">
                        <label>Exp Year</label><br>
                        <input type="text" class="year" placeholder="Year"><br>
                    </div>
                </div>

                <div class="cvv-number">
                    <label>CVV Number</label><br>
                    <input type="text" class="cvv" placeholder="Enter CVV"><br>
                </div>

                <div class="button-1">
                    <button class="btn-1">proceed</button>
                </div>

            </div>
        </div>

    </section>
</body>
</html>