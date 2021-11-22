<?php
error_reporting(0);
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}

$servername = "localhost";
$username = "p_f21_16";
$password = "e3m6rq";
$dbname = "p_f21_16_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT courseNumber, courseTitle, semester, crn, section FROM ClassTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>CRN</th><th>Course Number</th><th>Section</th><th>Course Title</th><th>Semester</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["crn"]."</td><td>".$row["courseNumber"]."</td><td>".$row["section"]."</td><td>".$row["courseTitle"]."</td><td>".$row["semester"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<HTML>
  <HEAD>
       <TITLE>Viewing Table (Classes)</TITLE>
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
</HTML>