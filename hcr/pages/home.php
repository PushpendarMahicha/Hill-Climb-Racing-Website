<!-- login check -->
<?php
include "../login/logincheck.php";
?>
<!-- ------------------- -->

<!-- this is for back -->
<?php
include "../database connect/connect_comment.php";
?>
<!-- ------------------- -->

<html>
    <head><title>Home</title>
    <?php  
    // all css links
    include "../dynamic/link.html";
    //only css link of cars
    include "../all_cars_css/car_css.html";
     ?> 
</head>
<body>
        <!-- //bg -->
        <div class="Thebg"></div>
         <!-- -------- -->
    <?php 
    // navigation
     include "../dynamic/nav.html";
    //  slider
     include "../dynamic/slider.html";
    //  all cars and comment-box
     include "../car_box/car_box.php";    ?> 
     
    <!-- footer -->
    <?php
   include "../dynamic/footer.html";
   ?>
     <!-- //js -->
     <script src="../superjs/nav.js"></script>
     <script src="../superjs/car.js"></script>
     <script src="../superjs/ajax.js"></script>
    </body>
</html>