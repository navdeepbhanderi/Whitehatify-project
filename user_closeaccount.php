<?php 
session_start();
include 'partials/nav.php' ;
include 'partials/sidebar.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Close account - WhiteHatify</title>
   <link rel="stylesheet" href="css/user_editprofile.css">
</head>

<body>


<div  style="transform: translate(256px, -23px); margin-bottom:-1rem;">

<?php
  
  if ( isset($_GET['closeaccount']) && $_GET['closeaccount']=="false" ) 
  {
    echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
    <div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div class="py-2">
        <p >Sorry! You enterd incurrect password or Plase match your password</p>
        </div>
      </div>
    </div>
    ';
  }

?>
</div>


   <div class="editprofile" style=" transform: translate(256px, 10px);">
      <div class="card card-custom">
         <div class="card-header ">
            <h3 class="card-title">
               Close Your Account
            </h3>
            <div class="card-toolbar">
               <!-- <button type="button" id="" style=" transform: translate(0px, 11px);" class="btn-new btn-success mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Information</button> -->

            </div>
         </div>

         <form action="partials/handlecloseaccount.php" method="post">
            <div class="card-body">
               <div class="form-group mb-8">
                  <div class="form-group">
                     <label for="exampleInputPassword1">Current Password
                        <span class="text-danger">*</span></label>
                     <input type="hidden" name="sno" value="<?php echo $_SESSION['sno'];?>"/>   
                     <input type="password" class="form-control-m" name="password" id="exampleInputPassword1" placeholder="Current Password">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Cofirm Current Password
                        <span class="text-danger">*</span></label>
                     <input type="password" class="form-control-m" name="cpassword" id="exampleInputPassword1" placeholder="Cofirm Current Password">
                  </div>
               </div>
               <div class="card-footer">
                  <div class="col-10" style="padding:0px;">
                     <input type="submit" class="btn-new btn-danger mr-2" value="Close Account" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                  </div>
               </div>
            </div>
         </form>
      </div>

   </div>
   <script src="js/user_editprofile.js"></script>
</body>

</html>