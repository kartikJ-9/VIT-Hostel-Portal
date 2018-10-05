<html>
<h1> Login page</h1>
</html>

<?php
$error=''; //Variable to Store error message;
if(isset($_POST['next'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "sample");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM login WHERE Password='$pass' AND Username='$user'");
 echo "Hello";
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: welcome.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>