
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - WhiteHatify</title>
    <link rel="stylesheet" href="css/notification.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/resetpassword.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
    <?php 
    error_reporting (0);
    include 'partials/dbconnect.php';
    $token = $_GET['token'];  
    include 'partials/nav.php';
    if ( $_GET['updatepassword']=="false") 
    {
      echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
          <p class="font-bold translate-y-1">Error! Password is not Updated.</p>
          
          </div>
        </div>
      </div>
      ';
    }

    if ($_GET['passwordnotmatch']=="true") 
    {
      echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
          <p class="font-bold translate-y-1">Please Confirm Your Password.</p>
          
          </div>
        </div>
      </div>
      ';
    }

    ?>

    <div class="signinpage">
        <div class="signinpage2">
            <div class="img-part">
            </div>
            <div class="signin-part">
                <h2 style="margin-bottom:2rem ;">Reset Your Password</h2>
               
               
                <form action="partials/handlepassword.php" method="post">
                    
                    <div class="form passwordfield field">
                        <input type="hidden" value="<?php print $token;?>" name="token" >
                        <input title="Must be at least 8 character" required pattern="[a-zA-Z0-9]{8,}"
                            type="password" name="password" id="Password" class=" form__input" autocomplete="off"
                            placeholder=" ">
                        <img id="eyeimg1" src="img/eye1.png" alt="" width="25px" height="25 px">
                        <label for="Password" class="form__label">Password</label>
                        <div class="error errortext">Password can't be blank</div>
                    </div>
                    <div class="form passwordfield field">
                        <input title="Must be at least 8 character" required pattern="[a-zA-Z0-9]{8,}" 
                            type="password" name="cpassword" id="cPassword" class=" form__input" autocomplete="off"
                            placeholder=" ">
                        <img id="eyeimg2" src="img/eye1.png" alt="" width="25px" height="25 px">
                        <label for="cPassword" class="form__label">Confirm Password</label>
                        <div class="error errortext">Password can't be blank</div>
                    </div>


                    <div class="btnclass">
                        <input type="submit" onclick="errorshaking()" class="btnn"
                            style="background-color: var(--cp-color-13);" value="Update Password">
                    </div>
                </form>

                <div class="lines">
                    <hr>
                    <span><a href="signup.php">OR SIGNUP</a></span>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'partials/footer.php';
    ?>

<script src="js/showpass.js"></script>
</body>

</html>