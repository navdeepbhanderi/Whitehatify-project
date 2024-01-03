<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'dbconnect.php';
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

    $sql = "INSERT INTO `project_details`(`pid`, `pname`, `name`, `phone`, `city`, `state`, `pincode`, `country`, `traffic`, `earning`, `expenses`, `k1`, `k2`, `k3`, `k4`, `k5`) VALUES ('$pid','$pname','$uname','$pnumber','$city','$state','$pincode','$country','$traffic','$earning','$expenses','$k1','$k2','$k3','$k4','$k5')";
    $result = mysqli_query($con,$sql);

    echo mysqli_error($con);
    if($result){
        header('location:../viewproject.php?pid='.$pid.'');
    }
}else{
    header('location:../viewproject.php?pid='.$pid.'');

}
?>