<?php
$connect = mysqli_connect("localhost", "p_f21_16", "e3m6rq", "p_f21_16_db");
$sql = "SELECT courseNumber, courseTitle, semester, crn, section FROM ClassTable";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export Class Data to Excel</title>  
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
       <th>Course Number</th>  
       <th>Course Title</th>  
       <th>Semester</th>  
       <th>CRN</th>
       <th>Section</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["courseNumber"].'</td>  
         <td>'.$row["courseTitle"].'</td>  
         <td>'.$row["semester"].'</td>  
         <td>'.$row["crn"].'</td>  
         <td>'.$row["section"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="successExportClassData.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>