<!-- //login check -->
<?php
include "../login/logincheck.php";
?>
<!-- ------------------ -->
<html>
    <head><title>Career</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <!-- carrer link -->
    <?php include "../dynamic/link.html"; ?>
</head>
    <body class="div-flex-column">
                <!-- //bg -->
    <div class="Thebg"></div>
    <!-- -------- -->
        <?php 
        include "../dynamic/nav.html";
         ?>
         <!---------------------------------- //carrer------------------------------- -->
         <div class="career">
        <div class="first">
        <h1>Join HCR Team</h1>
        <p>Making games since 2012</p>
        </div>
      <img src="../assets/career/picture1.jpg" alt="" class="picture1">
        <h1 class="whyhillclimbracing">Why Hill Climb Racing</h1>
        <div class="second">
            <p>We are best known for the mobile smash hits “Hill  Climb Racing” and “Hill Climb Racing 2”, which have a combined total of over 2 Billion installs across all platforms However, despite our huge audience, we keep things small and personal, with a strong focus on maintaining a relaxed, casual and informal work atmosphere.</p>
            <p>We are a bunch of fun-loving people from all over the world, united by our love for making awesome games & having a great time while doing it. We strive to empower our employees to do what they do best, rather than hamstring them with bureaucracy.
            </p>
        </div>
        <h1 class="getto">GET TO KNOW US</h1>
        <video class="careervideo" controls>
            <source src="../assets/career/career.mp4">
        </video>
        <div class="gridimage">
        < <div class="gallery">
            <figure class="gallery__item gallery__item--1">
                <img src="../assets/career/picture1.jpg" alt="Gallery image 1" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--2">
                <img src="../assets/career/picture2.jpg" alt="Gallery image 2" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--3">
                <img src="../assets/career/picture3.jpg" alt="Gallery image 3" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--4">
                <img src="../assets/career/picture4.jpg" alt="Gallery image 4" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--5">
                <img src="../assets/career/picture5.jpg" alt="Gallery image 5" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--6">
                <img src="../assets/career/picture6.jpg" alt="Gallery image 6" class="gallery__img">
            </figure>
        </div>

        <!-- footer -->
   <?php
   include "../dynamic/footer.html";
   ?>

<script src="../superjs/nav.js"></script>
    </body>
</html>