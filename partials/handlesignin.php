<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$login = false;
$showError = false;
    include 'dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    // $sql = "Select * from users where email='$username' AND password='$password'";
    $sql = "Select * from user where email='$email'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result))
        {
            // if ($password == $row['password'])
            if(password_verify($password, $row['password']))
            { 
                
                session_start();
                $login = true;
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['fname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['sno'] = $row['sno'];
                if(isset($_SESSION['sno']))
                header("location:../index.php");
            } 
            else{
                header("location:../singin.php?loginsuccess=false&passnotmatch=true");
            }
        }
        
    } 
    else{
        header("location:../singin.php?loginsuccess=false&regfirst=true");
    }
}
else{
    header("location:../singin.php");
}

?>