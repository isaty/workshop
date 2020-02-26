
<?php
require 'connect.php';
session_start();
if(isset($_SESSION['auth']))
{   
    // if(isset($_POST['reciever'])&&isset($_POST['amount']))
    if(isset($_GET['reciever'])&&isset($_GET['amount']))
    {
        $funds=$_GET['amount'];
        $name=$_GET['reciever'];
        $email=$_SESSION['auth'];
        $query="UPDATE register  SET funds=funds-'$funds' WHERE email='$email'";
        if(mysqli_query($conn,$query))
        {  
            $query2="UPDATE register  SET funds=funds+'$funds' WHERE name='$name'";
             if(mysqli_query($conn,$query2))
            header('location:http://10.10.10.245/workshop/funds.php');
             else
             header('location:http://10.10.10.245/workshop/home.php');
        }
        else
        echo "Something Went Wrong";
    }
}
else 
header('location:login_page.php');
?>