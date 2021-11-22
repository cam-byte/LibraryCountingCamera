<?php 
$connect = mysqli_connect("localhost", "p_f21_16", "e3m6rq", "p_f21_16_db");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT libraryID, email, firstname, lastname, studentID FROM FinalUserTable";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Library ID</th>  
                         <th>Email</th>  
                         <th>First Name</th>  
       		   	 <th>Last Name</th>
       		    	 <th>Student ID</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
       <td>'.$row["libraryID"].'</td>  
       <td>'.$row["email"].'</td>  
       <td>'.$row["firstname"].'</td>  
       <td>'.$row["lastname"].'</td>  
       <td>'.$row["studentID"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=exportDataUsers.xls');
  echo $output;
 }
}
?>