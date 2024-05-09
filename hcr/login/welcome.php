<html>
    <head>
        <title>welcome page</title>    
        <?php
        include "../dynamic/link.html";
        ?>
        <?php
        include "../database connect/setDB.php";

        ?>        
    </head>
    <body class="div-flex-row">
                <!-- //bg -->
                <div class="Thebg2"></div>
                 <!-- -------- -->
        <div id="welcome" class="div-flex-column">
            <h2 class="text-big margin-big">WELCOME</h2>
            <h4 class="text-small margin-big">Please log in first</h4>
            <a href="userlogin.php"><button class="button-blue">LOGIN</button></a>
            <a href="signup.php"><button class="button-white">SIGN-UP</button></a>
        </div>
   </body>
</html>