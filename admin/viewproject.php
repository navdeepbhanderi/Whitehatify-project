<?php 
ob_start();
 session_start();
        include 'partials/dbconnect.php';

        $ano = $_SESSION['ano'];
        $existsql = "Select * from admin where `ano` = '$ano'";
        $result = mysqli_query($con,$existsql);
    
        while($row = mysqli_fetch_array($result)){
            $permission = $row['permission'];
        }
        $permissions = explode(",",$permission);
        if(in_array('Dashboard',$permissions)){
				$pid = $_GET['pid'];

				$sql = "select * from project_details where pid = $pid";
				$result = mysqli_query($con,$sql);
				$row= mysqli_num_rows($result);
				if($row==0){
					header('location:addmoredetails.php?pid='.$pid.'');
				}
				else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="css/style.bundle.min.css">
 <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>

<?php
    include 'project_template.php';
?>

<div class="container1">
<div class="row">
<div class="col-lg-6">
											<!--begin::Charts Widget 1-->
											<div class="card card-custom card-stretch gutter-b">
												<!--begin::Header-->
												<div class="card-header h-auto border-0">
													<!--begin::Title-->
													<div class="card-title py-5">
														<h3 class="card-label">
															<span class="d-block text-dark font-weight-bolder">Recent Stats</span>
															<span class="d-block text-muted mt-2 font-size-sm">More than 400+ new members</span>
														</h3>
													</div>
													<!--end::Title-->
												
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body" style="position: relative;">
													<!--begin::Chart-->
													<div id="chart1"></div>
													<!--end::Chart-->
												<!--end::Body-->
											</div>
											<!--end::Charts Widget 1-->
										</div>
	</div>	
								
									<div class="col-lg-6">
											<!--begin::Card-->
											<div class="card card-custom gutter-b">
												<div class="card-header">
													<div class="card-title">
														<h3 class="card-label">Mixed Chart</h3>
													</div>
												</div>
												<div class="card-body" style="position: relative;">
													<div id="chart">
														
													</div>
												</div>
											<!--end::Card-->

							</div>
								
								</div>
</div>


<div class="row " style="margin:0rem 2rem;">
	
								
</div>
<script src="js/chart.js"></script>

</body>

</html>
<?php
}

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
ob_end_flush();
?>