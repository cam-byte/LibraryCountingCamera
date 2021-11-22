<?php
error_reporting(0);
include('session.php');
include('redirectAddAdmin.php');
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
       <TITLE>Adding an Admin</TITLE>
  </HEAD>

  <BODY>
	<h1>Adding an admin user to a new user or an existing user</h1>
        <form action="" method="post">
	  <h4>Check this if you are making an existing user an admin</h4>
  	  <input type="radio" name="choice" value="1" checked>Existing User<br>
	  <h4>Check this if you are making a new user an admin</h4>
  	  <input type="radio" name="choice" value="2">New User<br>
	  <br>
  	  <input name="submit" type="submit" value="Submit">
	</form> 
  </BODY>
</HTML>
