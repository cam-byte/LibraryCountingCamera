<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
$conn = mysqli_connect("localhost", "p_f21_16", "e3m6rq", "p_f21_16_db"); 
session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 
// SQL Query To Fetch Complete Information Of User 
$query = "SELECT username from FinalUserTable where username = '$user_check'"; 
$ses_sql = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($ses_sql); 
$login_session = $row['username'];
?>