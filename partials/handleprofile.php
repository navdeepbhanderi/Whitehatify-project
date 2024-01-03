<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    require 'dbconnect.php';
    session_start();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address= $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $sno = $_SESSION['sno'];
    $sql = "UPDATE `user` SET `fname`='$fname',`lname`='$lname',`address`='$address',`city`='$city',`state`='$state',`pincode`='$pincode' WHERE `sno` = '$sno' ";
    $result = mysqli_query($con, $sql);

    if($result){
        header('location:../user_editprofile.php?update=true');
    }
    else{
        header('location:../user_editprofile.php?update=false');
    }
}else{
    header('location:../user_editprofile.php');
}
?>