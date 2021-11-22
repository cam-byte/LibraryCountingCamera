<?php
include('session.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
if (isset($_POST['submit']))
{ 
  if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['studentid']) || empty($_POST['libraryid']) || empty($_POST['email']) || empty($_POST['password']))
  { 
    $error = "Please fill in all forms";
  } 
  else
  { 
    // Define variables sent from the form
    $LibraryID = mysql_real_escape_string($_POST['libraryid']);
    $Role = "1";
    $Role = mysql_real_escape_string($Role);
    $ClassID = "prof";
    $ClassID = mysql_real_escape_string($ClassID);
    $Email = mysql_real_escape_string($_POST['email']);
    $Password = mysql_real_escape_string($_POST['password']);
    $Firstname = mysql_real_escape_string($_POST['firstname']);
    $Lastname = mysql_real_escape_string($_POST['lastname']);
    $StudentID = mysql_real_escape_string($_POST['studentid']);
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

    $sql = "INSERT INTO FinalUserTable (libraryID, role, classID, email, password, firstname, lastname, studentID) VALUES ('$LibraryID', '$Role', '$ClassID', '$Email', '$Password', '$Firstname', '$Lastname', '$StudentID')";

    if ($conn->query($sql) === TRUE)
    {
        header("location: successfullyRegistered.php");
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
  }
}
?>