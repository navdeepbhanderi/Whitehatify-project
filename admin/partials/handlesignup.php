
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
require 'dbconnect.php';

$showerror = "false";
      $fname = $_POST['fname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];

    $token = bin2hex(random_bytes(10));
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
    $existsql = "SELECT * FROM `admin` WHERE `email`='$email'";
    $result = mysqli_query($con,$existsql);
     $noofrow=mysqli_num_rows($result);
    if($noofrow>0){
        $showerror = "Emailareadyinuse";
         header("location:../signup.php?signupsuccess=false&alreadyinuse=true");
      
    }
    else{
        if($password == $cpassword){
        $sql = "INSERT INTO `admin`(`fname`, `email`, `password`,`token`)
        VALUES ('$fname','$email','$hashpass','$token')";
        $result = mysqli_query($con,$sql);
            if($result){
          
             header("location:../signup.php?signupsuccess=true");
            exit();
            }
        }
        else{
            // header("location:../signup.php");
             header("location:../signup.php?signupsuccess=false&passwordnotmatch=true");
          
        }
    }
}
?>