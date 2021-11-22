<?php
include('session.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
if (isset($_POST['submit']))
{ 
  if (empty($_POST['coursenumber']) || empty($_POST['coursetitle']) || empty($_POST['semester']) || empty($_POST['crn']) || empty($_POST['section']))
  { 
    $error = "Please fill in all forms";
  } 
  else
  { 
    // Define variables sent from the form
    $CourseNumber = mysql_real_escape_string($_POST['coursenumber']);
    $CourseTitle = mysql_real_escape_string($_POST['coursetitle']);
    $Semester = mysql_real_escape_string($_POST['semester']);
    $CRN = mysql_real_escape_string($_POST['crn']);
    $Section = mysql_real_escape_string($_POST['section']);
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

    $sql = "INSERT INTO ClassTable (courseNumber, courseTitle, semester, crn, section) VALUES ('$CourseNumber', '$CourseTitle', '$Semester', '$CRN', '$Section')";

    if ($conn->query($sql) === TRUE)
    {
        header("location: successfullyRegisteredCourse.php");
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
  }
}
?>