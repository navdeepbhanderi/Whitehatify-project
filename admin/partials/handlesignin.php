<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$login = false;
$showError = false;
    include 'dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
  
    // $sql = "Select * from users where email='$username' AND password='$password'";
    $sql = "Select * from admin where email='$email'";
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
                $_SESSION['adminname'] = $row['fname'];
                $_SESSION['email1'] = $row['email'];
                $_SESSION['ano'] = $row['ano'];
                
              
                $ano = $_SESSION['ano'];
                $existsql = "Select * from admin where `ano` = '$ano'";
                $result = mysqli_query($con,$existsql);
                
                while($row = mysqli_fetch_array($result)){
                    $permission = $row['permission'];
                }
                $permissions = explode(",",$permission);
                $_SESSION['permission'] = $permissions;
            if(in_array('Dashboard',$permissions)){
                    header("location:../home.php");
            }
            elseif(in_array('Project',$permissions)){
                header('location:../addproject.php');
            }
            elseif(in_array('Consultation',$permissions)){
                header('location:../consultation.php');
            }
            elseif(in_array('Payment',$permissions)){
                header('location:../payment.php');
            }
            elseif(in_array('Review',$permissions)){
                header('location:../review.php');
            }
            elseif(in_array('ManageUser',$permissions)){
                header('location:../user.php');
            }
            elseif(in_array('ManageAdmin',$permissions)){
                header('location:../addadmin.php');
            }
            } 
            else{
                header("location:../index.php?loginsuccess=false&passnotmatch=true");
            }
        }
        
    } 
    else{
        header("location:../index.php?loginsuccess=false&regfirst=true");
    }
}
else{
    header("location:../index.php");
}

?>


