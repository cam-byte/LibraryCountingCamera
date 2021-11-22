<?php
error_reporting(0);
include('session.php');
include('redirectAfterReg.php');
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
       <TITLE>Success</TITLE>
  </HEAD>

  <BODY>
	<h1>Success! You have just registered a new instructor!</h1>
        <form action="" method="post">
	  <h4>Would you like to register another instructor or return to the main menu?</h4>
  	  <input type="radio" name="choice" value="1" checked>New Instructor<br>
  	  <input type="radio" name="choice" value="2">Return to Main Menu<br>
	  <br>
  	  <input name="submit" type="submit" value="Submit">
	</form> 
  </BODY>
</HTML>
