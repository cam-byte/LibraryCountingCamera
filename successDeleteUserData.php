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
	<h1>Success! All the USER data has been deleted!</h1>
	<h3>(Note: admin-level users have not been deleted in this process)</h3>
        <form action="" method="post">
	  <button><a href="adminProfile.php">Return Home</a></button>
	</form> 
  </BODY>
</HTML>
