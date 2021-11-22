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
	header("location: deletionClass.php"); 
    }
    else
    {
	header("location: adminProfile.php");
    }
}
$conn->close();
?>