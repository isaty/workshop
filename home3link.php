<?php
session_start();
require "connect.php";
if(isset($_SESSION['auth']))
{
  if(isset($_POST['name'])&&isset($_POST['comment']))
  {   $name=$_POST['name'];
      $comment=$_POST['comment'];
      $query="INSERT INTO `register` (`name`,`comment`) VALUES ('$name','$comment');";
    if(mysqli_query($conn,$query))
    {
        $html="<h3>".$name."<h3>"."<h3>".$comment."<h3>";
        echo "<script>document.getElementById('content').innerHTML=+".$html." </script>";
    }

  }
   header('location:home3.php');

}
 header('location:login_page.php');

?>