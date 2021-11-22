<?php
error_reporting(0);
include('session.php');
include('redirectChoices.php');
//Unused bit of code meant to display instructors and classes, does not work, but keep just in case
//<h4>Check this if you want to view instructors and which classes they are currently teaching</h4>
//<input type="radio" name="choice" value="5">View Instructor/Class Relationship
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
       <TITLE>Decisions</TITLE>
  </HEAD>

  <BODY>
	<h1>Select what you'd like to do!</h1>
        <form action="" method="post">
	  <h4>Check this if you want to view the data from the logs of the Daily Report data</h4>
  	  <input type="radio" name="choice" value="1" checked>View Daily Logs
	  <br>
	  <h4>Check this if you want to view the data from the logs of the Weekly Report data</h4>
  	  <input type="radio" name="choice" value="2">View Weekly Logs
	  <br>
	  <h4>Check this if you want to view the data from the logs of the Monthly Report data</h4>
  	  <input type="radio" name="choice" value="3">View Monthly Logs
	  <br>
	  <h4>Check this if you want to view the data from the logs of the Annual Report data</h4>
  	  <input type="radio" name="choice" value="4">View Annual Logs
	  <br>
	  <br>
  	  <input name="submit" type="submit" value="Submit">
	</form> 
  </BODY>
</HTML>
