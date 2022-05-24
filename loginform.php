<?php
session_start();
include_once("(2)include/mysql_connect.php");
if(isset($_POST["user"])){
	
$username1=$_POST["user"];
$password1=$_POST["pass"];
$command="SELECT username,password FROM users WHERE
 username='$username1' AND password='$password1'";
$rows=mysqli_query($connect,$command);

if(mysqli_num_rows($rows) == 1){
	
	$_SESSION["login"]=$username1;
	header("location:masterpage.php");
}else{
	echo "<span style='color:red;'>your username and password is roing!</span>";
}


}


?>
<html>
<head>
<title>Login Form </title>
<link rel="stylesheet" type="text/css" href="(1)assets/loginform.css">
</head>
<body>
<div class="logininbox">
<form method="post">
<img src="(1)assets/photo/images.png" class="userimg">
<h1>Login Here</h1>
<p>Username</p>
<input type="text" name="user" placeholder="Enter your Username">
<p>Password</p>
<input type ="password" name="pass" placeholder="Enter your password">
<input type="submit" value="Login">
<a href="#">Create a knew Accound</a><br>
<a href="#">For got yout Accound</a>
</form>
</div>

</body>
<html>