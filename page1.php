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
  <form action="/action_page.php">
<style>
#background {
	background: url(../images/background.png) repeat 5% 5%;
	position: absolute;
	top: 0; left: 0; right: 0; bottom: 0;
	z-index: 100;
}

#midground {
	background: url(../images/midground.png) repeat 20% 20%;
	position: absolute;
	top: 0; left: 0; right: 0; bottom: 0;
	z-index: 200;
}

#foreground {
	background: url(../images/foreground.png) repeat 90% 110%;
	position: absolute;
	top: 0; left: 0; right: 0; bottom: 0;
	z-index: 300;
}
.navbar-header{
background-color:	rgb(255, 255, 0)	;
}
.container-fluid{
background-color:		rgb(255, 255, 0)	;
}
.navbar navbar-default{
background-color:		rgb(255, 255, 0);
}
#login{
font-size:12px;
font_weight:normal;
font-style:italic;
border:30px 30px 30px 30px;
border-style:30px solid blue;
resize: vertical;
overflow: auto;
padding:20px;
}
body{
padding:20px;
background-color:rgb(200,50,69);
resize: vertical;
overflow: auto;
background-image:url(wow.jpg);
}
}
pic{
backgroung-image:url(pic.png);
}

</style>
</head>
<body>
</div>
<div class="container">                
  <ul class="pager">
    <li><a href="ECM.html">Previous</a></li>
    <li><a href="Page2.html">Next</a></li>
  </ul>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>Hostel Room Registraion<b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="a"><a href="index.html"><b>Login Page</b></a></li>
      <li><a href="page1.html"><b>Basic Info</b></a></li>
      <li><a href="Page2.html">Choices</a></li>
      <li><a href="#">Page 3</a></li>
	  <li><a href="#">Page 4</a></li>
	  <li><a href="#">Page 5</a></li>
	  
    </ul>
  </div>

<div id="login">
<h3>Branch you belong to:</h3>
<form action="/action_page.php">
  <select name="cars">
    <option value="CSE">CSE</option>
    <option value="ECM">ECM</option>
    <option value="EEE">EEE</option>
    <option value="ECE">ECE</option>
	<option value="MECH">MECH</option>
	<option value="CIVIL">CIVIL</option>
  </select>
  <br><br>
<h3>Mess you belong to:</h3>
<form action="/action_page.php">
  <select name="cars">
    <option value="N-NonVeg">N-NonVeg</option>
    <option value="N-Veg">N-Veg</option>
    <option value="Special">Special</option>
    <option value="South">South</option>
  </select>
  <br><br>
  <h3>Enter Rank</h3>
<form action="/action_page.php" method="post">
Rank:<br>
<input type="text" name="Rank" required>
<br>
<br>
<h3>Select Gender</h3>
<form action="/action_page.php">
  <select name="cars">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
  <br><br>
  <input type="submit">
</form>
</form>
</form>
</form>
<br><br>
</div>

</body>
</html>