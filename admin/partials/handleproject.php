<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'dbconnect.php';
      $pname = $_POST['pname'];
      $email = $_POST['email'];
      $url = $_POST['url'];
      $desc = $_POST['desc'];
      $date= $_POST['date'];
      $plan = $_POST['plan'];
      $progress = $_POST['progress'];
        if(isset($_FILES['image']['name']))
        {
                $image_name = $_FILES['image']['name'];
            if($image_name!="")
            {
                 $ext = end(explode('.',$image_name));

                 $image_name = $pname.rand(000,999).'.'.$ext;//e.g service_category_834.jpg
                
                  $src = $_FILES['image']['tmp_name'];

                  $dst = "../adminimg/".$image_name;

                //finally upload the image 
                 $upload = move_uploaded_file($src, $dst);
       
            }
        } else {
            $image_name = ""; //setting deafult value as a blank
        }

      
    
    $sql = "INSERT INTO `project`(`pname`, `img`, `startdate`, `plan`, `email`, `url`, `progress`,`desc`) VALUES ('$pname','$image_name','$date','$plan','$email','$url','$progress','$desc')";
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:../addproject.php?project=true');
    }
    else{
        header('location:../addproject.php?error=true');
    }
}
else{
    header('location:../addproject.php');
}
?>

