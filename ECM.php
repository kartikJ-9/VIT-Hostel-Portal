<?php
include "loginserv.php" ;
?>

<!DOCTYPE html>
<html lang="en ">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
.navbar-header{
background-color:	rgb(255, 255, 0)	;
}
.container-fluid{
background-color:		rgb(255, 255, 0)	;
}
.navbar navbar-default{
background-color:		rgb(255, 255, 0);
}
.nav navbar-nav{
background-color:rgb(255, 255, 0);
}
#login{
font-size:18px;
font_weight:normal;
font-style:italic;
margin: 100px 50px 50px 500px;
border:30px 30px 30px 30px;
border-style:30px solid blue;
resize: vertical;
overflow: auto;
padding:20px;
}
#radio{
font-size:15px;
padding:40px;
}
body{
padding:20px;
background-color:rgb(200,50,69);
resize: vertical;
overflow: auto;
background-image:url(pic.png);
}
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}


</style>
</head>
<body>
<p id="demo"></p>
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
});
</script>
<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</div>
<div class="container">                
  <ul class="pager">
    <li><a href="ECM.html" "page1.html">Previous</a></li>
    <li><a href="page1.html" "Page2.html">Next</a></li>
  </ul>
</div>
<div id="flip">Click the Instruction panel</div>
<div id="panel">Hello VITians!</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>Hostel Room Registraion<b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html"><b>Login Page</b></a></li>
      <li><a href="page1.html"><b>Basic Info</b></a></li>
      <li><a href="Page2.html">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
	  <li><a href="#">Page 4</a></li>
	  <li><a href="#">Page 5</a></li>
	  
    </ul>
  </div>
</nav>
<div id="login">
<form action="loginserv.php" method="POST" id="next">
Username:<br>
<input type="text" id="user" name="user" required>
<br>
<!--Password:<br>-->
<!--<input type="password" name="lastname" required>-->
Password:<br> <input type="password" value="" id="pass" name="pass" required><br><br>
<input type="checkbox" onclick="myFunction()">Show Password
<br><br>
<!--input type="submit" value="Login" name="next"-->
<input type="reset">
<button><div name="next">Submit</div></button>
</form> 
<!--
<div id="radio">

<form action="/action_page.php" method="post">
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female" required> Female<br><br>
  <input type="submit" value="Submit">
</form> 
</div>
-->
<br><br>
<!-- Error Message -->
<span><?php echo $error; ?></span>
</body>
</html>