<?php
session_start(); // Starting Session 
$error = ''; // Variable To Store Error Message 
if (isset($_POST['submit'])) { 
  if (empty($_POST['username']) || empty($_POST['password'])) { 
    $error = "Username or Password is invalid"; 
  } 
  else{ 
    // Define $username and $password 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    // mysqli_connect() function opens a new connection to the MySQL server. 
    $conn = mysqli_connect("localhost", "p_f21_16", "e3m6rq", "p_f21_16_db"); 
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "SELECT username, password from FinalUserTable where username=? AND password=? LIMIT 1"; 
    // To protect MySQL injection for Security purpose 
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $username, $password); 
    $stmt->execute(); 
    $stmt->bind_result($username, $password); 
    $stmt->store_result(); 
    if($stmt->fetch()) //fetching the contents of the row { 
      $_SESSION['login_user'] = $username; // Initializing Session
    if($_SESSION['login_user'] == $username)
    {
      $conn = mysqli_connect("localhost","p_f21_16","e3m6rq","p_f21_16_db");
      $query = "SELECT role from FinalUserTable where username = '$username'"; 
      $ses_sql = mysqli_query($conn, $query); 
      $row = mysqli_fetch_assoc($ses_sql); 
      $num = $row['role'];
      if($num == 2)
      {
        header("location: adminProfile.php"); //redirects you to the admin page
      }
      elseif ($num == 1)
      {
	header("location: profile.php"); //redirects you to regular page
      }
      else
      {
	$error = "Students are unauthorized from accessing this program";
	header("location: index.php");
      }
    }
    else
    {
      $error = "Username/Password is invalid";
    } 
  } 
  mysqli_close($conn); // Closing Connection 
} 
?>