<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
error_reporting (E_ALL ^ E_NOTICE);

require 'dbconnect.php';

$showerror = "false";
if($_SERVER['REQUEST_METHOD']=='POST'){

     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $address=$_POST['address'];
     $city=$_POST['city'];
     $country=$_POST['country'];
     $state=$_POST['state'];
     $pincode=$_POST['pincode'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];
    $token = bin2hex(random_bytes(10));
    $hashpass = password_hash($password, PASSWORD_DEFAULT);

    $existsql = "SELECT * FROM `user` WHERE `email`='$email'";
    $result = mysqli_query($con,$existsql);
     $noofrow=mysqli_num_rows($result);
    if($noofrow>0){
        $showerror = "Emailareadyinuse";
        header("location:../signup.php?signupsuccess=false&alreadyinuse=true");
       
    }
    else{
        if($password == $cpassword){
        $sql = "INSERT INTO `user`( `fname`, `lname`, `email`, `password`,`address`, `city`, `country`, `state`, `pincode`,`token`)
        VALUES ('$fname','$lname','$email','$hashpass','$address','$city','India','$state','$pincode','$token')";
        $result = mysqli_query($con,$sql);
            if($result){
           
            header("location:../signup.php?signupsuccess=true");
            exit();
            }
        }
        else{
            header("location:../signup.php?signupsuccess=false&passwordnotmatch=true");
        }
    }
}
}else{
    header("location:../signup.php");
}
?>