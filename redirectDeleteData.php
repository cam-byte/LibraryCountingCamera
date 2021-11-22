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
    header("location: deleteLogData.php"); 
  }
  elseif($choiceInput == 1 && $cameraOption == 2)
  {
    header("location: deleteDailyExitData.php");
  } 
  elseif($choiceInput == 2 && $cameraOption == 1)
  {
    header("location: deleteClassData.php"); 
  }elseif($choiceInput == 2 && $cameraOption == 2)
  {
    header("location: deleteWeeklyExitData.php");
  }elseif($choiceInput == 3 && $cameraOption == 1){
    header("location: deleteUserData.php");
  }elseif($choiceInput == 3 && $cameraOption == 2){
    header("location: deleteMonthlyExitData.php");
  }elseif($choiceInput == 4 && $cameraOption == 1){
    header("location: deleteAnnualData.php");
  }else{
    header("location: deleteAnnualExitData.php");
  }
}
$conn->close();
?> 