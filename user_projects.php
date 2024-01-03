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
    <title>User Projects - WhiteHatify</title>
    <link rel="stylesheet" href="css/projectcard.css">
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
</head>
<body>
<div class="project" style=" transform: translate(256px, 0px);">
<div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                        <img src="img/WhiteHatify.png" width="55px" alt="image">
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="d-flex flex-column mr-auto">
                        <!--begin: Title-->
                        <div class="d-flex flex-column mr-auto">
                            <a class="font-big text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">whitehatify</a>
                            <span class="font-midium text-muted font-weight-bold">whitehatify@gmail.com</span>
                            
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Info-->
                  
                </div>
                <!--end::Info-->
                <!--begin::Description-->
                <div class="font-midium mb-10 mt-5 font-weight-bold">I distinguish three main text objectives.First, your objective could be merely to inform people.A second be to persuade people.</div>
                <!--end::Description-->
                <!--begin::Data-->
                <div class="d-flex mb-5">
                    <div class="d-flex align-items-center mr-7">
                        <span class="font-midium font-weight-bold mr-4">Start</span>
                        <span class=" font-minimum btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14 Jan, 23</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="font-midium font-weight-bold mr-4">Due</span>
                        <span class="font-minimum btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15 Oct, 23</span>
                    </div>
                </div>
                <!--end::Data-->
                <!--begin::Progress-->
                <div class="d-flex align-items-cente">
                    <span class="font-midium d-block font-weight-bold mr-5">Progress</span>
                    <div class="d-flex flex-row-fluid align-items-center">
                        <div class="progress progress-xs mt-2 mb-2 w-100">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="font-midium ml-3 font-weight-bolder">45%</span>
                    </div>
                </div>
                <!--ebd::Progress-->
            </div>
            <!--end::Body-->
        </div>
        <!--end:: Card-->
    </div> 
 </div>
</body>
</html>