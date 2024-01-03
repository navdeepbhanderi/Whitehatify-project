<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - WhiteHatify</title>
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
    <link rel="stylesheet" href="css/notification.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/signin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
    <?php include 'partials/nav.php';
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

    <div class="signinpage">
        <div class="signinpage2">
            <div class="img-part">
            </div>
            <div class="signin-part">
                <h2 style="margin-bottom:.7rem ;">Welcome back!</h2>
                <h3 style="margin-bottom:1rem ; text-align: center;">Login to whitehatify.com</h3>

                <!-- <form action="#">
                    <div class=" emailfield field">
                        <label for="emailid">Email Address</label>
                        <input type="email" id="emailid" class="" name="email">
                            <div class="error errortext">Email can't be blank</div>
                        </div>
                        
                        <div class="passwordfield field">
                            <label for="passwordid">Password</label>
                        <input type="password" class="" name="password" id="passwordid">
                        <div class="error errortext">Password can't be blank</div>
                    </div>


                    <div class="forgotpass">
                        <a href="#">Forgot Password?</a>
                    </div>

                    
                    <div class="btnclass">
                        <input type="submit" onclick="errorshaking()" class="btnn" value="Login">
                    </div>
                </form> -->
                <form action="partials/handlesignin.php" method="POST">
                    <div class="form emailfield field">
                        <input title="Please Enter Valid Email Address"
                            pattern="[A-Za-z0-9._]+@[A-Za-z0-9]+\.[a-z]{2,6}" required type="text" name="email"
                            id="email" class=" form__input"  placeholder=" ">
                        <label for="email" class="form__label">Email</label>
                        <div class="error errortext">Email can't be blank</div>
                    </div>
                    <div class="form passwordfield field">
                        <input title="Must be at least 8 character" required pattern="[a-zA-Z0-9]{8,}" id="passwordeye1"
                            type="password" name="password" id="password" class=" form__input" autocomplete="off"
                            placeholder=" ">
                        <img id="eye1" src="img/eye1.png" alt="" width="25px" height="25 px">
                        <label for="passwordeye1" class="form__label">Password</label>
                        <div class="error errortext">Password can't be blank</div>
                    </div>
                    <div class="forgotpass">
                        <a href="recoveremail.php">Forgot Password?</a>
                    </div>


                    <div class="btnclass">
                        <input type="submit" onclick="errorshaking()" class="btnn"
                            style="background-color: var(--cp-color-13);" value="     Login     ">
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

    <script>
    let eyeimg = document.getElementById("eye1");
    let passwordinput = document.getElementById("passwordeye1");

    document.getElementById("eye1").addEventListener("click", function() {
        if (passwordinput.type === "password") {
            passwordinput.type = "text";
            eyeimg.src = "img/eye2.png";
        } else {
            passwordinput.type = "password";
            eyeimg.src = "img/eye1.png";
        }
    });
    </script>
</body>

</html>