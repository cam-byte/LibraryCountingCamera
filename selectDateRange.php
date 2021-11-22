<?php
error_reporting(0);
include('session.php');
include('redirectDateRangeLogs.php');
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
    <TITLE>Select Date Range for Viewing Logs</TITLE>
  </HEAD>

  <BODY>
    <h2>Select the two date ranges you'd like to see log-ins and log-outs from students</h2>
    <form action="" method="post">
      From:
      <input type="date" name="fromDate"><br>
      To:
      <input type="date" name="toDate"><br>
      <br>
      <input name="submit" type="submit" value="Submit">
    </form>
  </BODY>
</HTML>
