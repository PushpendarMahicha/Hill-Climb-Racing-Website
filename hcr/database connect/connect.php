<?php 

//used to conn and also used after in many things
$conn=mysqli_connect("localhost","root","","hcr");
//error check if faild then show error else connect success
if($conn)
{
    // echo "connect success";
}
else
{
    echo "error";
}
// for the insertion deletion and finding if user exists or not all these method created

//take username and password if added then return 1 else 0 1 for true 0 for false
function add($username,$password)
{
    global $conn;
    //before adding to table we check if it alreay exit or not
    if(check($username,$password)==0)
    {
        //it not exits then we are adding it to db
        $query="INSERT INTO `users` (`username`, `password`) VALUES ('$username','$password')";
        mysqli_query($conn,$query);
        // echo "created"
        return 1;
    }
    else
    {
        // echo "not created already exits"
        return 0;
    }
}
//this method is used to check if user already exits or not if exits then return 1 else 0;
function check($username,$password)
{
    global $conn;
    $query="SELECT * FROM `users` WHERE `username` LIKE '$username' AND `password` LIKE '$password'";
   $output= mysqli_query($conn,$query);
   //the mysqli_num_rows give the number of times this data exits if it is more then 0 then it is exits else not
   if(mysqli_num_rows($output)>0)
   {
    // echo "Account already exit";
    return 1;
   }
   else
   {
    // echo "not";
    return 0;
   }
}

//to delete a account only used by admin
function delete($username,$password)
{
    global $conn;
   $query="DELETE FROM `users` WHERE `users`.`username` = '$username'";
   //run the query
   $output= mysqli_query($conn,$query);
   if($output)
   {
    //we check if still exit or not
    if(check($username,$password)==0)
    {
        //deleted done
        echo "delete";
        return 1;
    }
   }
   else
   {
    //faild to delete
    echo "faild";
    return 0;
   }
}