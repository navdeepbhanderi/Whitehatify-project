<!-- isset($_GET['signupsuccess']) &&  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - WhiteHatify</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/notification.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/sign-up.css">
</head>

<body>
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <?php include 'partials/nav.php' ;
    error_reporting (0);
    
    if ($_GET['signupsuccess']=="false" &&  $_GET['alreadyinuse'] == "true") 
    {
        echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
            <p class="font-bold translate-y-1">Error! Your Email is already in use.</p>
          </div>
        </div>
      </div>
      ';
    }
    if ($_GET['signupsuccess']=="false" && $_GET['passwordnotmatch'] == true) {
        echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
            <p class="font-bold translate-y-1">Error! Please Confirm Your Password.</p>
          
          </div>
        </div>
      </div>
      ';
    }
    if ( $_GET['signupsuccess']=="true" ) {
        echo '<div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-700 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><img style="width: 40px;" class="fill-current text-green-500 mr-2" src="img/success.png"/></img></div>
          <div class="py-2-5">
            <p class="font-bold translate-y-1">Success! Please login to continue.</p>
          </div>
        </div>
      </div>
      ';
    }
    ?>
    <div class="signuppage">
        <div class="signuppage2">
            <div class="signup-part">
                <h2>Create an Account!</h2>
                <form action="partials/handlesignup.php" method="POST">
                    <div class="fieldss" style="display:flex;">
                        <div class="form field nfirstfield">
                            <input required type="text" id="fname" class="form__input" name="fname" autocomplete="off"
                                placeholder=" ">
                            <label for="fname" class="form__label">First Name</label>
                            <div class="error errortext">Please Enter Your First Name</div>
                        </div>
                        <div class="form mx-1 field nlastfield">
                            <input required type="text" id="lname" class="form__input" name="lname" autocomplete="off"
                                placeholder=" ">
                            <label for="lname" class="form__label">Last Name</label>
                            <div class="error errortext">Please Enter Your Last Name</div>
                        </div>
                    </div>
                    <div class="fieldss field addfield" style="display:flex;">
                        <div class="form">
                            <input required type="text" id="address" class="form__input" name="address"
                                autocomplete="off" placeholder=" ">
                            <label for="address" class="form__label">Street Address</label>
                            <!-- <div class="error errortext">Please Enter Your Street Address</div> -->
                        </div>
                        <div class="form mx-1">
                            <input required type="text" id="city" class="form__input" name="city" autocomplete="off"
                                placeholder=" ">
                            <label for="city" class="form__label">Town/city</label>
                            <!-- <div class="error errortext">Please Enter Your City</div> -->
                        </div>
                    </div>
                    <div class="fieldss field cityfield" style="display:flex;">
                        <div class="form">
                            <select class="form__input" name="country" id="country">
                                <!-- <option value="">Select a country / region…</option> -->
                                <option value="">India</option>
                            </select>
                            <label class="form__label" for="country">Country</label>
                        </div>
                        <div class="form mx-1">
                            <input required list="state" name="state" class="form__input">
                            <datalist id="state">
                                <!-- <option value="Select an option…">Select an option…</option> -->
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Goa">Goa</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadeep">Lakshadeep</option>
                                <option value="Pondicherry">Pondicherry (Puducherry)</option>
                            </datalist>
                            <label class="form__label" for="State">State</label>
                        </div>

                        <div class="form mx-1">
                            <input required type="text" id="Pincode" maxlength="6" name="pincode" class="form__input"
                                autocomplete="off" placeholder=" ">
                            <label for="Pincode" class="form__label">Pin code</label>

                        </div>
                    </div>
                    <div class="fieldss" style="display:flex;">
                        <div class="form  emailfield field">
                            <input title="Please Enter Valid Email Address"
                                pattern="[A-Za-z0-9._]+@[A-Za-z0-9]+\.[a-z]{2,6}" required type="text" id="email"
                                class="form__input" name="email" autocomplete="off" placeholder=" ">
                            <label for="email" class="form__label">Email</label>
                            <div class="error errortext">Please Enter Your Email</div>
                        </div>
                    </div>
                    <div class="fieldss" style="display:flex;">
                        <div class="form  passwordfield field">
                            <input title="Must be at least 8 character" required pattern="[a-zA-Z0-9]{8,}" required
                                type="password" id="Password" class="form__input" name="password" autocomplete="off"
                                placeholder=" ">
                            <img id="eyeimg1" src="img/eye1.png" alt="" width="25px" height="25 px">
                            <label for="Password" class="form__label">Password</label>
                            <div class="error errortext">Please Enter Your Password</div>
                        </div>
                    </div>
                    <div class="fieldss " style="display:flex;">
                        <div class="form cpasswordfield field ">
                            <input title="Must be at least 8 character" required pattern="[a-zA-Z0-9]{8,}" required
                                type="password" id="cPassword" class="form__input" name="cpassword" autocomplete="off"
                                placeholder=" ">
                            <img id="eyeimg2" src="img/eye1.png" alt="" width="25px" height="25 px">
                            <label for="cPassword" class="form__label">Confirm Password</label>
                            <div class="error errortext">Please Enter Your Conform Password</div>
                        </div>
                    </div>



                    <div class="btnclass">
                        <input type="submit" class="btnn" style="background-color: var(--cp-color-13);" value="Sign Up">
                    </div>
                </form>
                <div class="lines">
                    <span>
                        <p>Already have an account? <a style=" font-weight: 600;" href="singin.php"> Login now</a></p>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/signup.js"></script> -->
    <script src="js/showpass.js"></script>
    <?php
    include 'partials/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>