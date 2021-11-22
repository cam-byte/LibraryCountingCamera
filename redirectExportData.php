<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}

if (isset($_POST['submit']))
{ 
    $choiceInput = $_POST['choice'];
    $cameraOption = $_POST['camera'];
    if ($choiceInput == 1 && $cameraOption == 1)
    {
        header("location: exportLogData.php"); 
    }
    elseif($choiceInput == 1 && $cameraOption == 2)
    {
        header("location: exportExcelDailyExit.php");
    } 
    elseif($choiceInput == 2 && $cameraOption == 1)
    {
        header("location: exportExcelWeekly.php");
    }elseif($choiceInput == 2 && $cameraOption == 2)
    {
        header("location: exportExcelWeeklyExit.php");
    }elseif($choiceInput == 3 && $cameraOption == 1){
        header("location: exportExcelMonthly.php");
    }elseif($choiceInput == 3 && $cameraOption == 2){
        header("location: exportExcelMonthlyExit.php");
    }elseif($choiceInput == 4 && $cameraOption == 1){
        header("location: exportExcelAnnual.php");
    }else{
        header("location: exportExcelAnnualExit.php");
    }
}
$conn->close();
?>