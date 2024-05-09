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
function send($username,$usermail,$message)
{
    global $conn;
    if($username&&$usermail&&$message)
     { $query="INSERT INTO `mails` (`username`, `usermail`, `message`) VALUES ('$username','$usermail','$message')";
        $output=mysqli_query($conn,$query);
        if($output)
        {
            return 1;
        }
    }
    else
    {
        return 0;
    }
}
?>