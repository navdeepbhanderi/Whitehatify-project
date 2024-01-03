<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    error_reporting (0);
    include 'dbconnect.php';
session_start();
     $sno = $_SESSION['sno'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $url = $_POST['url'];
     $desc = $_POST['desc'];
    

    $sql = "INSERT INTO `userrequest` (`sno`, `email`, `phoneNo`, `name`, `description`,`status`, `url`) VALUES ('$sno', '$email', '$contact', '$name', '$desc','Pending', '$url');";
    $result = mysqli_query($con,$sql);
     
     
     
    $to_email = $email;
    $subject = "Thank You!";
    $body = "   We have received your request for consultation. Our team experts will get in touch with you shortly.";
    $headers = "whitehatifyservices@gmail.com";
    
    include 'test.php';
                if(smtp_mailer($to_email,$subject,$body)){
                  header('location:../index.php');
                }
                else{
                   header('location:../index.php');
                }

    // if(mail($to_email, $subject, $body, $headers)){
    //     header('location:../index.php');
    // }
}else{
    header('location:../index.php');
}

?>