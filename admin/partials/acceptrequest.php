<?php
    require 'dbconnect.php';

     $uno = $_GET['uno'];
    $existsql = "update userrequest set `status` = 'Accept' where `uno` = '$uno'";
    $result = mysqli_query($con,$existsql);
   
    if($result){
        header('location:../consultation.php');
    }
?>