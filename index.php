<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="google-site-verification" content="oNcRUhldVKa9_WVZordhJGA5cGDlmMr7PE_R4bU42Eg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WhiteHatify - Home page</title>
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleservice.css" />
    <script src="https://kit.fontawesome.com/bb6fb19f47.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'partials/nav.php'; ?>
    <?php include 'slider.php';
    include 'services.php'; ?>


    <div class="servicehead" id="servicehead">
        <h1>Our Services</h1>
        <h3>Let the SEO Experts get your website ranking on top search sites like Google, Yahoo and Bing!</h3>
    </div>

    <div class="servicecon">
        <div class="service">
            <div class="img">
                <img src="img/i1.png" alt="" />
            </div>
            <h2>Whitehat SEO</h2>
            <p>
                We use SEO White Hat strategies and 100% Ethical processes, to ensure
                that your website will never be penalized by Google or any search
                engine.
            </p>
        </div>
        <div class="service">
            <div class="img">
                <img src="img/i3.png" alt="" />
            </div>
            <h2>Content Optimization</h2>
            <p>
                Content is a critical part of SEO. We understand that and make sure the right kind of content is being
                written in every SEO campaign. No AI, no keyword seeding, no crap content.
            </p>
        </div>
        <div class="service">
            <div class="img">
                <img src="img/i2.png" alt="" />
            </div>
            <h2>Keyword Ranking</h2>
            <p>
                We'll deliver you detailed benchmark reports with existing keyword
                rankings and historical, organic search traffic and help you boost
                your rankings.
            </p>
        </div>
        <div class="service">
            <div class="img">
                <img src="img/i4.png" id="image-style-1" alt="" />
            </div>
            <h2>Local SEO</h2>
            <p>If local is what your business needs then make sure you are optimising for the specific areas. We help
                businesses become more visible locally and get the benefit of high conversions.
            </p>
        </div>
        <div class="service">
            <div class="img">
                <img src="img/i5.png" alt="" id="image-style-2" />
            </div>
            <h2>Track, Analyse and Report</h2>
            <p>
                We keep a proper track of the page level performance, leads generated
                and other SEO improvements made. Our frequent updates will always keep
                you in the loop!
            </p>
        </div>
        <div class="service">
            <div class="img">
                <img src="img/i6.png" alt="" id="image-style-3" />
            </div>
            <h2>Quality Traffic</h2>
            <p>
                Clean and smart SEO strategies to get your website to rank on the
                first page of Google - which increases visibility, organic audience
                reach and turning visitors into customers.
            </p>
        </div>
    </div>

    <?php
    include 'plan.php';
    include 'reqcounsellor.php';
    include 'partials/footer.php';
    ?>

</body>

</html>