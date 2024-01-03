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
	<div id="large-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Add Developer
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="large-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
			<form action="partials/adddeveloper.php" method="post" class="form" id="kt_form">
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Developer Name</label>
       <div class="col-9">
		<input type="hidden" name="pid"  value="<?php echo $pid; ?>">
        <input class="form-control form-control-solid" required type="text" placeholder="Enter Developer name" name="dname2"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Post</label>
       <div class="col-9">
        <input class="form-control form-control-solid" required type="text" placeholder="Enter Post" name="post2"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Description</label>
       <div class="col-9">
        <textarea rows="3" class="form-control form-control-solid" required type="text"  placeholder="Enter Description" name="desc2"></textarea>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Email</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="email" required  placeholder="Enter Email" name="email2"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Phone</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required maxLength="10"  placeholder="Enter Phone Number" name="pnumber2"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Location</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter Location" name="location2"/>
       </div>
</div>

</div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <input data-modal-hide="large-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Add Developer" >
                <button data-modal-hide="large-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
	</form>
</div>
    <div class="d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
							<div class="container1 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Details-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Developers</h5>
									<!--end::Title-->
									<!--begin::Separator-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
									<!--end::Separator-->
									<!--begin::Search Form-->
									<div class="d-flex align-items-center" id="kt_subheader_search">
										<span class="text-dark-50 font-weight-bold " id="kt_subheader_total"></span>
										
											<div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
												<input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search...">
												<div class="input-group-append">
													<span class="input-group-text">
														<span class="svg-icon">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																	<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
														<!--<i class="flaticon2-search-1 icon-sm"></i>-->
													</span>
												</div>
											</div>
									
									</div>
									<!--end::Search Form-->
								
								</div>
								<!--end::Details-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Button-->
									<a href="#" class=""></a>
									<!--end::Button-->
									<!--begin::Button-->
									<button data-modal-target="large-modal" data-modal-toggle="large-modal" class="btn btn-light-primary font-weight-bold ml-2">Add Developer</button>
									<!--end::Button-->
									<!--begin::Dropdown-->
									<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
										<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</a>
										
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container1">
								<!--begin::Row-->
								<div class="row">

			<?php
				require 'partials/dbconnect.php';
				$pid = $_GET['pid'];
				$sql4 = "select * from project_developer where pid='$pid'";
				$result4 = mysqli_query($con,$sql4);
				while($row = mysqli_fetch_array($result4)){
					$did = $row['did'];
					$dname4 = $row['dname'];
					$post4 = $row['post'];
					$desc4 = $row['desc'];
					$email4 = $row['email'];
					$phone4 = $row['phone'];
					$location4 = $row['location'];
					$dname6 = substr($dname4,0,1); 
			?>
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-10  " style="display:flex; flex-direction:column;  justify-content: space-between;">

												<div>
												
			
													<!--begin::User-->
													<div class="d-flex align-items-end mb-7">
														<!--begin::Pic-->
														<div class="d-flex align-items-center">
															<!--begin::Pic-->
															<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
																<div class="symbol symbol-circle symbol-lg-75">
																<span class="symbol-label font-size-h3 font-weight-boldest"><?php echo strtoupper($dname6); ?></span>
																</div>
																<div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
																	<span class="font-size-h3 font-weight-boldest"></span>
																</div>
															</div>
															<!--end::Pic-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?php echo $dname4 ?></a>
																<span class="text-muted font-weight-bold"><?php echo $post4 ?></span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Title-->
													</div>
													<!--end::User-->
													<!--begin::Desc-->
													<p class="mb-7"><?php echo $desc4 ?></p>
													<!--end::Desc-->
													<!--begin::Info-->
													<div class="mb-7">
														<div class="d-flex justify-content-between align-items-center">
															<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
															<a href="#" class="text-muted text-hover-primary"><?php echo $email4 ?></a>
														</div>
														<div class="d-flex justify-content-between align-items-cente my-1">
															<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
															<a href="#" class="text-muted text-hover-primary"><?php echo $phone4 ?></a>
														</div>
														<div class="d-flex justify-content-between align-items-center">
															<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
															<span class="text-muted font-weight-bold"><?php echo $location4 ?></span>
														</div>
													</div>
												</div>
												<!--end::Info-->
												<div>
												<button  data-modal-target="large-modal<?php echo $did; ?>" data-modal-toggle="large-modal<?php echo $did; ?>" type="button" class="btn btn-block btn-sm btn-light-primary font-weight-bolder text-uppercase py-4">Edit Profile</button>
												<a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">write message</a>
												</div>

												<div id="large-modal<?php echo $did; ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Edit Developer
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="large-modal<?php echo $did; ?>">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
			<form action="partials/editdeveloper.php" method="post" class="form" id="kt_form">
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6"> Developer Name</label>
       <div class="col-9">
		<input type="hidden" name="did5"  value="<?php echo $did; ?>">
		<input type="hidden" name="pid5"  value="<?php echo $pid; ?>">

        <input class="form-control form-control-solid" required type="text" value="<?php echo $dname4; ?>" placeholder="Enter Developer name" name="dname5"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Post</label>
       <div class="col-9">
        <input class="form-control form-control-solid" required type="text" value="<?php echo $post4; ?>" placeholder="Enter Post" name="post5"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Description</label>
       <div class="col-9">
        <textarea class="form-control form-control-solid" rows="3" required type="text" placeholder="Enter Description" name="desc5"><?php echo $desc4; ?></textarea>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Email</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="email" required value="<?php echo $email4; ?>"  placeholder="Enter Email" name="email5"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Phone</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required maxLength="10" value="<?php echo $phone4; ?>" placeholder="Enter Phone Number" name="pnumber5"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Location</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter Location" value="<?php echo $location4; ?>" name="location5"/>
       </div>
</div>

</div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <input data-modal-hide="large-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Add Developer" >
                <button data-modal-hide="large-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
	</form>
</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									
									<?php
										}
									?>
									<!--end::Col-->
								</div>
						

							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
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