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
        echo "<h3>".$run['name']."<h3>";
        echo "<h3>".$run['comment']."<h3>";
    }
}
?>
<html>
      <title>Comment</title>
       <body>
       <h1>Comment Section</h1>
       <form action="home3.php" method=POST>
       Name:<input type="text" name="name">
       Comment:<input type="textbox" name="comment">
       <button type="submit">Search</button>
       </form>
       </body> 
      </html>
<?php
 if(isset($_POST['name'])&&isset($_POST['comment']))
 {
     $name=$_POST['name'];
     $comment=$_POST['comment'];
   $query1="INSERT INTO `comment` (`name`,`comment`) VALUES ('$name','$comment');";
    if(mysqli_query($conn,$query1))
    {
        echo "<h3>".$name."<h3>";
        echo "<h3>".$comment."<h3>";
    } 

}
 }//end of auth
else 
header('location:login_page.php');
?>