<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - WhiteHatify</title>
    <link rel="stylesheet" href="css/payment.css">
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
</head>


<body>
    <?php include 'partials/nav.php'; ?>
    <div class=" main-payment">
        <div class="payment">
            <div>
                <h1>Whitehatify</h1>
                <ul>
            <li>Home</li>
                    <li>></li>
                    <li>Billing Details</li>
                </ul>
            </div>

            <div style="display: flex;    align-items: center;">
                <div class="biling-details">
                    <h4>Billing Details</h2>
                        <form action="" method="post">
                            <div class="namefield" style="display:flex;">
                                <div class="form">
                                    <input required type="text" id="fname" class="form__input" name="name"
                                        autocomplete="off" placeholder=" ">
                                    <label for="fname" class="form__label">First Name</label>
                                </div>
                            </div>
                            <div class="namefield" style="display:flex;">
                                <div class="form">
                                    <input required type="text" id="Email" class="form__input" name="email"
                                        autocomplete="off" placeholder=" ">
                                    <label for="Email" class="form__label">Email</label>
                                </div>
                            </div>


                            <div class="namefield" style="display:flex;">
                                <div class="form">
                                    <input required type="text" id="Web" class="form__input" name="url"
                                        autocomplete="off" placeholder=" ">
                                    <label for="Web" class="form__label">Website URL</label>
                                </div>
                            </div>
                          
                            <div class="namefield" style="display:flex;">
                                <div class="form">
                                    <select required  onchange="getSelectedValue()" id="plan-id" class="form__input"
                                        name="plan" id="SelectPlan">
                                        <option id="op1" value="Select a plan">Select a plan</option>
                                        <option value="STANDERD 3 Month - 5000₹">STANDERD 3 Month - 5000₹</option>
                                        <option value="STANDERD 6 Month - 9000₹">STANDERD 6 Month - 9000₹</option>
                                        <option value="ENHANCED 3 Month - 8000₹">ENHANCED 3 Month - 8000₹</option>
                                        <option value="ENHANCED 6 Month - 15000₹">ENHANCED 6 Month - 15000₹</option>
                                        <option value="ULTIMATE 3 Month - 12000₹">ULTIMATE 3 Month - 12000₹</option>
                                        <option value="ULTIMATE 6 Month - 20000₹">ULTIMATE 6 Month - 20000₹</option>
                                    </select>
                                    <label class="form__label" for="SelectPlan">Select Plan</label>
                                </div>
                            </div>



                </div>
                <div class="checkout">

                    <ul>
                        <div class="line"></div>
                        <li class="first-li">
                            <div class="container-li">
                                <div class="part1">
                                    <img width="30px" style="margin-right: 7px;" src="img/plan.png" alt="">
                                    <p>Website plan</p>
                                </div>
                                <div class="part2 flex">
                                    <p id="plan-rs" style="font-size:19px;">0 <b>₹</b></p>
                                </div>
                            </div>
                            <div class="container-price">
                                <div class="price mb-4 flex-between">
                                    <p class="price-txt">Subtotal</p>
                                    <p id="plan-rs2" class="price-txt"><b>0</b>₹</p>
                                </div>
                                <div class=" line2"></div>
                                <div class="price mb-4 flex-between">
                                    <p class="price-txt">Taxes</p>
                                    <p id="pricetex" class="price-txt">0%</p>
                                </div>
                                <div class=" line2"></div>
                                <div class="price flex-between">
                                    <p  class="price-txt"><b>Total price</b></p>
                                    <p id="plan-rs3-la" class="price-txt"><b>0</b>₹</p>
                                </div>
                                <div class="">
                                    <input type="submit" name="submit_form" value="Procced to continue " class="payment-btn" onclick="paymentstart()">
                                </div>
                                
                            </div>
                            
                        </li>
                        <div class="line"></div>
                    </ul>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    
<?php
    if(isset($_POST['submit_form']))
    {
       
    $_SESSION['fname']=$_POST['name']; 
    $_SESSION['url']=$_POST['url']; 
    $_SESSION['emails']=$_POST['email']; 
    $_SESSION['plan']=$plan =$_POST['plan']; 
    $int = preg_replace('/[^0-9]/', '', $plan);
    $planamount = substr($int, 1);
    $planamount=(int)$planamount; 
    $planamount = $planamount + $planamount * (5 / 100);
    $_SESSION['amount'] = $planamount;

    if($_POST['email']!='')
    {
    echo "<script>window.location.href='pay.php';</script>";
    exit;
    }
  
    }

?>
    <?php include 'partials/footer.php'; ?>

    <script src="js/payment.js"></script>
</body>

</html>