<?php
 
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'dbconnect.php';
  
        $email = $_POST['email'];
        $sql = "Select * from user where email='$email'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);

        if($num){
            $row = mysqli_fetch_assoc($result);
             $username = $row['fname'];
             $token = $row['token'];

            $subject = "Password Reset";
            $body = "Hii $username. Click here to Reset Your Password http://whitehatifyin.000webhostapp.com/resetpassword.php?token1=$token";
           
            

           
                include 'test.php';
                if(smtp_mailer($email,$subject,$body)){
                  header('location:../recoveremail.php?email=found');
                }
                else{
                    header('location:../recoveremail.php?email=failed');
                }
               
               
               
            //   if(mail($email, $subject, $body, $header)){
            //     header('location:../recoveremail.php?email=found');
            // }else{
            //     header('location:../recoveremail.php?email=failed');
            // }

        }
        else{
            header('location:../recoveremail.php?email=notfound');
        }
      }else{
        header('location:../recoveremail.php');
    }
?>