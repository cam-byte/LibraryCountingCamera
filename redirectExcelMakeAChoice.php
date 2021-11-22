<?php
include('session.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
if (isset($_POST['submit']))
{ 
    $choiceInput = $_POST['choice'];
    $cameraOption = $_POST['camera'];
    if ($choiceInput == 1 && $cameraOption == 1)
    {
	header("location: importExcelUsers.php"); 
    }
    elseif($choiceInput == 1 && $cameraOption == 2)
    {
    header("location: importExcelDailyExit.php");
    } 
    elseif($choiceInput == 2 && $cameraOption == 1)
    {
        header("location: importExcelClasses.php");
    }elseif($choiceInput == 2 && $cameraOption == 2)
    {
        header("location: importExcelWeeklyExit.php");
    }elseif($choiceInput == 3 && $cameraOption == 1){
        header("location: importExcelMonthly.php");
    }elseif($choiceInput == 3 && $cameraOption == 2){
        header("location: importExcelMonthlyExit.php");
    }elseif($choiceInput == 4 && $cameraOption == 1){
        header("location: importExcelAnnual.php");
    }else{
        header("location: importExcelAnnualExit.php");
    }
}
$conn->close();
?>