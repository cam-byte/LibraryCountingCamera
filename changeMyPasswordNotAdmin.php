<?php
error_reporting(0);
include('session.php');
include('updateMyPasswordNotAdmin.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<html>
   <head>
      <title>Change My Password</title> 
   </head> 

   <body>
      <p>Please enter the following information to change your password: </p>
      <form action="" method="post">
	 Your Email: <input type="text" name="email" required>
         <p>
	 Current Password: <input type="text" name="curPassword" required>
         <p>
	 New Password: <input type="text" name="newPassword" required>
         <p>
         <input type="submit" name="submit" value="Submit">
      </form> 
   </body>
</html>