<?php
session_start();
?>

<html>
    <head>
        <title>login page</title>  
        <!-- //css   -->
        <?php include "../dynamic/link.html"; ?>
        <!-- //connecting to db -->
        <?php include "../database connect/connect.php"; ?>
    </head>
    <body class="div-flex-column full-width full-height">
                <!-- //bg -->
                <div class="Thebg2"></div>
                 <!-- -------- -->
        <form class="div-flex-column" method="POST" action="userlogin.php">
            <h2 class="text-medium">USER</h2>
            <input type="text" placeholder="username..." class="input-white margin-medium" name="name">
            <input type="password" placeholder="password..." class="input-white margin-small" name="password">
            <input type="submit" value="LOGIN" class="button-blue">
        </form>
            <span class="text-small">OR</span>
            <a href="signup.php"><button class="button-white">SIGNUP</button></a>
            <!-- //form handle -->
        <?php 
           if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            //check if all field filled or not
            if(($_POST["name"])!=NULL&&($_POST["password"])!=NULL)
            {
                    $name=$_POST["name"];
                    $password=$_POST["password"];
                    $output=check($name,$password);
                if($output)
                {
                    $_SESSION["username"]=$name;
                    $_SESSION["password"]=$password;
                    header("location:../pages/home.php");
                }
                else
                {
                    echo "<h2 class='red'>Account not exits</h2>";
                }
            }
                else
                {
                    echo "<h2 class='red'>Please enter all the fields</h2>";
                }
        }
        ?>
   </body>
</html>