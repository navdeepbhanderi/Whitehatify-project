<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    require 'dbconnect.php';
     $ano = $_GET['ano'];
    $existsql = "delete from `admin` where `ano` = '$ano'";
    $result = mysqli_query($con,$existsql);

    if($result){
        header('location:../viewadmin.php');
    }
}else{
    header('location:../viewadmin.php');
}
?>