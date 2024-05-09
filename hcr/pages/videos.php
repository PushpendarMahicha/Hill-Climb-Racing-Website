<!-- login check -->
<?php
include "../login/logincheck.php";
?>
<!-- ------------ -->
<html>
    <head><title>Videos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- this is to add css links to this file -->
   <?php include "../dynamic/link.html"; ?> 
    <!-- other direct link -->
    <link rel="stylesheet" href="../super/videos.css">

</head>
 <body class="div-flex-column">
            <!-- //bg -->
    <div class="Thebg"></div>
          <!-- -------- -->

          <!-- navigation -->
        <?php 
        include "../dynamic/nav.html";
         ?>
         <!-- ----------------- -->

         <!-- ---------video---------- -->
         <div id="video">
        <div id="videocontent">
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/jeep.mp4"></video> 
           <h2 >Jeep Gameplay</h2>

        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/truck.mp4"></video> 
            <h2 >Truck Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video muted class="videos" src="../assets/videos/bus.mp4"></video>
            <h2 >Bus Gameplay</h2> 
        </div>
        <div class="videocontainer">
            <video muted class="videos" src="../assets/videos/mini.mp4"></video> 
            <h2 >Mini Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/fire car.mp4"></video> 
            <h2 >Fire car Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/formula.mp4"></video> 
            <h2 >Formula Gampeplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/hippi van.mp4"></video> 
            <h2 >Hippi van Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/police.mp4"></video> 
            <h2 >Police Car Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/speed.mp4"></video> 
            <h2 >Speed Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/tank.mp4"></video> 
            <h2 >Tank Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/tractor.mp4"></video> 
            <h2 >Tractor Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/trolly.mp4"></video> 
            <h2 >Trolly Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/pickup.mp4"></video>
            <h2 >Pickup Gameplay</h2> 
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/snow.mp4"></video> 
            <h2 >Snow bike Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/tire.mp4"></video> 
            <h2 >Tire Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/drill.mp4"></video> 
            <h2 >Drill Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/ambulance.mp4"></video> 
            <h2 >ambulance Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/beach car.mp4"></video> 
            <h2 >Beach car Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/long bike.mp4"></video> 
            <h2 >Long bike Gameplay</h2>
        </div>
        <div class="videocontainer">
            <video  muted class="videos" src="../assets/videos/bike 2.mp4"></video> 
            <h2 >Bike 2 Gameplay</h2>
        </div>
    </div>
    <div class="popup-video">
        <span>&times;</span>
        <video src="brids.mp4" muted controls></video>
    </div>
    </div>
    <!-- footer -->
    <?php
   include "../dynamic/footer.html";
   ?>
   <!-- js -->
   <script src="../superjs/nav.js"></script>
    <script src="../superjs/video.js"></script>
    </body>
</html>