<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}

if (isset($_POST['submit']))
{ 
    $choiceOption = $_POST['choice'];
    $cameraOption = $_POST['camera'];
    if ($choiceOption == 1 && $cameraOption == 1)
    {
	header("location: graphDailyReport.php"); 
    }
    elseif ($choiceOption == 2 && $cameraOption == 1) 
    {
	header("location: graphWeeklyReport.php"); 
    }
    elseif($choiceOption == 3 && $cameraOption == 1)
    {
	header("location: graphMonthlyReport.php");
    }
    elseif($choiceOption == 4 && $cameraOption == 1)
    {
        header("location: graphAnnualReport.php");
    }
    elseif($choiceOption == 1 && $cameraOption == 2)
    {
        header("location: graphDailyReportExit.php"); 
    }
    elseif($choiceOption == 1 && $cameraOption == 3)
    {
        header("location: graphDailyReportDual.php");
    }
    elseif($choiceOption == 2 && $cameraOption == 2)
    {
        header("location: graphWeeklyReportExit.php");
    }
    elseif($choiceOption == 2 && $cameraOption == 3)
    {
        header("location: graphWeeklyReportDual.php");
    }
    elseif($choiceOption == 3 && $cameraOption == 2)
    {
        header("location: graphMonthlyReportExit.php");
    }
    elseif($choiceOption == 3 && $cameraOption == 3)
    {
        header("location: graphMonthlyReportDual.php");
    }
    elseif($choiceOption == 4 && $cameraOption == 2)
    {
        header("location: graphAnnualReportExit.php");
    }
    elseif($choiceOption == 4 && $cameraOption == 3)
    {
        header("location: graphAnnualReportDual.php");
    }
}
$conn->close();
?>