<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
require 'dbconnect.php';

$showerror = "false";
     $fname = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];
 
    $permissions = $_POST['permissions'];

    if(!empty($permissions)){
    $permission = implode(",",$permissions);
    }
    else{
        $permission = " ";
    }
    

    $token = bin2hex(random_bytes(10));
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
    $existsql = "SELECT * FROM `admin` WHERE `email`='$email'";
    $result = mysqli_query($con,$existsql);
     $noofrow=mysqli_num_rows($result);
    if($noofrow>0){
        $showerror = "Emailareadyinuse";
         header("location:../addadmin.php?signupsuccess=false&alreadyinuse=true");
        echo $showerror;
    }
    else{
        if($password == $cpassword){
        $sql = "INSERT INTO `admin`(`fname`, `email`, `password`,`token`,`permission`)
        VALUES ('$fname','$email','$hashpass','$token','$permission')";
        $result = mysqli_query($con,$sql);
            if($result){
           
             header("location:../addadmin.php?signupsuccess=true");
            exit();
            }
        }
        else{
            // header("location:../signup.php");
             header("location:../addadmin.php?signupsuccess=false&passwordnotmatch=true");
        
        }
        
    }

}
else{
    header("location:../addadmin.php");
}

?>