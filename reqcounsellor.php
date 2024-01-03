<!DOCTYPE html>
<html lang="en">
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reqcounsellor.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Consultation - WhiteHatify</title>
</head>

<body>
    <div id="reqcounseller">
        <div class="firstpara">
            <h2 class="form_title">Schedule a call today and one of our experts will be happy to help you decide which
                plan is ideal for your business and budget.</h2>
        </div>

        <p class="form_des"></p>

        <div class="form_container">
            <div class="box">
                <img src="img/img5.jpg" alt="" class="bg">
            </div>

            <div class="box">
                <div class="form-main">
                    <h2>Get A Free Consultation Now</h2>
                    <form action="partials/handlecounseller.php" method="post">
                        <div class="form">
                            <input required type="text" name="name" id="Name" class="form__input" autocomplete="off"
                                placeholder=" " value="<?php


if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}
?>">
                            <label for="Name" class="form__label">Name</label>
                        </div>
                        <div class="form">
                        <input required type="text" name="email" id="email" class="form__input" autocomplete="off"
                                placeholder=" " value="<?php


if(isset($_SESSION['email'])){
    echo $_SESSION['email'];
}
?>">
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form">
                            <input required maxlength="10" pattern="[0-9]{10}" type="text" id="ContactNumber"
                                class="form__input" autocomplete="off" placeholder=" " name="contact">
                            <label for="ContactNumber" class="form__label">Contact Number</label>
                        </div>
                        <div class="form">
                            <input required type="text" name="url" id="URL" class="form__input" autocomplete="off"
                                placeholder=" ">
                            <label for="URL" class="form__label">Web URL</label>
                        </div>
                        <div class="form">
                            <input type="text" name="desc" id="Description" class="form__input" autocomplete="off"
                                placeholder=" ">
                            <label for="Description" class="form__label">Description</label>
                        </div>

                        <div class="btnclass">
                            <input type="submit" onclick="errorshaking()" class="form_button" value="Submit"></input>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>


