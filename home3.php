<title>Comment</title>
	 <link rel="stylesheet" href="public/style.css">
	  <body>
      
       <div id="content"></div>
        
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
		
		?>
		<div class="firstmain">

		<?php
       $html="<h3>".$run['name']."<h3>"."<h3>".$run['comment']."<h3>";
	   echo $html;
	   
	   ?>
	   </div>
	   
	   <?php

    }
}
?>

       <div class="form-style">
       
       <form action="home3.php" method=POST>
        <ul>
            <li>
            <input type="text" name="name" class="field-style field-full align-none" placeholder="Name" />
            </li>
            <li>
            <textarea name="comment" class="field-style" placeholder="Message"></textarea>
            </li>
            <li>
            <button type="submit">Send</button>
            </li>
            </ul>
       </form>
       </div>
       </body> 
    
<?php


if(isset($_POST['name'])&&isset($_POST['comment'])&&!empty($_POST['name'])&&!empty($_POST['comment']))
{
	$name=$_POST['name'];
	$comment=$_POST['comment'];
	$query="INSERT INTO `comment` (`no`,`name`,`comment`) VALUES ('','$name','$comment');";
	if(mysqli_query($conn,$query))
	{
      header('location:home3.php');
	}
}

}//end of auth
else 
header('location:login_page.php');
?>