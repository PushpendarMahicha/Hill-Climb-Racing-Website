<!-- //login check -->
<?php
include "../login/logincheck.php";
?>
<!-- ------------------- -->
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../super/about.css">
    <!-- all the about link are for about  -->
    <title>About</title>
    <?php include "../dynamic/link.html"; ?>
    <!-- this link are used by nav -->
</head>
 <body class="div-flex-column">
 <!-- //bg --><div class="Thebg"></div><!-- -------- -->
 <!-- navigation -->
 <?php include "../dynamic/nav.html";  ?>
           <!-- --------------------------------------//about ----------------------- -->
   <div class="abouthcr">
        <h1 class="abouthillclimb">ALL ABOUT HCR</h1>
        <P class="goodgames">1B+ Downloads | Most Popular</P>
        <h2 class="racingsince">INTRO</h2>
        <div class="history">
            <p>Hill climb racing is a popular mobile game where player nevigate various landscapes with different vehicles, striving to cover maxium distance while overcoming obstacles. The game's simplicity and addictive gameplay have garnered a dedicated fanbase worldwide.</p>
            <p>Player control a vehicle and musts maintain balance while traversing uneven terrian, hills and vellays. The game's physics engine add realism, making each movement and interaction feel awesome. As player progess, they earn coins which used to upgrade and buy vehicles.</p>
        </div>
        <div class="allmaps">
            <div>
                <h2>ALL ABOUT MAPS</h2>
                <P>When it comes to maps and other features hill climb always ahead of any game. This game provide more then 30+ maps and different type of seasional events continuously coming for them. Every map is different and feel unique in its own way.The jungle, moon, highway, forest, desert, snow and other</P>
            </div>
            <div>
                <img src="../assets/images/bg.jpg" alt="">
            </div>
        </div>
        <div class="allcars">
          
            <div>
                <img src="../assets/images/group.jpeg" alt="">
            </div>
            <div>
                <h2>ALL CARS</h2>
                <P>Hill climb contain more then 30+ cars that each can be upgraded and it also have a garage where we can make our own cars. the hcr is top of its field in cars. each car is unique and some have super features and long distace capicty upto million. jeep, truck, formula, moonlander and other</P>
            </div>
</div>
    <!-- footer -->
    <?php
   include "../dynamic/footer.html";
   ?>

<script src="../superjs/nav.js"></script>
    </body>
</html>