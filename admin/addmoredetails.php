
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
ob_start();
include 'partials/dbconnect.php';
$pid=$_GET['pid'];


$ano = $_SESSION['ano'];
$existsql = "Select * from admin where `ano` = '$ano'";
$result = mysqli_query($con,$existsql);

while($row = mysqli_fetch_array($result)){
    $permission = $row['permission'];
}
$permissions = explode(",",$permission);
if(in_array('Dashboard',$permissions)){

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.bundle.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

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
          <img src="img/white.png" class="h-10 mr-3" alt="FlowBite Logo" />
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

<div class="container4 ">
<div class="col-lg-9"  style="    width: 100%;
    margin: auto;
    margin-top: 6rem;">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<!--begin::Form-->
                      <div class="card card-custom card-sticky" id="kt_page_sticky_card">
          <div class="card-header">
            <div class="card-title">
            <h3 class="card-label d-flex">
            <img src="img/list.png" width="18px" style="opacity: 0.4;" class="mr-4" alt="">
              Add more project details to reach out
            </h3>
            </div>

            
  
  </div>
 </div>
 <div class="card-body">
  <!--begin::Form-->
  <form action="partials/handlemoredetails.php" method="post" class="form" id="kt_form">
   <div class="row">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
    <div class="my-5">
      <h3 class=" text-dark font-weight-bold mb-10">User Info:</h3>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">User Name</label>
       <div class="col-9">
        <input type="hidden" name="pid" value="<?php echo $pid; ?>">
        <input class="form-control form-control-solid" required type="text" placeholder="Enter user name" name="uname"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Phone Number</label>
       <div class="col-9">
        <input class="form-control form-control-solid" maxLength="10" required type="text" placeholder="Enter Phone Number" name="pnumber"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">City</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required  placeholder="Enter city name" name="city"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">State</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required  placeholder="Enter state name" name="state"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Pin Code</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" maxLength="6" required  placeholder="Enter pin code" name="pincode"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Country</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required  placeholder="Enter country name" name="country"/>
       </div>
</div>
<div class="separator separator-dashed my-10"></div>
<div class="my-5">
      <h3 class=" text-dark font-weight-bold mb-10">Project Info:</h3>
      
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Project Name</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter project name" name="pname"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Weekly Traffic</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter weekly traffic" name="traffic"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Earning</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required  placeholder="Enter earning" name="earning"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Expenses</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter expenses" name="expenses"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 1</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter Keyword 1" name="k1"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 2</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter Keyword 2" name="k2"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 3</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter Keyword 3" name="k3"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 4</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter Keyword 4" name="k4"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 5</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" required placeholder="Enter Keyword 5" name="k5"/>
       </div>
      </div>   
      <div class="separator separator-dashed my-10"></div>
     <div class="d-flex pb-10">
       <input type="submit" class="btn btn-primary mr-2" value="Submit">
       <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
       </div>
 
    </div>
    <div class="col-xl-2"></div>
   </div>
  </form>
  <!--end::Form-->
 </div>

</div>
											<!--end::Form-->
										</div>
										<!--end::Card-->
									</div>
</div>
  
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