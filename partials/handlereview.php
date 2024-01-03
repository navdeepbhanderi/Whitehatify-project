<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
session_start();
    include 'dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['review'];
    $sno = $_POST['sno'];


    $sql = "INSERT INTO `review`(`sno`, `name`, `email`, `review`) VALUES ('$sno','$name','$email','$review')";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:../review.php?add=true');
    }
    else{
        header('location:../review.php?add=false');
    }
}else{
    header('location:../review.php');
}

?>