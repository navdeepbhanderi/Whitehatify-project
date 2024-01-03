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
   <title>Forgot Password - WhiteHatify</title>
   <link rel="stylesheet" href="css/user_editprofile.css">
   <link rel="stylesheet" href="css/notification.css">
   <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
</head>
<body style="overflow-x:hidden;">  
   <div class="container3"style=" transform: translate(256px, -23px);">
   <?php
if ( $_GET['email']=="found" ) {
        echo '<div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-700 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><img style="width: 40px;" class="fill-current text-green-500 mr-2" src="img/success.png"/></img></div>
          <div class="py-2">
            <p class="">Success! Please Check Your E-mail to Reset Your Password.</p>
          
          </div>
        </div>
      </div>
      ';
    }

    if ($_GET['email']=="failed" ) 
    {
        echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
            <p class="">Sorry! At this Moment, we can\'t help you to reset your password. Please connect to network.</p>
          </div>
        </div>
      </div>
      ';
    }

    if ($_GET['email']=="notfound") 
    {
        echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
            <p class=" ">Error! Your Email was not Found.</p>
          </div>
        </div>
      </div>
      ';
    }
    ?>

   </div>
   <div class="editprofile" style=" transform: translate(266px, 0px);">
   <div class="card card-custom">
        <div class="card-header ">
            <h3 class="card-title">
                Change Your Password
            </h3>
            <div class="card-toolbar">
            <!-- <button type="button" id="" style=" transform: translate(0px, 11px);" class="btn-new btn-success mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Information</button> -->
         
				</div>
           </div>

        <form action="partials/hadleprofileemail.php" method="post">
            <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>" class="form-control-m" id="exampleInputPassword1" placeholder="Email">
         <div class="card-body">
       
         <div class="card-footer">
           <div class="col-10" style="padding:0px;">
           <input type="submit"  class="btn-new btn-success mr-2" value="Send Forgot Password Link" data-bs-toggle="modal" data-bs-target="#exampleModal">
             </div>
          </div>
         </div>
        </form>
       </div>

   </div>
   <script src="js/user_editprofile.js"></script>
</body>
</html>