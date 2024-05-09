<!-- //login check -->
<?php
include "../login/logincheck.php";
?>
<!-- ----------------- -->
<html>
    <head><title>Contact</title>
    <?php include "../dynamic/link.html"; ?>
    <link rel="stylesheet" href="../super/contact.css">
</head>
  <body class="div-flex-column">
      <!-- //bg -->
    <div class="Thebg"></div>
    <!-- -------- -->
       <!-- navigation -->
       <?php 
        include "../dynamic/nav.html";
         ?>
         <!-- -------------- -->
        
         <!-- form -->
        <form method="POST" id="contact" class="div-flex-column" action="">
            <?php
            
            include  "../database connect/connect_contact.php";
            if(isset($_POST["send"]))
            {
                echo send($_POST["name"],$_POST["email"],$_POST["message"])=="1"?"<span class='green'>Successfully send</span>":"<span class='red'>enter all fields</span>";
            }
            ?>
            <input type="text" class="input-white margin-big" name="name" placeholder="name">
            <input type="email" class="input-white margin-big" name="email" placeholder="email">
            <textarea id="textarea-contact" name="message" ></textarea>
            <input type="submit" class="button-blue" name="send">
        </form>

        <!-- footer -->
    <?php
   include "../dynamic/footer.html";
   ?>
   <!-- js -->
    <script src="../superjs/nav.js"></script>
    </body>
</html>