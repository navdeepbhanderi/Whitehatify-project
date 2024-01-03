<?php
    ob_start();
    include 'partials/sidebar.php';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'true'){
        include 'partials/dbconnect.php';

        $ano = $_SESSION['ano'];
        $existsql = "Select * from admin where `ano` = '$ano'";
        $result = mysqli_query($con,$existsql);
    
        while($row = mysqli_fetch_array($result)){
            $permission = $row['permission'];
        }
        $permissions = explode(",",$permission);
        if(in_array('Dashboard',$permissions)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WhiteHatify AdminPanel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">

</head>
<body>

<div class="p-4 mt-8 flex flex-wrap sm:ml-64">
<?php
$sql = "Select * from project";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
    $pid = $row['pid'];
    $pname = $row['pname'];
    $url = $row['url'];
    $img = $row['img'];
    $progress = $row['progress']; 
    $startdate = $row['startdate'];
    $plan = $row['plan'];
    $desc = $row['desc'];

?>

 <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                        <img src="adminimg/<?php echo $img; ?>" width="55px" alt="image">
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="d-flex flex-column mr-auto">
                        <!--begin: Title-->
                        <div class="d-flex flex-column mr-auto">
                            <a href="viewproject.php?pid=<?php echo $row['pid'] ?>" class="font-big text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1"><?php echo $pname; ?></a>
                            <span class="font-midium text-muted font-weight-bold"><?php echo $row['email']; ?></span>
                            
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Info-->
                  
                </div>
                <!--end::Info-->
                <!--begin::Description-->
                <div class="font-midium mb-6 mt-5 font-weight-bold"><?php echo $desc; ?></div>
                <!--end::Description-->
                <!--begin::Data-->
                <div class="d-flex mb-5">
                    <div class="d-flex align-items-center mr-7">
                        <span class="font-midium font-weight-bold mr-4">Start</span>
                        <span class=" font-minimum btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text"><?php echo $startdate;  ?></span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="font-midium font-weight-bold mr-4">Due</span>
                        <span class="font-minimum btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text"><?php echo $plan ;  ?></span>
                    </div>
                </div>
                <!--end::Data-->
                <!--begin::Progress-->
                <div class="d-flex mb-5 align-items-cente">
                    <span class="font-midium d-block font-weight-bold mr-5">Progress</span>
                    <div class="d-flex flex-row-fluid align-items-center">
                        <div class="progress progress-xs mt-2 mb-2 w-100">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $progress; ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="font-midium ml-3 font-weight-bolder"><?php echo $progress; ?>%</span>
                    </div>
                </div>
                <!--ebd::Progress-->
                <div class="mt-6">
                  
                    <a href="viewproject.php?pid=<?php echo $row['pid'] ?>" class="font-minimum btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase">view project</a>
                                                    </div>
           
                                                        
            </div>
            <!--end::Body-->
        </div>
        <!--end:: Card-->
    </div>

<?php
}
?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>

<?php
        }
        elseif(in_array('Project',$permissions)){
        header('location:addproject.php');
        }
        elseif(in_array('Consultation',$permissions)){
          header('location:consultation.php');
        }
        elseif(in_array('Payment',$permissions)){
        header('location:payment.php');
        }
        elseif(in_array('Review',$permissions)){
        header('location:review.php');
        }
        elseif(in_array('ManageUser',$permissions)){
        header('location:user.php');
        }
        elseif(in_array('ManageAdmin',$permissions)){
        header('location:addadmin.php');
        }
        
        
    }
    else{
        header('location:index.php');
    }
    ob_end_flush();
    ?>