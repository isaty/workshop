<link rel="stylesheet"  href="style.css">
<?php
require 'connect.php';
session_start();
if(isset($_SESSION['auth']))
{
 
?>
  <html>
  <title>Search Page</title>
   <body>
     <div class="form-style">
   <h1>Search other users</h1>
   <form action="home.php">
   Search:<input type="textarea" name="search">
   <button type="submit">Search</button>
   </form>
   </body> 
</div>
   </html>
<?php
if(isset($_GET['search'])&&!empty($_GET['search'])){
  $field=$_GET['search'];
  echo "You searched for :".$field;
  $query="SELECT name,email FROM Register where name = '$field'";
  if($run=mysqli_query($conn,$query))
  {   
   while($query_run=mysqli_fetch_assoc($run))
   {?>
     <div class="form-style">
       <?php
     echo "<h2>".$query_run['name']."</h2>";
     echo "<h2>".$query_run['email']."</h2><br>";
     ?>
     </div>
   <?php
    }

  } 
 

}
}//closing if for auth
else
header('location:login_page.php');
?>

