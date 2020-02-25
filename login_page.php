<?php
session_start();
require 'connect.php';
if(isset($_SESSION['auth']))
{
    header('Location:home.php');
}
?>
    <body>
    <form action="login_page.php" method="POST">
        <table>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email"></td>    
        </tr>
        <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
        </tr>
        <tr>
        <td><button type="submit">Login</button></td>
        </tr>
    
</table>
</form>
    </body>
<?php

if(isset($_POST['email'])&&isset($_POST['password'])&&!empty($_POST['email'])&&!empty($_POST['password']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $query="SELECT * FROM register where email='$email' AND password='$pass' ;  ";
    if($result=mysqli_query($conn,$query))
    { 
        
        $_SESSION['auth']=$email;
        header('location:home.php');
    }
    else
        header('location:login_page.php');

}
?>
    
