<?php
require 'connect.php';
session_start();
if(isset($_SESSION['auth']))
{
  echo "congrats You are logged in!";
?>
  <html>
  <title>Search Page</title>
   <body>
   <h1>Search other users</h1>
   <form action="home.php">
   Search:<input type="text" name="search">
   <button type="submit">Search</button>
   </form>
   </body> 
  </html>
<?php
if(isset($_GET['search'])&&!empty($_GET['search'])){
  $field=$_GET['search'];
  $query="SELECT name,email From Register where `name`= $field";
  if($run=mysqli_query($conn,$query))
  {   echo "You searched for :".$field;
   while($query_run=mysqli_fetch_assoc($run))
   {
     echo "<h1>".$query_run['name']."</h1>";
     echo "<h2>".$query_run['email']."</h2><br>";
   }

  }

}
?>


<?php
}//closing if for auth
else
header('location:login_page.php');
?>

