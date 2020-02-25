<?php
require 'connect.php';
session_start();
if(isset($_SESSION['auth']))
{
  echo "This is my Funds Page";
  $email=$_SESSION['auth'];
   $query="SELECT funds FROM register where email='$email';";
   if($result=mysqli_query($conn,$query))
   {
      while($run=mysqli_fetch_assoc($result))
      {
        echo "My Funds<br>";
        echo $run['fund'];
      }

   }
}
else
header('location:login_page.php')
?>
