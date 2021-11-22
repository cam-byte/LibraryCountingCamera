<?php
error_reporting(0);
include('login.php'); // Includes Login Script
?> 

<html>

<head>
    <title> Library Traffic Camera Data </title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="login">
    <CENTER>
      <h2 style="text-align:center" id="loginFont">Login Here!</h2>
      	<form action="" method="post">
	   <p id="loginFont" style="font-size:20px;">Username:
    	   <input id="name" type="text" name="username" placeholder="Enter your username" required>
	   <p id="loginFont" style="font-size:20px;">Password:
           <input id="password" type="password" name="password" placeholder="Enter your password" required>
	   <p>
    	   <input name="submit" type="submit" value="Login">
	</form>

	<div style = "font-size:16px; color:#cc0000; margin-top:10px">
	   <?php echo $error; 
	   ?>
	</div>
    </CENTER>
  </div>
</body>

</html>