<?php 
$connect = mysqli_connect("localhost", "p_f21_16", "e3m6rq", "p_f21_16_db");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT courseNumber, courseTitle, semester, crn, section FROM ClassTable";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Course Number</th>  
                         <th>Course Title</th>  
                         <th>Semester</th>  
       		   	 <th>CRN</th>
       		    	 <th>Section</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
       <td>'.$row["courseNumber"].'</td>  
       <td>'.$row["courseTitle"].'</td>  
       <td>'.$row["semester"].'</td>  
       <td>'.$row["crn"].'</td>  
       <td>'.$row["section"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=exportDataClasses.xls');
  echo $output;
 }
}
?>