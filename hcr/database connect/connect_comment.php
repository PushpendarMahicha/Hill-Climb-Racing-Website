<?php
//session start
if(session_status()===PHP_SESSION_NONE){session_start();}
//making a connection to db so that we can perform actions
$conn_comment=mysqli_connect("localhost","root","","hcr");
// the comment table take time too that is why we set time
date_default_timezone_set("Asia/Kolkata");
// add_comment, comment_show, remove_comment method are created so that front can use them to perform different different task in the comment-box

//every method is called so that it check when request made. if we do not call it then it will not work properly. yes, we can put the method program outside for it to work but that is hard to manage (maybe).

  // the front contain a file ajax.js that have multiple method for different different tasks. we use $_POST["post"] to know if request is for posting or adding comment. the 
  // front send post=1 in data if it is for add comment and get=1 if it is for accessing comments and remove=1 for deleting.

  //to add comments
add_comment();
function add_comment()
{
 global
  $conn_comment;
    if(isset($_POST["post"]))
      {
        $username=$_SESSION["username"]==NULL?"":$_SESSION["username"];
        $content_id=$_POST["content_id"];
        $date=date("Y-m-d H:i:s");
        $message=$_POST["message"]==NULL?"NULL":$_POST["message"];
        
        $sql="INSERT INTO `comments` (`content_id`, `username`, `date`, `message`)VALUES ('$content_id', '$username', '$date', '$message')";
        $output=mysqli_query($conn_comment,$sql);
     }
}
//to show comments need content_id in reqeust
comment_show();
function comment_show()
{   
    global $conn_comment;
    if(isset($_POST["get"]))
    {

      $content_id=$_POST["content_id"];
      //check if user logined or not
      $logined=isset($_SESSION["username"])?true:false;
      $sql="SELECT * FROM comments WHERE `content_id`='$content_id'";
      $output=mysqli_query($conn_comment,$sql);
      while($row=mysqli_fetch_assoc($output))
      {
        $hiddendelete='
        <button onclick="remove(this)" hidden name='.$row["comment_id"].'>delete</button>
        ';
        $showdelete='<button onclick="remove(this)" name='.$row["comment_id"].'>delete</button>';
        //if logined then show delete button.
        $delete=($logined&&$_SESSION["username"]==$row["username"])?$showdelete:$hiddendelete;
          echo '
          <div class="single-comment">
          <h2>'.$row["username"].'</h2>
          <span>'.$row["date"].'</span>
          <p>'.$row["message"].'</p>
          '.$delete.'
          </div>
          ';
    }
    
    }
}
//to remove comments need comment_id by front
remove_comment();
function remove_comment()
{
 global $conn_comment;
  if(isset($_POST["remove"]))
  {    
    $comment_id= $_POST["comment_id"];

    $sql="DELETE FROM `comments` WHERE `comments`.`comment_id` = $comment_id";
     $output=mysqli_query($conn_comment,$sql);
  }   
}
//user logined or not
checklogin();
function checklogin()
{
  if(isset($_POST["status"]))
  {
    $loginstatus=isset($_SESSION["username"])?"1":"0";
    echo $loginstatus;
  }
}
?>