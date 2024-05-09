<?php 
session_start();
$_SESSION["username"]="";
//very important
//this file run when user open welcome.php. it create db and table if not created manually and this should be run always first.
$db="hcr";
$table_and_sqls=array(
    array("users","CREATE TABLE `$db`.`users` (`userId` INT(10) NOT NULL AUTO_INCREMENT , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , PRIMARY KEY (`userId`)) ENGINE = InnoDB"),
    array("comments","CREATE TABLE `$db`.`comments` (`comment_id` INT(10) NOT NULL AUTO_INCREMENT , `content_id` INT(10) NOT NULL , `username` VARCHAR(30) NOT NULL , `date` DATETIME NOT NULL , `message` TEXT NOT NULL , PRIMARY KEY (`comment_id`)) ENGINE = InnoDB"),
    array("mails","CREATE TABLE `$db`.`mails` (`mail_id` INT(10) NOT NULL AUTO_INCREMENT , `username` VARCHAR(30) NOT NULL , `usermail` VARCHAR(30) NOT NULL , `message` TEXT NOT NULL , PRIMARY KEY (`mail_id`)) ENGINE = InnoDB")
);
setDB($db,$table_and_sqls);
function setDB($db,$table_and_sqls)
{
    $conn=mysqli_connect("localhost","root","");
    //if created good not created then create   
    // echo "a";
    if($conn && $table_and_sqls)
    {
        $dbexitschecksql="CREATE DATABASE IF NOT EXISTS $db";
        mysqli_query($conn,$dbexitschecksql);

        mysqli_select_db($conn,$db);

        for($i=0;$i<count($table_and_sqls);$i++)
        {

            $tablename=$table_and_sqls[$i][0];
            $tablequery=$table_and_sqls[$i][1];
            $tableexitschecksql="SELECT COUNT(*) as count FROM information_schema.tables WHERE table_schema='$db' AND table_name='$tablename'";
            $tableexits=mysqli_query($conn,$tableexitschecksql);
            if(($a=mysqli_fetch_assoc($tableexits)['count']==0))
            {
                //if table not exit then create and to show it use
                // echo $table_and_sqls[$i][0].$table_and_sqls[$i][1];
            mysqli_query($conn,$tablequery);
        }   
    }   
}

}?>
