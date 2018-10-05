<?php
//Get values from the login file.

$username = $POST['username'];
$password = $POST['password'];

//to prevent mysql injection
$username = stripcslashes($username);
$username = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);	

//connect to the server and select databse
mysql_connect("localhost","root","");
mysql_select_db("sample");

//Query the databse for the user
echo mysql_query($sql = "SELECT * FROM `login`");
$result = mysql_query("select * from login where Username = '$username' and Password = '$password'")
or die ("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if($row['username'] == $username) && $row['password'] == $password){
	echo "Login success! Welcome".$row['username'];
}
else{
	echo "Failed to login!";
}
	
?>


