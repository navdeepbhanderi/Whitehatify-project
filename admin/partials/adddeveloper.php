<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
require 'dbconnect.php';
error_reporting (0);

    $pid = $_POST['pid'];
    $did = $_POST['did'];
    $dname2 = $_POST['dname2'];
    $post2 = $_POST['post2'];
    $desc2 = $_POST['desc2'];
    $email2 = $_POST['email2'];
    $phone2 = $_POST['pnumber2'];
    $location2 = $_POST['location2'];

    $existsql = "INSERT INTO `project_developer`(`pid`,`dname`, `post`, `desc`, `email`, `phone`, `location`) VALUES ('$pid','$dname2','$post2','$desc2','$email2','$phone2','$location2')";
    $result = mysqli_query($con,$existsql);

    if($result){
         header('location:../project_user.php?pid='.$pid.'');
    }
}
else{
    header('location:../project_user.php?pid='.$pid.'');
}
?>