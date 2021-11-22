<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}

if (isset($_POST['submit']))
{
	$fromDateValue = $_POST['fromDate'];
	$toDateValue = $_POST['toDate'];
	$_SESSION['fromDate'] = $fromDateValue;
	$_SESSION['toDate'] = $toDateValue;
	header("location: viewDateRangeTable.php");
}
$conn->close();
?>