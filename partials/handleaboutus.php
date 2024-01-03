<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    // error_reporting (0);
    include 'dbconnect.php';

      $subject = $_POST['subject'];
      $email = $_POST['email'];
      $message = $_POST['message'];

    $sql = "INSERT INTO `contactus`( `subject`, `email`, `message`) VALUES ('$subject','$email','$message')";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:../aboutus.php');
    }
    else{
        header('location:../aboutus.php');
    }
}else{
    header('location:../aboutus.php');
}

?>