<?php 
session_start();
include 'partials/nav.php' ;
 include 'partials/sidebar.php'; 
include 'partials/dbconnect.php';
$sno = $_SESSION['sno'];
$sql = "Select * from user where sno='$sno'";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);

$fname =$row['fname'];
$lname =$row['lname'];
$email =$row['email'];
$state =$row ['state'];
$city= $row['city'];
$pincode = $row['pincode']; 
$address = $row['address'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Profile - WhiteHatify</title>
   <link rel="stylesheet" href="css/user_editprofile.css">
   <link rel="stylesheet" href="css/notification.css">
   <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
</head>
<body style="overflow-x:hidden;">

<div  style="    transform: translate(256px, -23px); margin-bottom:1rem;">

<?php
    if ( $_GET['update']=="true" ) {
      echo '<div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-700 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
        <div class="py-1"><img style="width: 40px;" class="fill-current text-green-500 mr-2" src="img/success.png"/></img></div>
        <div class="py-2-5">
          <p >Success! Your Profile is Updated.</p>
        </div>
      </div>
    </div>
    ';
  }
  if ($_GET['update']=="false" ) 
  {
    echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
    <div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div class="py-2">
        <p >Sorry! Your Profile is not Updated.</p>
        
        </div>
      </div>
    </div>
    ';
  }

?>
</div>
   <div class="editprofile" style="    transform: translate(270px, -23px);">

   <div class="card card-custom">
        <div class="card-header ">
            <h3 class="card-title">
                Update your personal informaiton
            </h3>
            <div class="card-toolbar">
            <!-- <button type="button" id="" style=" transform: translate(0px, 11px);" class="btn-new btn-success mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Information</button> -->
         
				</div>
           </div>

        <form action="partials/handleprofile.php" method="post">
         <div class="card-body">
          <div class="form-group mb-8">
          <div class="form-group row">
           <label  class="col-2 col-form-label">Fname</label>
           <div class="col-10">
            <input class="form-control-m removedis" name="fname" type="text" value="<?php echo $fname; ?>" disabled id="example-text-input"/>
           </div>
          </div>
          <div class="form-group row">
           <label for="example-search-input" class="col-2 col-form-label">Lname</label>
           <div class="col-10">
            <input class="form-control-m removedis"  name="lname"  type="text" value="<?php echo $lname; ?>" disabled id="example-search-input"/>
           </div>
          </div>
          <div class="form-group row">
           <label for="example-email-input" class="col-2 col-form-label">Email</label>
           <div class="col-10">
            <input class="form-control-m" disabled type="email" value="<?php echo $email; ?>" id="example-email-input8"/>
           </div>
          </div>
          <div class="form-group row">
            <label  class="col-2 col-form-label">Address</label>
            <div class="col-10">
             <input class="form-control-m removedis"  name="address"  type="text" value="<?php echo $address; ?>" disabled id="example-text-input"/>
            </div>
           </div>
           <div class="form-group row">
            <label  class="col-2 col-form-label">City</label>
            <div class="col-10">
             <input class="form-control-m removedis" type="text"  name="city"  value="<?php echo $city; ?>" disabled id="example-text-input"/>
            </div>
           </div>
           <div class="form-group row">
                <label  class="col-2 col-form-label">State</label>
                <div class="col-10">

                <?php 
                    $options = array("Andhra Pradesh","Assam","Bihar","Chhattisgarh","Gujarat","Haryana","Goa","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu","Tripura","Telangana","Uttarakhand","Uttar Pradesh","West Bengal","Andaman and Nicobar Islands","Chandigarh","Dadra and Nagar Haveli","Daman and Diu","Delhi","Lakshadeep","Pondicherry");
                    $selected = $state;
                   echo '<select disabled  name="state"  class="form-control-m removedis" id="exampleSelect1">';
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
          <div class="form-group row">
           <label for="example-number-input" class="col-2 col-form-label">Pin code</label>
           <div class="col-10">
            <input class="form-control-m removedis"  name="pincode"  type="text" maxLength="6" value="<?php echo $pincode; ?>" disabled id="example-number-input"/>
           </div>
          </div>
          <div class="form-group row">
            <label  class="col-2 col-form-label">Country</label>
            <div class="col-10">
             <input class="form-control-m " type="text" value="India" disabled id="example-text-input"/>
            </div>
           </div>
         </div>
         <div class="card-footer">
           <div class="col-10" style="padding:0px;">
           <button type="button" onclick="myGFG()"  id="editbtn"  class="btn-new btn-success mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Information</button>
           
           <input type="submit"  class="btn-new btn-success mr-2" id="submitbtn" value="Update Information" data-bs-toggle="modal" data-bs-target="#exampleModal">
             </div>
          </div>
         </div>
        </form>
       </div>

   </div>
   <script src="js/user_editprofile.js"></script>
</body>
</html>