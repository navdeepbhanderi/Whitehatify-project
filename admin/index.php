<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/notification.css">
    <title>Admin Sign-In</title>
</head>

<body>
<?php
     error_reporting (0);
    if ( $_GET['loginsuccess']=="false" && $_GET['regfirst']==true) 
    {
      echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2-5">
          <p class="font-bold translate-y-1">Error! Please Registerd First!</p>
          </div>
        </div>
      </div>
      ';
    }

    if ($_GET['loginsuccess']=="false" && $_GET['passnotmatch']==true) 
    {
      echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
          <p class="font-bold translate-y-1">Error! Your Password is not Matched!</p>
          
          </div>
        </div>
      </div>
      ';
    }

    if ( $_GET['updatepassword']=="true" ) {
        echo '<div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-700 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><img style="width: 40px;" class="fill-current text-green-500 mr-2" src="img/success.png"/></img></div>
          <div class="py-2-5">
            <p class="font-bold translate-y-1">Success! Your Password is updated, Now You can Login.</p>
          </div>
        </div>
      </div>
      ';
    }

    ?>

    <form action="partials/handlesignin.php" method="post">
        <div class="admin">
            <div class="container">
                <div class="logo1">
                    <img class="logo" src="img/white.png" alt="logo">
                </div>
                <div class="line">
                    <h2>Sign In To Admin</h2>
                    <p id="line2">Enter your Details to Login Your Account</p>
                </div>
                <div class="field">
                    <div class="field1">
                        <input required type="text" id="email" class="email" name="email" placeholder="E-Mail">
                    </div>
                    <div class="field2">
                        <input required type="password" id="password" class="password" name="password"
                            placeholder="Password">
                    </div>
                    <div class="forgotpass">
                        <a href="   forgotpass.php">Forgot Password?</a>
                    </div>
                </div>
                <input style="padding-left: 6px;" type="submit" class="btn" value="Sign In">
                <!-- <p class="line3">Don't have an account yet? <a href="signup.php">Sign Up!</a></p> -->
            </div>
        </div>
    </form>
</body>

</html>