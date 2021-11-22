<?php
include('session.php'); 
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}

if (isset($_POST['submit']))
{ 
    $choiceInput = $_POST['choice'];
    if ($choiceInput == 1)
    {
	header("location: decisionLogs.php"); 
    }
    elseif ($choiceInput == 2) 
    {
	header("location: decisionLogsWeekly.php"); 
    }
    elseif ($choiceInput == 3) 
    {
    header("location: decisionLogsMonthly.php");
	//header("location: selectViewStudents.php"); 
    }
    else
    {
    header("location: decisionLogsAnnual.php");
	//header("location: selectViewAnnual.php"); 
    }
}
$conn->close();
?>