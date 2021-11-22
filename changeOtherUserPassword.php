<?php
error_reporting(0);
include('session.php');
include('updateOtherUserPassword.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<html>
   <head>
      <title>Change Someone Else's Password</title> 
   </head> 

   <body>
      <p>Please enter the following information to change someone else's password: </p>
      <form action="" method="post">
	 Their Email: <input type="text" name="email" required>
         <p>
	 New Password: <input type="text" name="newPassword" required>
         <p>
         <input type="submit" name="submit" value="Submit">
      </form> 
   </body>
</html>