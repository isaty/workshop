<?php
session_start();
if(isset($_SESSION['auth']))
{
    header('Location:home.php');
}
?>
    <head>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
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
</table>
<div class="g-recaptcha" data-sitekey="6Ld9G5QUAAAAACEDDCtEV6NGgjXkQkK5ECEZUdL_"></div>

<button type="submit">Login</button>

</form>
    </body>
