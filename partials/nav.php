<?php
error_reporting (0);

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/nav.css">
    
</head>
<body>
<div class="header stiky">
      <header>
        <div class="logo">
         <a href="index.php"><img id="logo" src="img/white.png" ></a>
        </div>
        <div class="navbar-nav">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a formtargrt="_self" href="/#servicehead">Services</a></li>
            <li><a href="/#plans">Plans</a></li>
            <li><a href="/#reqcounseller">Request For Councellor</a></li>';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '<li><a href="/payment.php">Billing Details</a></li>';
            }
            echo '
            <li style="border: none;"><a href="aboutus.php">About Us</a></li>
          </ul>
          <div class="btn">
            <div class="btn1">';
            $sno = $_SESSION['sno'];
            $name = $_SESSION['username'];
            $username = substr($name, 0,1);
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

              echo '<button onclick="clickdialgoue()" id= "proficon">
              <svg id="imgprofile" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
              </g>
            </svg>
            <div id="profiledialogue" class="hidden">
                <div class="profinfo">
                <div class="justify">
                    <div class="profimg"><p> '.strtoupper($username).'<p>
                    </div >
                    <div class="profname">
                       <p id="username">'.ucfirst($name).'</p>
                       <p class="lowertext">'.$_SESSION['email'].'</p>
                    </div>
                    </div>
                    <img id="img1" style="cursor:pointer; filter: contrast(.2);" src="img/sun.png" height="30px" width="30px" alt="">
                </div>
                <div class="separator"></div>
                <div class="profsetting">
                <a href="user_projects.php" class="settings"> 
                    <div class="settingimg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"></path>
                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
                  </svg>
                    </div>
                    <div class="settingtext">
                      <div class="uppertext">
                        My Projects
                      </div>
                      <div class="lowertext">
                        View Projects 
                          
                      </div>
                    </div>
                </a>
                  <a href="user_editprofile.php" class="settings"> 
                      <div class="settingimg">
                      <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                      <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                    </svg>
                      </div>
                      <div class="settingtext">
                        <div class="uppertext">
                          My Profile
                        </div>
                        <div class="lowertext">
                          Account settings 
														
                        </div>
                      </div>
                  </a>
                  
                <a class="settings"> 
                  <div class="settingimg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black"></path>
                  <rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
                  <rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
                </svg>
                  </div>
                  <div class="settingtext">
                    <div class="uppertext">
                      Notification
                    </div>
                    <div class="lowertext">
                    Coming soon
                    </div>
                  </div>
              </a>
                </div>
                <div class="separator"></div>
                <div class="logoutbtn">
                <a href="partials/logout.php" class="mainlogoutbtn">Log Out</a>
                </div>
            </div>
        </button >';
             // echo '<h3 id="profilename">'.$_SESSION['username'].'</h3>';
             // echo '<a href="partials/logout.php" class="btn2 btn3">Logout</a>';
            }
            else{ 
              echo '
              <img id="img1" style="cursor:pointer;filter: contrast(.2);" src="img/sun.png" height="30px" width="30px" alt=""><a href="singin.php" class="btn2">Signin</a>';
            }
            echo '</div>
          </div>
        </div>

        
      </header>
    </div>';
  ?>

<script>

  let proficon1 = document.getElementsByClassName("proficon");

  function clickdialgoue() {
    let profiledialogue = document.getElementById("profiledialogue");
    profiledialogue.classList.toggle("hidden");
  }


  let darkmode = localStorage.getItem('darkmode');
  const darkmodetoogle = document.getElementById("img1");

  const enabledarkmode = () => {
    document.body.classList.add('darkmode');
    darkmodetoogle.src = "img/moon.png";
    localStorage.setItem('darkmode', 'enabled');
  }
  const disabledarkmode = () => {
    document.body.classList.remove('darkmode');
    darkmodetoogle.src = "img/sun.png";
    // darkmodetoogle.color="white";
    localStorage.setItem('darkmode', null);
  }
  if (darkmode === 'enabled') {
    enabledarkmode();
  }
  darkmodetoogle.addEventListener("click", () => {
    darkmode = localStorage.getItem('darkmode');
    if (darkmode !== 'enabled') {
      enabledarkmode();
    } else {
      disabledarkmode();
    }
  })



</script>
</body>

</html>