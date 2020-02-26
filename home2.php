<?php
session_start();
if(isset($_SESSION['auth']))
{
    echo "<h1>You can navicate through our gallery!<h1>";
    ?>
      <html>
      <title>DOM BASED</title>
      <script
      src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
       <body>
       <button><div class="tab" id="tab1" onclick="chooseTab('1')">Image 1</div></button>
        <button><div class="tab" id="tab2" onclick="chooseTab('2')">Image 2</div></button>
        <button><div class="tab" id="tab3" onclick="chooseTab('3')">Image 3</div></button> 
        <div id="tabContent"> </div>
       <script>
       function chooseTab(num){
         
       var html = "Image " + parseInt(num) + "<br>";
        html += "<img src='public/" + num + ".jpg' />";
        // $('#tabContent').html(html);  
        document.querySelector('#tabcontent').innerHTML=html
        window.location.hash = num;
       }

       window.onload= function() { 
        chooseTab(unescape(self.location.hash.substr(1)) || "1");
      }
       </script>
       </body> 
      </html>
    <?php
}
?>