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
	<h1>Success! You were able to change your own password!</h1>
        <form action="" method="post">
	  <button><a href="profile.php">Return Home</a></button>
	</form> 
  </BODY>
</HTML>
