<?php
require 'connect.php';
session_start();
if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password']))
{
   $name=$_POST['name'];
    $email=$_POST['email'];
 $pass=$_POST['password'];
  $query="INSERT INTO `register` (`name`,`email`,`password`) VALUES ('$name','$email','$pass');";
  if(mysqli_query($conn,$query))
  {
   $_SESSION['auth']=true;
   header('Location:home.php');
  }
  else
{
    echo mysqli_error($conn);
}
}
else
{
  echo "fill all the field";
}


?>