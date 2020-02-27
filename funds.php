
<?php
require 'connect.php';
session_start();
if(isset($_SESSION['auth']))
{?>
<html>
  <head>
    <link rel="stylesheet" href="public/style.css" >
  </head>
  <div style="margin: auto;
  width: 20%;">
    <h2>This is my funds page</h2>
  </div>
<?php
  $email=$_SESSION['auth'];
   $query="SELECT * FROM register where email='$email';";
   if($result=mysqli_query($conn,$query))
   {
      while($run=mysqli_fetch_assoc($result))
      {?>
        <div class="main">
          
          <h4 style="font-weight:bold"> My funds </h4>

        <?php
        echo $run['funds'];
        ?>
        </div>
        <?php
      }

   }
}
else
header('location:login_page.php')
?>
