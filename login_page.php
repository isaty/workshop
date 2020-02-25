<?php
session_start();
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
require 'connect.php';
if(isset($_POST['email'])&&isset($_POST['password'])&&!empty($_POST['email'])&&!empty($_POST['password']))
{
    $query="SELECT * FROM register where `email`=$_POST['email'] `password`=$_POST['passowrd'];";
    if(mysqli_query($query))
    { 
        $_SESSION['auth']=true;
        header('location:home.php');
    }
        header('location:login_page.php');
}
?>
    
