
<?php
require 'connect.php';
session_start();
if(isset($_SESSION['auth']))
{   
    // if(isset($_POST['reciever'])&&isset($_POST['amount']))
    if(isset($_GET['reciever'])&&isset($_GET['amount']))
    {
        // $funds=
        $query="UPDATE register WHERE email='$email' SET fund=fund-'$funds';";
        if(mysqli_query($conn,$query))
        {
            header('location:funds.php');
        }
        else
        echo "Something Went Wrong";
    }
}
else 
header('location:login_page.php');
?>