<?php
error_reporting(0);
include('session.php');
include('register.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<html>
   <head>
      <title>Register new user</title> 
   </head> 

   <body>
      <p>Please enter information to register new user: </p>
      <form action="" method="post">
	 First Name: <input type="text" name="firstname" placeholder="John" required>
         <p>
	 Last Name: <input type="text" name="lastname" placeholder="Smith" required>
         <p>
	 Banner ID: <input type="text" name="studentid" placeholder="N00000008" required>
         <p>
	 Library ID: <input type="text" name="libraryid" placeholder="9180273948174285" required>
         <p>
	 Email: <input type="text" name="email" placeholder="smithj1@hawkmail.newpaltz.edu" required>
         <p>
         Password: <input type="text" name="password" placeholder="Password1234" required>
         <p>
         <input type="submit" name="submit" value="Submit">
      </form>
     
      <div style = "font-size:11px; color:#cc0000; margin-top:10px">
	 <?php echo $error; ?>
      </div> 
   </body>
</html>