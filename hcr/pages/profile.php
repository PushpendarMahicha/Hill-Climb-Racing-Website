<!-- login check -->
<?php
include "../login/logincheck.php";
?>
<!-- -------------- -->
<html>
    <head>
        <title>About</title>
        <?php
        include "../dynamic/link.html";
        ?>
    </head>
    <body class="div-flex-column">
                <!-- //bg -->
    <div class="Thebg"></div>
    <!-- -------- -->
        <?php include "../dynamic/nav.html"; ?>
        <div class="profile">
            <?php
            $username=$_SESSION['username']==''?'GUEST':$_SESSION['username'];
            echo "<span class='text-small'>Username: ".$username."</span>";
            ?>
            <form method="POST" action="">
                <?php
                if(isset($_POST["logout"]))
                {
                    session_destroy();
                    header("location: ../login/welcome.php");
                }
                ?>
            <input class="button-white" type="submit" name="logout" value="LOGOUT">
            </form>
        </div>
     <script src="../superjs/nav.js"></script>
    </body>
</html>