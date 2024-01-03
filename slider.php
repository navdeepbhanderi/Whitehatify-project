<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/slider.css">
    <link rel="shortcut icon" href="img/whitee.png" type="image/x-icon">
    <?php  echo "<link rel='stylesheet' type='text/css' href='css/slider.php' />"; ?>
</head>
<body>  
    <div class="slider-container">
        <div class="slide">
            <!-- <div class="part1"> -->
                <h1>Best SEO services to get your website ranked across top search engines.</h1>
                    <a href="#plans" id="button">See Plan Details</a>
            <!-- </div> -->
            <!-- <div class="part2"> -->
                <!-- <img src="img/signup-signin.jpg" alt=""> -->
            <!-- </div> -->
        </div>
        <div class="slide">
            <img src="img/slider8.jpg" alt="" class="slide-img">
        </div>
        <div class="slide">
            <img src="img/a3.jpg" alt="" class="slide-img">
        </div>
        <section class="next">
            <svg style="width: 8px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
        </section>
        <section class="prev">
            <svg style="width: 8px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
        </section>
    </div>

    

    <script>
        const slides = document.querySelectorAll(".slide");
        const prev = document.querySelector(".prev");
        const next = document.querySelector(".next");

        slides.forEach(function(slide,index){
            slide.style.left = `${index * 100}%`;
        });

        let counter = 0;

        next.addEventListener("click", function(){
            console.log("prev")
            counter++;
            carousal();
        });
        prev.addEventListener("click", function(){
            console.log("next")
            counter--;
            carousal();
        });

        function carousal(){

            if(counter === slides.length){
                counter = 0;
            }
            if(counter<0){
                counter = slides.length -1;
            }

            slides.forEach(function(slide){
                slide.style.transform = `translateX(-${counter*100}%)`;
            });
        }

    </script>

</body>
</html>