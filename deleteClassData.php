<?php
error_reporting(0);
include('session.php');
include('classDataGone.php');
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
       <TITLE>Warning!</TITLE>
  </HEAD>

  <BODY>
	<h1>Warning! Deleting Weekly Report data will mean a complete memory wipe!</h1>
	<h2>You will have to upload reports manually or through excel import after this process is completed</h2>
        <form action="" method="post">
	  <h3>Are you sure you want to delete all class data?</h3>
  	  <input type="radio" name="choice" value="1">Yes<br>
  	  <input type="radio" name="choice" value="2" checked>No<br>
	  <br>
  	  <input name="submit" type="submit" value="Submit">
	</form> 
  </BODY>
</HTML>
