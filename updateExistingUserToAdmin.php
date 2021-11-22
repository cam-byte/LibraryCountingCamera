<?php
include('session.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}

if (isset($_POST['submit']))
{ 
        $lastName = $_POST['choice'];
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

    	$sql = "UPDATE FinalUserTable SET role='2' WHERE lastname='$lastName'";

	if ($conn->query($sql) === TRUE)
    	{
        	header("location: successExistingUserToAdmin.php");
    	}
    	else
    	{
        	echo "Error: " . $sql . "<br>" . $conn->error;
    	} 
}
$conn->close();
?>