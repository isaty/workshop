<?php
require 'connect.php';
session_start();
if(isset($_SESSION['auth']))
{
  echo "Comment Section";
   $query="SELECT * FROM comment ";
   if($result=mysqli_query($conn,$query))
{
    while($run=mysqli_fetch_assoc($result)){
       $html="<h3>".$run['name']."<h3>"."<h3>".$run['comment']."<h3>";
       echo "<script>document.getElementById('content').innerHTML=+".$html." </script>";
        // echo "<h3>".$run['name']."<h3>";
        // echo "<h3>".$run['comment']."<h3>";
    }
}
?>
<html>
      <title>Comment</title>
       <body>
       <h1>Comment Section</h1>
       <div id="content"></div>
       <form action="home3link.php" method=POST>
       Name:<input type="text" name="name">
       Comment:<input type="textarea" name="comment">
       <button type="submit">Search</button>
       </form>
       </body> 
      </html>
<?php
 }//end of auth
else 
header('location:login_page.php');
?>