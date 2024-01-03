<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
require 'dbconnect.php';
     $ano = $_POST['ano'];
     $fname = $_POST['fname'];
     $password = $_POST['password'];
     $hashpass = password_hash($password, PASSWORD_DEFAULT);

    $existsql = "UPDATE `admin` set `password` = '$hashpass' where `ano` = '$ano'";
    $result = mysqli_query($con,$existsql);

    if($result){
        header('location:../viewadmin.php?update=true');
    }
    else{
        header('location:../viewadmin.php?update=false');
    }
}else{
    header('location:../viewadmin.php');
}
?>