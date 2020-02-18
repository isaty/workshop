<?php
session_start();
if(isset($_SESSION['auth']))
{
  echo "congrats YOu are logged in!";
}
?>