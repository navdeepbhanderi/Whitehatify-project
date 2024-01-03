<?php 
session_start();
require('partials/dbconnect.php');
require('razorpay-php/Razorpay.php'); require_once("config.php");
      ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Verification - WhiteHatify </title>
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

            <?php 
             error_reporting (0);
  
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
$success = true;
include("gateway-config.php");
$error = "Payment Failed";
if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}
if ($success === true)
{
 $firstname=$_SESSION['fname']; 
$url=$_SESSION['url'];
 $email=$_SESSION['email'];
 $plan=$_SESSION['plan'];
$productinfo='Payment';  

$posted_hash = $_SESSION['razorpay_order_id'];
    if(isset($_POST['razorpay_payment_id']))
        
    $txnid = $_POST['razorpay_payment_id'];
    $amount = $_SESSION['price'];
    $status='success'; 
  $eid=$_POST['shopping_order_id']; 
$subject='Your payment has been successful..';
       $key_value='okpmt'; 
  
$currency='INR';
$date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
$payment_date=$date->format('Y-m-d H:i:s');
     $sql="SELECT count(*) from payments WHERE txnid=:txnid"; 
       $stmt = $db->prepare($sql);
           $stmt->bindParam(':txnid', $txnid, PDO::PARAM_STR);
           $stmt->execute();
          $countts=$stmt->fetchcolumn();
  if($txnid!=''){
    if($countts<=0)
    {
      $sno = $_SESSION['sno'];
      
      $invoice ='WhiteHatify'.rand(0,1000);
      $sql="INSERT INTO `payments`(`invoice`, `sno`, `firstname`, `url`, `plan`, `amount`, `txnid`, `payer_email`, `currency`, `payment_date`, `status`) VALUES ('$invoice','$sno','$firstname','$url','$plan','$amount','$txnid','$email','$currency','$payment_date','$status')"; 
      $result = mysqli_query($con,$sql);
      if($result){
        $subject = "Payment Invoice - WhiteHatify";
        $body = "<!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8' />
                <title>A simple, clean, and responsive HTML invoice template</title>
        
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Poppins&display=swap');
        *, *::before, *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }btns{
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
                    .invoice-box {
                        max-width: 800px;
                        margin: auto;
                        padding: 30px;
                        border: 1px solid #eee;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                        font-size: 16px;
                        line-height: 24px;
                        font-family: 'Poppins', sans-serif;
                        color: #555;
                    }
        
                    .invoice-box table {
                        width: 100%;
                        line-height: inherit;
                        text-align: left;
                    }
        
                    .invoice-box table td {
                        padding: 5px;
                        vertical-align: top;
                    }
        
                    .invoice-box table tr td:nth-child(2) {
                        text-align: right;
                    }
        
                    .invoice-box table tr.top table td {
                        padding-bottom: 20px;
                    }
        
                    .invoice-box table tr.top table td.title {
                        font-size: 45px;
                        line-height: 45px;
                        color: #333;
                    }
        
                    .invoice-box table tr.information table td {
                        padding-bottom: 40px;
                    }
        
                    .invoice-box table tr.heading td {
                        background: #eee;
                        border-bottom: 1px solid #ddd;
                        font-weight: bold;
                    }
        
                    .invoice-box table tr.details td {
                        padding-bottom: 20px;
                    }
        
                    .invoice-box table tr.item td {
                        border-bottom: 1px solid #eee;
                    }
        
                    .invoice-box table tr.item.last td {
                        border-bottom: none;
                    }
        
                    .invoice-box table tr.total td:nth-child(2) {
                        border-top: 2px solid #eee;
                        font-weight: bold;
                    }
        
                    @media only screen and (max-width: 600px) {
                        .invoice-box table tr.top table td {
                            width: 100%;
                            display: block;
                            text-align: center;
                        }
        
                        .invoice-box table tr.information table td {
                            width: 100%;
                            display: block;
                            text-align: center;
                        }
                    }
        
                    /** RTL **/
                    .invoice-box.rtl {
                        direction: rtl;
                    }
        
                    .invoice-box.rtl table {
                        text-align: right;
                    }
        
                    .invoice-box.rtl table tr td:nth-child(2) {
                        text-align: left;
                    }
                </style>
            </head>
        
            <body>
                <div class='invoice-box'>
                    <table cellpadding='0' cellspacing='0'>
                        <tr class='top'>
                            <td colspan='2'>
                                <table>
                                    <tr>
                                        <td class='title' style='display: flex; align-items: center;'>
                                         <h6 style='margin: 0px;'>WhiteHatify</h6>
                                        </td>
        
                                        <td>    
                                            Created: ".$payment_date."<br/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
        
                        <tr class='information'>
                            <td colspan='2'>
                                <table>
                                    <tr>
                                       
        
                                        <td>
                                        Invoice Number: ".$invoice."<br />
                                        Transaction ID: ".$txnid."<br />
                                           First Name: ".$firstname."<br />
                                           Website URL: ".$url."<br />
                                           Seo Plan: ".$plan."<br />
                                           Amount: ".$amount."₹<br />
                                            


                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
        
                        
                        
                        <tr class='heading'>
                            <td>Item</td>
        
                            <td>Price</td>
                            </tr>
                            
                            <tr class='item'>
                                <td>Payment Method</td>
            
                                <td>RozerPay</td>
                            </tr>
            
                            <tr class='item'>
                            <td>Seo Plan</td>
        
                            <td>".$amount."₹</td>
                        </tr>
        
                        
        
                        <tr class='total'>
                            <td></td>
        
                            <td>Total: ".$amount."₹</td>
                        </tr> 
                    </table>
                </div>
            </body>
        </html>
        ";

        $header = 'MIME-Version: 1.0'."\r\n";
        $header .= 'Content-type: text/html;
        charset=iso-8859-1'."\r\n";

        mail($email, $subject, $body, $header);
      }
}
 // start 
        
$rows= $sql="SELECT * from payments WHERE txnid=:txnid"; 
         $stmt = $db->prepare($sql);
           $stmt->bindParam(':txnid',$txnid,PDO::PARAM_STR);
            $stmt->execute();
           $rows=$stmt->fetchAll();
foreach($rows as $row)
{
    $dbdate = $row['payment_date'];
}
//  echo '<tr>  
//           <th>Transaction ID:</th>
//         <td>'.$txnid.'</td> 
//     </tr>
//      <tr> 
//         <th>Paid Amount:</th>
//         <td>'.$amount.' '. $currency.'</td> 
//     </tr>
//     <tr>
//        <th>Payment Status:</th>
//         <td>'.$status.'</td> 
//    </tr>
//    <tr> 
//        <th>Payer Email:</th>
//        <td>'.$email.'</td> 
//    </tr>
//     <tr> 
//        <th>Name:</th>
//        <td>'.$firstname.'</td>
//    </tr>
   

//    <tr>
//        <th>Date :</th>
//        <td>'.$payment_date.'</td> 
//   </tr>
//   </table>';
}
 else 
 {
  $html = "<p><div class='errmsg'>Invalid Transaction. Please Try Again</div></p>";   
  $error_found=1;      
 }    
}
else
{
    $html = "<p><div class='errmsg'>Invalid Transaction. Please Try Again</div></p>
             <p>{$error}</p>";
             $error_found=1;
}

