<?php
session_start();
if(isset($_SESSION['auth']))
{
    header('Location:home.php');
}
?>
    <body>
    <form aciton="login.php" method="POST">
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
