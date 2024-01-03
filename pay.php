<?php 
session_start();
require('razorpay-php/Razorpay.php'); require("config.php");
      ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment - WhiteHatify</title>
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Poppins&display=swap');
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    margin: 0px;
    padding: 0px;
}

body{
    background: #EEF0F8;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container{
    width:400px;
    background-color: white;
    border-radius: 6px;
}

.header{
    padding: 18px 30px;
    display: flex;
    align-items: center;
}
.header .title h4{
    font-weight: 500;
    font-size: 1rem;
    color: #181C32;
}
.header .title{
    margin-left: 12px;
}
.header .title p{
    font-size: 0.8rem;
    color: #B5B5C3 !important;
}
.body{
    border-top: 1px solid #EBEDF3;

    padding: 12px 30px;
}
.footer{
    border-top: 1px solid #EBEDF3;
    padding: 18px 30px;
}
.row{
    display: flex;
    width: 100%;
}
.col1{
    width: 38%;
    padding: 10px 0px;
}
.col1 p{
    font-size: 0.9rem;
    color: #181C32;
}
.col2 p{
    font-weight: 500;
    font-size: .9rem;
    color: #181C32;
}
.col2{
    width: 62%;
    padding: 10px 0px;

}

.razorpay-payment-button{
    color: #ffffff;
    background-color: #8950FC;
    border-color: #8950FC;
    -webkit-box-shadow: none;
    box-shadow: none;
    display: inline-block;
    font-weight: normal;
    color: #3F4254;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    padding: 0.30rem .8rem;
    font-size: 1rem;
    cursor: pointer;
    line-height: 1.5;
    border-radius: 0.42rem;
    -webkit-transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
    transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
    transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
    color: #ffffff;
}

  </style>
</head>
<body>

<hr>
<?php 
include("gateway-config.php");
//Razorpay//
use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);
$firstname=$_SESSION['fname']; 
$url=$_SESSION['url'];
 $email=$_SESSION['emails'];
$plan=$_SESSION['plan'];
           $price=$_SESSION['amount'];
           $_SESSION['price']=$price;
           $title='plan';  
$webtitle='WhiteHatify'; // Change web title
$displayCurrency='INR';
$imageurl='https://technosmarter.com/assets/images/Avatar.png'; //change logo from here
$orderData = [
    'receipt'         => 3456,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];
$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $webtitle,
    "description"       => $title,
    "image"             => $imageurl,
    "prefill"           => [
    "name"              => $firstname,
    "email"             => $email,
    "plan"           => $plan,
    ],
    "notes"             => [
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);


 ?>
				<!-- <div class="row"> 
					<div class="col-8"> 
            <h4>(Payer Details)</h4>
  <div class="mb-3">
    <label  class="label">First Name :- </label>
     
  </div>
  <div class="mb-3">
    <label class="label">url:- </label>
      
  </div>

  <div class="mb-3">
    <label class="label">Email:- </label>
      
  </div>
  <div class="mb-3">
    <label class="label">plan:- </label>
      
  </div>
  <div class="mb-3">
    <label class="label">Amount:- </label>
     
  </div>
					</div>
					<div class="col-4 text-center">
				<br>
				  <center> -->

          <div class="container">
        <div class="header">
            <div class="logo">
              <img src="img/white.png" width="40px" style="filter:invert(1);" alt="">
            </div>
            <div class="title">
                <h3>WhiteHatify</h3>
                <p>Payment Details</p>
            </div>
        </div>
        <div class="body">
            <div class="row">
                <div class="col1"><p>Name:</p></div>
                <div class="col2"><p><?php echo $firstname; ?></p></div>
            </div>
            <div class="row">
                <div class="col1"><p>Website URL:</p></div>
                <div class="col2"><p><?php echo $url; ?></p></div>
            </div>
            <div class="row">
                <div class="col1"><p>Email:</p></div>
                <div class="col2"><p><?php echo $email; ?></p></div>
            </div>
            
            <div class="row">
                <div class="col1"><p>Plan:</p></div>
                <div class="col2"><p><?php echo $plan; ?></p></div>
            </div>
            <div class="row">
                <div class="col1"><p>Amount</p></div>
                <div class="col2"><p> <?php echo $price; ?>₹</p></div>
            </div>
        </div>

        <div class="footer">
        <form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.plan="<?php echo $data['prefill']['plan']?>"
    data-notes.shopping_order_id="<?php echo '1';?>"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="<?php echo '1'?>">
</form>
        </div>
    </div>

   
</body>
</html>