<?php
// header('location:http://127.0.0.1:8000/logout')
?>
<script>
var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function(){
if(this.status==200)
alert("wallah")
}
xhttp.open('POST','http://127.0.0.1:3000/logout',true)
xhttp.setRequestHeader('origin','http://127.0.0.1:3000')
xhttp.setRequestHeader('host','127.0.0.1:3000')
xhttp.send()
</script>