<?php
error_reporting(0);
include('session.php');
include('redirectLogsWeekly.php');
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
       <TITLE>Decisions</TITLE>
  </HEAD>

  <BODY>
	<h1>Select how you'd like to view your Weekly Report Data Table</h1>
        <form action="" method="post">
	  <h4>Check this if you want to see all time time stamps</h4>
  	  <input type="radio" name="choice" value="1" checked>View all logs<br>
	  <h4>Check this if you want to see when most students entered</h4>
  	  <input type="radio" name="choice" value="3">View Time of Max Traffic<br>
	  <br>
  	  <input name="submit" type="submit" value="Submit">
	</form> 
  </BODY>
</HTML>
