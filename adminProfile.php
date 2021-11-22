<?php
error_reporting(0);
include('session.php'); 
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>New Paltz Library Traffic</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>

<body>
   <div id="profile">
      <h1 id="welcome">Welcome back, <i><?php echo $login_session; ?></i></h1>
      <button id="showLogs"><a href="selectViewAll.php">View Data</a></button>
      <button id="addAdmin"><a href="addAdminMakeAChoice.php">Add Admin</a></button>
      <button id="changePassword"><a href="changePassword.php">Change Password</a></button>
      <button id="exportData"><a href="exportDataMakeAChoice.php">Export Data</a></button>
      <br>
      <br>
      <button id="viewGraph"><a href="graphDailyReport.php">View Graphs</a></button>
      <button id="importExcel"><a href="importExcelMakeAChoice.php">Import Excel File</a></button>
      <button id="deleteData"><a href="warningDeleteData.php">Delete Data</a></button>
      <button id="visualizeData"><a href="visualizeData.php">Visualize Traffic</a></button>
      <button id="logout"><a href="logout.php">Log Out</a></button>
   </div>
</body>

</html>