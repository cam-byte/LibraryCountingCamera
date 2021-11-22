<?php 
$connect = mysqli_connect("localhost", "p_f21_16", "e3m6rq", "p_f21_16_db");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT DayOfWeek, PeopleEntered FROM WeeklyReportData";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Day of the Week</th>  
                         <th>People Entered</th>  
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
       <td>'.$row["DayOfWeek"].'</td>  
       <td>'.$row["PeopleEntered"].'</td>  
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=exportWeekly.xls');
  echo $output;
 }
}
?>