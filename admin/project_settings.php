<?php 
        include 'partials/dbconnect.php';
        ob_start();
        session_start();
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
  <link rel="stylesheet" href="css/style.bundle.min.css"  type="text/css">
  <link rel="stylesheet" href="css/wizard-2.css">
  <link rel="stylesheet" href="css/plugins.bundle.css">
  <link rel="stylesheet" href="css/prismjs.bundle.css">


    <style>
        
#chart {
  max-width: 650px;
  margin: 35px auto;
}

    </style>


</head>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<body>

<?php
    include 'project_template.php';
    $pid = $_GET['pid'];
?>

  <div class="container4">
  <div class="col-lg-9"  style="    width: 100%;
    margin: auto;">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<!--begin::Form-->
                      <div class="card card-custom card-sticky" id="kt_page_sticky_card">
          <div class="card-header">
            <div class="card-title">
            <h3 class="card-label d-flex">
            <img src="img/list.png" width="18px" style="opacity: 0.4;" class="mr-4" alt="">
              Update Project Information
            </h3>
            </div>

            
  
  </div> 
 </div>
 <div class="card-body">
  <!--begin::Form-->
  <form action="partials/updateproject.php" method="post" class="form" id="kt_form">
   <div class="row">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
    
<div class="my-5">
      <h3 class=" text-dark font-weight-bold mb-10">User Information</h3>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">User Name</label>
       <div class="col-9">
        <input type="hidden" name="pid" value="<?php echo $pid; ?>">
        <input class="form-control form-control-solid"  value="<?php echo $uname; ?>" type="text" placeholder="Enter user name" name="uname"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Phone Number</label>
       <div class="col-9">
        <input class="form-control form-control-solid"  value="<?php echo $phone; ?>"  type="text" placeholder="Enter Phone Number" maxLength="10" name="pnumber"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">City</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $city; ?>"   placeholder="Enter city name" name="city"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">State</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $state; ?>"   placeholder="Enter state name" name="state"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Pin Code</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $pincode; ?>"   placeholder="Enter pin code" maxLength="6" name="pincode"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Country</label>
       <div class="col-9">
        <input class="form-control form-control-solid" value="<?php echo $country; ?>"  type="text"  placeholder="Enter country name" name="country"/>
       </div>
</div>
<div class="separator separator-dashed my-10"></div>
<div class="my-5">
      <h3 class=" text-dark font-weight-bold mb-10">Project Information</h3>
      
      </div>
      
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Project Name</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $pname; ?>"  placeholder="Enter project name" name="pname"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Email</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="email"  placeholder="Enter Email" name="email" value="<?php echo $email; ?>"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Date</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="date"  placeholder="Enter Date" name="date" value="<?php echo $startdate; ?>"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center" >
       <label class="col-3 h6">Plan</label>
       <div class="col-9">
    
                                  <?php 
                    $options = array("3 Months","6 Months","9 Months");
                    $selected = $plan;
                   echo '<select class="form-control form-control-solid" name="plan" >';
                   foreach($options as $option){
                        if($selected  == $option){
                          echo '<option selected="selected" value="'.$option.'">'.$option.'</option>';
                        }
                        else{
                          echo '<option value="'.$option.'">'.$option.'</option>';
                        }
                   }
                 echo' </select>';

                ?>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Web URL</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text"  placeholder="Enter Web URL" name="url"  value="<?php echo $url; ?>"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Progress</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text"  placeholder="Enter Progress" name="progress" maxLength="2" value="<?php echo $progress; ?>"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Description</label>
       <div class="col-9">
        <textarea class="form-control form-control-solid"  placeholder="Enter Description" name="desc"  cols="30" rows="5"><?php echo $desc; ?></textarea>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Weekly Traffic</label>
       <div class="col-9">
        <input class="form-control form-control-solid" value="<?php echo $traffic; ?>" type="text"  placeholder="Enter weekly traffic" name="traffic"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Earning</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $earning; ?>"  placeholder="Enter earning" name="earning"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Expenses</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $expenses; ?>" placeholder="Enter expenses" name="expenses"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 1</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $k1; ?>" placeholder="Enter Keyword 1" name="k1"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 2</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $k2; ?>" placeholder="Enter Keyword 2" name="k2"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 3</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $k3; ?>" placeholder="Enter Keyword 3" name="k3"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 4</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $k4;  ?>" placeholder="Enter Keyword 4" name="k4"/>
       </div>
      </div>
      <div class="form-group row d-flex align-items-center">
       <label class="col-3 h6">Keyword 5</label>
       <div class="col-9">
        <input class="form-control form-control-solid" type="text" value="<?php echo $k5; ?>" placeholder="Enter Keyword 5" name="k5"/>
       </div>
      </div>   
      <div class="separator separator-dashed my-10"></div>
     <div class="d-flex pb-10">
       <input type="submit" class="btn btn-primary mr-2" value="Update Details">
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


  <script src="js/scripts.bundle.js"></script>
  <script src="js/plugins.bundle.js"></script>
  <script src="js/prismjs.bundle.js"></script>

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