?>
			
            <div class='container'>
            <div class="header">
            <div class="logo">
              <img src="img/white.png" width="40px" style="filter:invert(1);" alt="">
            </div>
            <div class="title">
                <h3>WhiteHatify</h3>
                <p>Payment Status</p>
            </div>
            
        </div>
        <div class="body">
            <p><?php if(isset($html)){
echo $html;
}
else{
    echo "Payment Successfully";
} ?></p>
<span style=" display:flex; font-size: 0.8rem;color: #B5B5C3 !important;"><p>Your are redired in &nbsp; </p>  <p id="countdown">5</p> <p> &nbsp;seconds</p></span>
        </div>
        <div class='body'>
            <div class='row'>
                <div class='col1'><p>Name:</p></div>
                <div class='col2'><p><?php echo $firstname; ?></p></div>
            </div>
            <div class='row'>
                <div class='col1'><p>Payer Email:</p></div>
                <div class='col2'><p><?php echo $email; ?></p></div>
            </div>
            <div class='row'>
                <div class='col1'><p>Transaction ID:</p></div>
                <div class='col2'><p><?php echo $txnid; ?></p></div>
            </div>
            <div class='row'>
                <div class='col1'><p>Invoice Number</p></div>
                <div class='col2'><p><?php echo $invoice; ?></p></div>
            </div>
            <div class='row'>
                <div class='col1'><p>Paid Amount:</p></div>
                <div class='col2'><p><?php  echo $amount.' '. $currency; ?></p></div>
            </div>
            <div class='row'>
                <div class='col1'><p>Payment Status:</p></div>
                <div class='col2'><p><?php echo $status; ?></p></div>
            </div>
            <div class='row'>
                <div class='col1'><p>Date:</p></div>
                <div class='col2'><p><?php echo $payment_date; ?></p></div>
            </div>
        </div>
    </div>
<script>

function endCountdown() {
    window.location.href= 'index.php'; 
}
let counter = document.getElementById("countdown");

function handleTimer() {
  if(count === 0) {
    clearInterval(timer);
    endCountdown();
  } else {
    counter.textContent = `${count}`;
    console.log(count)
    count--;
  }
}


var count = Number(counter.textContent);
var timer = setInterval(function() { handleTimer(count); }, 1000);
</script>
</body>
</html>