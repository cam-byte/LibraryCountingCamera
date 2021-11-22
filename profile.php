<?php
error_reporting(0);
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Library Traffic Portal</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>

<body>
   <div id="profile">
      <h1 id="welcome">Welcome back, <i><?php echo $login_session; ?></i></h1>
      <br>
      <button id="showLogs"><a href="decisionLogs.php">View Traffic Data</a></button>
      <button id="changePassword"><a href="changeMyPasswordNotAdmin.php">Change Password</a></button>
      <button id="logout"><a href="logout.php">Log Out</a></button>
      <button id="viewGraph"><a href="graphDailyReport.php">View Graphs</a></button>
      <button id="visualizeData"><a href="visualizeData.php">Visualize Traffic</a></button>
   </div>
</body>

</html>