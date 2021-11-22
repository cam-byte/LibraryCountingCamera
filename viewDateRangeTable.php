<?php
error_reporting(0);
include('session.php');
//include('redirectDateRangeLogs.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page
}

$servername = "localhost";
$username = "p_f21_16";
$password = "e3m6rq";
$dbname = "p_f21_16_db";

$firstDate = $_SESSION['fromDate'];
$secondDate = $_SESSION['toDate'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT F_Name, L_Name, Time_In, Time_Out FROM Log where Time_Out between '$firstDate' and '$secondDate' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table><tr><th>Name (last, first)</th><th>Time In</th><th>Time Out</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row["F_Name"].", ".$row["L_Name"]."</td><td>".$row["Time_In"]."</td><td>".$row["Time_Out"]."</td></tr>";
    }
    echo "</table>";
}
else
{
    echo "0 results";
}
?>

<HTML>
  <HEAD>
       <TITLE>Viewing Table</TITLE>
	<style>
	table
	{
  	   border: 1px solid black;
	}
	th, td
	{
	   border: 1px solid black;
	   padding-right: 10px;
	   padding-left: 10px;

	}
	</style>
  </HEAD>

  <BODY>
  </BODY>
</HTML>