<?php
include('session.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
if (isset($_POST['submit']))
{ 
  if (empty($_POST['email']) || empty($_POST['curPassword']) || empty($_POST['newPassword']))
  { 
    $error = "Please fill in all forms";
  } 
  else
  { 
    // Define variables sent from the form
    $email = mysql_real_escape_string($_POST['email']);
    $curPassword = mysql_real_escape_string($_POST['curPassword']);
    $newPassword = mysql_real_escape_string($_POST['newPassword']);
    $servername = "localhost";
    $username = "p_f21_16";
    $password = "e3m6rq";
    $dbname = "p_f21_16_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE FinalUserTable SET password='$newPassword' WHERE email='$email' AND password='$curPassword'";

    if ($conn->query($sql) === TRUE)
    {
        header("location: successChangeMyPassword.php");
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
  }
}
?>