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

$sql = "SELECT firstname, lastname, libraryID AS sav FROM FinalUserTable WHERE role = '1'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "<table><tr><th>Instructor Name</th><th>Course Number</th><th>Course Title</th><th>Section</th><th>Semester</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row["lastname"].", ".$row["firstname"]."</td>";
	$sav = $row[sav];
	$sql2 = "SELECT classID AS cid FROM Assignment WHERE instructorID = '$sav'";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_assoc())
	{
		$count = 0;
		$cid = $row2[cid];
		$sql3 = "SELECT courseNumber, courseTitle, semester, section FROM ClassTable WHERE classID = '$cid'";
		$result3 = $conn->query($sql3);
		while($row3 = $result3->fetch_assoc())
		{
			echo "<td>".$row3["courseNumber"]."</td><td>".$row3["courseTitle"]."</td><td>".$row3["section"]."</td><td>".$row3["semester"]."</td></tr>";
			++$count;
			if ($count > 0)
			{
				echo "<td></td>";
			}
		}
	}
    }
    echo "</table>";
}
else
{
    echo "0 results";
}
$conn->close();


?>

<HTML>
  <HEAD>
       <TITLE>Viewing Table (Instructors)</TITLE>
	<style>
	table
	{
  	   border: 1px solid black;
	}
	th, td
	{
	   padding-right: 10px;
	   padding-left: 10px;
	}
	</style>
  </HEAD>
</HTML>