
 <?php 
 session_start();
 ob_start();
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
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.bundle.min.css">

    
</head>

<body>


<?php

    include 'project_template.php';
?>

<div class="container1 mb-10 d-flex">
	<form action="partials/report.php" class="d-flex" method="post" enctype="multipart/form-data">
<div>
<div class="flex items-center justify-center w-full" style="width:30rem;">
    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">DOCS, PNG, JPG or PDF (MAX. 800x400px)</p>
        </div>
        <input  type="hidden" name="email" value="<?php echo $email;?>" />
        <input  type="hidden" name="pid" value="<?php echo $pid;?>" />
        <input id="dropzone-file" type="file" required name="file" class="hidden" />
    </label>
</div>
</div>
<div class="ml-10">
<p class="d-flex icon-text  text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0  ">
                                <span style="transform: translate(0px, -2px);" class="h6 svg-icon svg-icon-lg svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24px" height="24px"></rect>
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
                                            <circle fill="#000000" opacity="0.8" cx="19.5" cy="17.5" r="2.5"></circle>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span><?php echo $email; ?></p>

								<input type="submit" class="font-minimum btn btn-sm btn-info font-weight-bolder text-uppercase" value="Send Report">

</div>
</div>
</form>

<div class="container1">
<div class="row g-6 g-xl-9 mb-6 mb-xl-9">

	<?php
require 'partials/dbconnect.php';
$pid = $_GET['pid'];
$sql5 = "select * from report where pid='$pid'";
$result5 = mysqli_query($con,$sql5);
while($row = mysqli_fetch_array($result5)){
	$filename = $row['filename'];
	$date = $row['date'];
	$fileTitle= substr($filename, 0, strpos($filename, "."));

	if (($pos = strpos($filename, ".")) !== FALSE) { 
		$whatIWant = substr($filename, $pos+1); 
	}

?>

									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3 mb-8">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="reports/<?php echo $filename; ?>" target="_blank" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="d-flex justify-content-center symbol symbol-60px mb-5">
														<img src="img/<?php  echo strtolower($whatIWant); ?>.svg" alt="">
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2"><?php  echo $fileTitle; ?></div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400"><?php  echo $date; ?></div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									

									<?php

}
?>
									<!--end::Col-->
									<!--begin::Col-->
								
									<!--end::Col-->
								</div>

</div>
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
        ob_end_flush();
?>