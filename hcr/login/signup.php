<html>
    <head>
        <title>Signup page</title>    
        <?php
        include "../dynamic/link.html"
        ?>
    </head>
    <body class="div-flex-row">
                <!-- //bg -->
                <div class="Thebg2"></div>
                 <!-- -------- -->
        <form class="div-flex-column" method="POST" action="">

            <!-- //connecting to db first so that we can add data to db -->
            <?php include "../database connect/connect.php"?>
            <!-- ---------------------------------------------- -->

     <!-- //php file that send data to database and also check for account alreay created or not -->
        <?php if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            //check if all field filled or not
            if(($_POST["name"])!=NULL&&($_POST["password"])!=NULL&&($_POST["password2"])!=NULL)
            {
                //both pass are same
                if($_POST["password"]===$_POST["password2"])
                {
                    $name=$_POST["name"];
                    $password=$_POST["password"];
                    $output=add($name,$password);
                    //if added then 1 else 0
                    echo $output==1?"<h2 class='green'>Account Successfull Created <br>
                    Redirected.....</h2>":"<h2 class='red'>Account already exits</h2>";
                    //to make delay of 5 second and direct user to page
                    echo "<script>
                    setTimeout(()=>
                    { window.location.href='userlogin.php';
                    },1000);
                    </script>";
                }
                else
                {
                    echo "<h2 class='red'>Password are not same</h2>";
                }
            }
           else
           {
            echo "<h2 class='red'>Please enter all the fields</h2>";
           }
           
        }?>
        <!-- ---------------------------------------- -->
            <h2 class="text-medium">CREATE</h2>
            <input type="text" placeholder="username..." class="input-white margin-medium" name="name">
            <input type="password" placeholder="password..." class="input-white margin-small" name="password">
            <input type="password" placeholder=" confirm password..." class="input-white margin-small" name="password2">
            <input type="submit" value="CREATE" class="button-blue">
        </form>
   </body>
</html>