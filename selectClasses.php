<?php
error_reporting(0);
include('session.php');
include('registerNewCourse.php');
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<html>
   <head>
      <title>Register New Course</title> 
   </head> 

   <body>
      <p>Please enter information to register new course: </p>
      <form action="" method="post">
	 Course Number: <input type="text" name="coursenumber" placeholder="MAT120" required>
         <p>
	 Course Title: <input type="text" name="coursetitle" placeholder="College Mathematics" required>
         <p>
	 Semester: <input type="text" name="semester" placeholder="PO2019" required>
         <p>
	 CRN: <input type="text" name="crn" placeholder="1342" required>
         <p>
	 Section: <input type="text" name="section" placeholder="01" required>
         <p>
         <input type="submit" name="submit" value="Submit">
      </form>
     
      <div style = "font-size:11px; color:#cc0000; margin-top:10px">
	 <?php
            echo $error; 
	 ?>
      </div> 
   </body>
</html>