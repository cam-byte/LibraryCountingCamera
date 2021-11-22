<?php
error_reporting(0);
include('session.php');
include('redirectChangePassword.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
       <TITLE>Change Password</TITLE>
  </HEAD>

  <BODY>
	<h1>Are you changing your password or the password of someone else?</h1>
        <form action="" method="post">
	  <h3>Please select an option below:</h3>
  	  <input type="radio" name="choice" value="1" checked>My own password<br>
  	  <input type="radio" name="choice" value="2">Someone else's password<br>
	  <br>
  	  <input name="submit" type="submit" value="Submit">
	</form> 
  </BODY>
</HTML>
