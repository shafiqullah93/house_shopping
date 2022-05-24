<!--$connect-->
<?php
//session_start();
include_once("(2)include/mysql_connect.php");
if(isset($_POST["submit"])){
          $Username1=$_POST["username"];
          $LastName1=$_POST["lastname"];
          $PhoneNumber=$_POST["phonenamber"];
          $Email1=$_POST["email"];
          $Instgram1=$_POST["instgram"];
          $User1=$_POST["user"];
          $password1=$_POST["pass1"];
          $password2=$_POST["pass2"];
          $photos=$_FILES["photo"]["name"];
     if($password1==$password2){
         $command="insert into users  values (null,'$Username1','$LastName1','$PhoneNumber','$Email1','$Instgram1','$User1','$password1','$photos')";
         $rows=mysqli_query($connect,$command);

    if($rows==true){
	       $move=move_uploaded_file($_FILES["photo"]["tmp_name"],"(1)assets/agent_photo/".$_FILES["photo"]["name"]);	          
			  if($move==true){
		           echo "successfully file moved and inserted!";
	                          }
   }else{
	      echo "Not inserted plase try agin !";
        }
	 }else{
		 echo "your password is not machet!";
	 }

}


?>
<html>
<head>
<title>Create Userpage</title>
<link rel="stylesheet" type="text/css" href="(1)assets/create_user.css">
</head>
<body>
<div class="logininbox">

<form method="post" enctype="multipart/form-data">

<img src="(1)assets/photo/images.png" class="userimg">
<h1>Create User</h1>
<p>Username</p>
<input type="text" name="username" placeholder="Enter your Username">
<p>LastName</p>
<input type ="text" name="lastname" placeholder="Enter your password">
<p>phoneNamber</p>
<input type="text" name="phonenamber" placeholder="Enter your Username">
<p>Enter Email Addrasse</p>
<input type ="text" name="email" placeholder="Enter your password">
<p>Instgram Addrasse</p>
<input type ="text" name="instgram" placeholder="Enter your password">
<p>UserName</p>
<input type ="text" name="user" placeholder="Enter your password">
<p>password</p>
<input type ="password" name="pass1" placeholder="Enter your password">
<p>reped</p>
<input type ="password" name="pass2" placeholder="Enter your password">
<p>Choose photo</p>
<input type ="file" name="photo" placeholder="Enter your password">
<input type="submit" value="Save" name="submit">
</form>
</div>

</body>
<html>