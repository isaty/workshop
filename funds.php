<?php
require 'connect.php';
session_start();
if(isset($_SESSION['auth']))
{
  echo "This is my Funds Page";
  $email=$_SESSION['auth'];
   $query="SELECT * FROM register where email='$email';";
   if($result=mysqli_query($conn,$query))
   {
      while($run=mysqli_fetch_assoc($result))
      {
        echo "<br>My Funds<br>";
        echo $run['funds'];
      }

   }
}
else
header('location:login_page.php')
?>
