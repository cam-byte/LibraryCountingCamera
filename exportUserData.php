<?php
$connect = mysqli_connect("localhost", "p_f21_16", "e3m6rq", "p_f21_16_db");
$sql = "SELECT libraryID, email, firstname, lastname, studentID FROM FinalUserTable";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export User Data to Excel</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export User Data to Excel</h2><br /> 
    <table class="table table-bordered">
     <tr>  
       <th>Library ID</th>  
       <th>Email</th>  
       <th>First Name</th>  
       <th>Last Name</th>
       <th>Student ID</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["libraryID"].'</td>  
         <td>'.$row["email"].'</td>  
         <td>'.$row["firstname"].'</td>  
         <td>'.$row["lastname"].'</td>  
         <td>'.$row["studentID"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="successExportUserData.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>