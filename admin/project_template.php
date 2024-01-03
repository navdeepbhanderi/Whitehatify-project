<?php 
        include 'partials/dbconnect.php';
        ob_start();
        $ano = $_SESSION['ano'];
        $existsql = "Select * from admin where `ano` = '$ano'";
        $result = mysqli_query($con,$existsql);
    
        while($row = mysqli_fetch_array($result)){
            $permission = $row['permission'];
        }
        $permissions = explode(",",$permission);
        if(in_array('Dashboard',$permissions)){

                        
            $pid = $_GET['pid'];
            $sql = "select * from project where pid = '$pid'";
            $result = mysqli_query($con,$sql);
            while($row= mysqli_fetch_array($result)){
                $pname = $row['pname'];
                $img = $row['img'];
                $startdate = $row['startdate'];
                $plan = $row['plan'];
                $email = $row['email'];
                $url = $row['url'];
                $progress= $row['progress'];
                $desc = $row['desc'];
                $desc1= substr($desc,0,95);
            $desc2= substr($desc,95);
            }


            $sql1 = "select * from project_details where pid = '$pid'";
            $result1 = mysqli_query($con,$sql1);
            while($row= mysqli_fetch_array($result1)){
                $uname = $row['name'];
                $phone = $row['phone'];
                $state = $row['state'];
                $traffic = $row['traffic'];
                $earning = $row['earning'];
                $expenses = $row['expenses'];
                $k1 = $row['k1'];
                $k2 = $row['k2'];
                $k3 = $row['k3'];
                $k4 = $row['k4'];
                $k5 = $row['k5'];
                $city = $row['city'];
                $state = $row['state'];
                $pincode = $row['pincode'];
                $country = $row['country'];
                $date = $row['date'];

            }


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
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="/admin/home.php" class="flex ml-2 ">
          <img src="img/white.png"  class="h-10 mr-3" alt="FlowBite Logo" />
        </a>
        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Whitehatify</span>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ml-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="partials/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>
    
<div class="px-4 pt-4  pb-0 " style="    margin: 4rem 2rem 0rem;"> 
    <a href="home.php" class=" font-midium btn "style="background-color: white; margin-bottom:10px;" ><img width="16px" src="img/back.png"></a>

    <div class="card card-custom gutter-b">
        <div class="card-body">
            <div class="d-flex">
                <!--begin: Pic-->
                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                    <div class="symbol symbol-50 symbol-lg-120">
                        <img alt="Pic" style="border-radius: 10px;" src="adminimg/<?php echo $img;  ?>">
                    </div>
                    <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                        <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                    </div>
                </div>
                <!--end: Pic-->
                <!--begin: Info-->
                <div class="flex-grow-1">
                    <!--begin: Title-->
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="mr-3">
                            <!--begin::Name-->
                            <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo $pname; ?>
                            <img src="img/tick-mark.png"  width="18px" class=" text-success icon-md ml-2"></a>
                            <!--end::Name-->
                            <!--begin::Contacts-->
                            <div class="d-flex flex-wrap my-2">
                                <a href="#" class="d-flex icon-text font-midium text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0  ">
                                <span class="font-midium svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span><?php  echo $email; ?></a>
 
                                <a href="#" class="d-flex icon-text  font-midium text-muted text-hover-primary font-weight-bold">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span><?php echo $state.", ".$country;?></a>
                            </div>
                            <!--end::Contacts-->
                        </div>
                        <div class="my-lg-0 my-1">
                            <a href="<?php if(isset($_GET['pid'])){echo "project_docs.php?pid=".$_GET['pid'];} ?>" class="font-minimum btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">Reports</a>
                            <a href="#" class="font-minimum btn btn-sm btn-info font-weight-bolder text-uppercase">New Task</a>
                        </div>
                    </div>
                    <!--end: Title-->
                    <!--begin: Content-->
                    <div class=" font-midium d-flex align-items-center flex-wrap justify-content-between">
                        <div class="font-midium flex-grow-1 font-weight-bold text-dark-50 py-8 py-lg-4 mr-5"><?php  echo $desc; ?> </div>
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex align-items-center mr-10">
                                <div class="mr-6">
                                    <div class="font-midium font-weight-bold mb-2">Start Date</div>
                                    <span class="font-minimum btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold"><?php echo $startdate ?></span>
                                </div>
                                <div class="">
                                    <div class="font-midium font-weight-bold mb-2">Due </div>
                                    <span class="font-minimum btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold"><?php echo $plan;  ?></span>
                                </div>
                            </div>
                            <div class="flex-grow-1 flex-shrink-0 w-250px w-xl-300px  mt-sm-0">
                                <span class="font-weight-bold">Progress</span>
                                <div class="progress progress-xs mt-2 mb-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php  echo $progress; ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="font-weight-bolder text-dark"><?php  echo $progress; ?>%</span>
                            </div>
                        </div>
                    </div>
                    <!--end: Content-->
                </div>
                <!--end: Info-->
            </div>
            <div class="separator separator-solid my-5"></div>
            <!--begin: Items-->
            <div class="d-flex align-items-center flex-wrap">
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <img src="img/piggy-bank.png" class="text-muted img-small icon-2x text-muted font-weight-bold" width="28px">
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-midium font-weight-bolder font-size-sm">Earnings</span>
                        <span class="font-minimum text-dark-50 font-weight-bold">₹<span class="font-midium" ><?php echo $earning;  ?></span></span>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <img src="img/confetti.png" class="img-small icon-2x text-muted font-weight-bold" width="28px">
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-midium font-weight-bolder font-size-sm">Expenses</span>
                        <span class="font-minimum text-dark-50 font-weight-bold">₹<span class="font-midium" ><?php echo $expenses;  ?></span></span>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <img src="img/pie-chart.png" class="img-small icon-2x text-muted font-weight-bold" width="28px">
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-midium font-weight-bolder font-size-sm">Weekly Traffic</span>
                        <span class="font-minimum text-dark-50 font-weight-bold"><span class="font-midium" ><?php echo $traffic ?></span></span>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <img src="img/document.png" class="img-small icon-2x text-muted font-weight-bold" width="28px"">
                    </span>
                    <div class="d-flex flex-column flex-lg-fill">
                        <span class="font-midium text-dark-75 font-weight-bolder font-size-sm">73 Tasks</span>
                        <a href="#" class="font-minimum text-primary font-weight-bolder">View</a>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <img src="img/chat.png" class="img-small icon-2x text-muted font-weight-bold" width="28px">
                    </span>
                    <div class="d-flex flex-column">
                        <span class="font-midium text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
                        <a href="#" class="font-minimum text-primary font-weight-bolder">View</a>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill my-1">
                    <span class="mr-4">
                        <img src="img/networking.png" class="img-small icon-2x text-muted font-weight-bold" width="28px"">
                  
                    </span>
                    <div class="symbol-group symbol-hover">
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Mark Stone">
                            <img alt="Pic"  src="img/1.jpg">
                        </div>
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Charlie Stone">
                            <img alt="Pic" src="img/11.jpg">
                        </div>
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Luca Doncic">
                            <img alt="Pic" src="img/111.jpg">
                        </div>
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Nick Mana">
                            <img alt="Pic" src="img/1111.jpg">
                        </div>
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Teresa Fox">
                            <img alt="Pic" src="img/11111.jpg">
                        </div>
                        <div class="symbol symbol-30 symbol-circle symbol-light">
                            <span class="symbol-label font-weight-bold">5+</span>
                        </div>
                    </div>
                </div>
                <!--end: Item-->
            </div>
            <!--begin: Items-->
        
        <div class="separator separator-solid my-5"></div>

        <div class="d-flex overflow-auto">
										<!--begin::Nav links-->
										<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 flex-nowrap">
											<!--begin::Nav item-->
											<li class="nav-item">
												<a class="font-midium nav-link text-active-primary me-6" href="<?php if(isset($_GET['pid'])){echo "viewproject.php?pid=".$_GET['pid'];} ?>">Overview</a>
											</li>
											<!--end::Nav item-->
											<!-- <li class="nav-item">
												<a class="font-midium nav-link text-active-primary me-6" href="">Insignts</a>
											</li> -->
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item">
												<a class="font-midium nav-link text-active-primary me-6" href="<?php if(isset($_GET['pid'])){echo "project_user.php?pid=".$_GET['pid'];} ?>">Developer</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item">
												<a class="font-midium nav-link text-active-primary me-6" href="<?php if(isset($_GET['pid'])){echo "project_docs.php?pid=".$_GET['pid'];} ?>">Report</a>
											</li>
											<!--end::Nav item-->
										
											<li class="nav-item">
												<a class="font-midium nav-link text-active-primary me-6" href="<?php if(isset($_GET['pid'])){echo "project_settings.php?pid=".$_GET['pid'];} ?>">Settings</a>
											</li>
											<!--end::Nav item-->
										</ul>
										<!--end::Nav links-->
									</div>
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
