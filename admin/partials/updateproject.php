<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'dbconnect.php';
    $pname = $_POST['pname'];
   
    $startdate = $_POST['date'];
    $plan = $_POST['plan'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $progress= $_POST['progress'];
    $desc = $_POST['desc'];
     $pid = $_POST['pid'];
     $uname = $_POST['uname'];
     $pnumber = $_POST['pnumber'];
     $city  = $_POST['city'];
     $state  = $_POST['state'];
     $pincode  = $_POST['pincode'];
     $country  = $_POST['country'];
     $pname  = $_POST['pname'];
     $traffic  = $_POST['traffic'];
     $earning  = $_POST['earning'];
     $expenses  = $_POST['expenses'];
     $k1  = $_POST['k1'];
     $k2  = $_POST['k2'];
     $k3  = $_POST['k3'];
     $k4  = $_POST['k4'];
     $k5  = $_POST['k5'];
    echo $k1;
    echo $k2;
    echo $pid;
    $sql = "UPDATE `project_details` SET `pname`='$pname',`name`='$uname',`phone`='$pnumber',`city`='$city',`state`='$state',`pincode`='$pincode',`country`='$country',`traffic`='$traffic',`earning`='$earning',`expenses`='$expenses',`k1`='$k1',`k2`='$k2',`k3`='$k3',`k4`='$k4',`k5`='$k5' WHERE `pid`='$pid'";
    $result = mysqli_query($con,$sql);


    $sql2 = "UPDATE `project` SET `pname`='$pname',`startdate`='$startdate',`plan`='$plan',`email`='$email',`url`='$url',`progress`='$progress',`desc`='$desc' WHERE `pid`='$pid'";
    $result2 = mysqli_query($con,$sql2);

    if($result){
        header('location:../project_settings.php?pid='.$pid.'');
        //   'success';
    }
    
    if($result2){
        header('location:../project_settings.php?pid='.$pid.'');
        //   'success';
    }
}else{
    header('l ocation:../project_settings.php?pid='.$pid.'');
}
?>