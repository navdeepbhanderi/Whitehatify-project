<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    require 'dbconnect.php';
   echo $uno = $_GET['uno'];
    $existsql = "delete from `review` where `rid` = '$uno'";
    $result = mysqli_query($con,$existsql);

    if($result){
        header('location:../review.php');
    }
}else{
    header('location:../review.php');
}
?>