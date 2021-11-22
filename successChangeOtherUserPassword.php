<?php
error_reporting(0);
include('session.php');
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
       <TITLE>Success!</TITLE>
  </HEAD>

  <BODY>
	<h1>Success! You were able to change someone else's password!</h1>
        <form action="" method="post">
	  <button><a href="adminProfile.php">Return Home</a></button>
	</form> 
  </BODY>
</HTML>
