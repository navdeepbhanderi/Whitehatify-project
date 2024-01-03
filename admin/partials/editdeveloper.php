<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
require 'dbconnect.php';
error_reporting (0);

    $pid = $_POST['pid5'];
    $did = $_POST['did5'];
    $dname2 = $_POST['dname5'];
    $post2 = $_POST['post5'];
    $desc2 = $_POST['desc5'];
    $email2 = $_POST['email5'];
    $phone2 = $_POST['pnumber5'];
    $location2 = $_POST['location5'];

    
    $existsql = "UPDATE `project_developer` SET `dname`='$dname2',`post`='$post2',`desc`='$desc2',`email`='$email2',`phone`='$phone2',`location`='$location2' WHERE `did` = '$did'";
    $result = mysqli_query($con,$existsql);

    if($result){
         header('location:../project_user.php?pid='.$pid.'');
    }
}
?>