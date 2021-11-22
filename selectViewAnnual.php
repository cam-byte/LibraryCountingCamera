<?php  
 $servername = "localhost";
 $username = "p_f21_16";
 $password = "e3m6rq";
 $dbname = "p_f21_16_db";
 $conn = new mysqli($servername, $username, $password, $dbname);  
 $query = "SELECT * FROM AnnualReportData INNER JOIN AnnualReportDataExited ON AnnualReportData.Month=AnnualReportDataExited.Month";
 $result = mysqli_query($conn, $query);  
 ?> 
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
          <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <h3><a class="navbar-brand" href="adminProfile.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
</svg>
          <span style="color: #6699FF">Library</span>Traffic</a></h3>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="adminProfile.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Traffic Log Reports</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="selectViewAll.php">Daily</a>
            <a class="dropdown-item" href="selectViewInstructors.php">Weekly</a>
            <a class="dropdown-item" href="selectViewStudents.php">Monthly</a>
            <a class="dropdown-item" href="selectViewAnnual.php">Annual</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="selectAnnualMax.php">Max Traffic Data<span class="sr-only">(current)</span></a>
          </li>
        </ul>
     </div>
  </div>
</nav>
</head>
  <body>
  	<div class="container" style="width:900px;">  
                <h2 align="center">Annual Report</h2>  
                <h3 align="center">Traffic Data</h3><br />  

               <div style="display:flex; flex-direction:row; justify-content: center; align-items: center;">               
                <div class="col-md-3">  
                    <input list ="from_monthlist" name="from_month" id="from_month" class="form-control" placeholder="From Month" /> 
                     <datalist id="from_monthlist">
                          <option data-value=1 value ="Jan">
                          <option data-value=2 value ="Feb">
                          <option data-value=3 value ="Mar">
                          <option data-value=4 value ="Apr">
                          <option data-value=5 value ="May">     
                          <option data-value=6 value ="Jun">
                          <option data-value=7 value ="Jul">
                          <option data-value=8 value ="Aug">
                          <option data-value=9 value ="Sep">
                          <option data-value=10 value ="Oct">
                          <option data-value=11 value ="Nov">
                          <option data-value=12 value ="Dec">
                     </datalist>  
                </div>  
                <div class="col-md-3">  
                     <input list ="to_monthlist" name="to_month" id="to_month" class="form-control" placeholder="To Month" /> 
                     <datalist id="to_monthlist">
                          <option data-value=1 value ="Jan">
                          <option data-value=2 value ="Feb">
                          <option data-value=3 value ="Mar">
                          <option data-value=4 value ="Apr">
                          <option data-value=5 value ="May">     
                          <option data-value=6 value ="Jun">
                          <option data-value=7 value ="Jul">
                          <option data-value=8 value ="Aug">
                          <option data-value=9 value ="Sep">
                          <option data-value=10 value ="Oct">
                          <option data-value=11 value ="Nov">
                          <option data-value=12 value ="Dec">
                     </datalist>  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filtermonth" id="filtermonth" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>    
		</div>             
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Month</th>  
                               <th width="5%">People Entered</th>
                               <th width="30%">People Exited</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["Month"]; ?></td>  
                               <td><?php echo $row["PeopleEntered"]; ?></td>
                               <td><?php echo $row["PeopleExited"]; ?></td>
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
</html>
<script>  
      $(document).ready(function(){  
           $('#filtermonth').click(function(){  
                var shownValfrom = document.getElementById("from_month").value;
                var from_month = document.querySelector("#from_monthlist option[value='"+shownValfrom+"']").dataset.value; 
                var shownValto = document.getElementById("to_month").value;
                var to_month = document.querySelector("#to_monthlist option[value='"+shownValto+"']").dataset.value; 
                if(from_month != '' && to_month != '')  
                {  
                     $.ajax({  
                          url:"filtermonth.php",  
                          method:"POST",  
                          data:{from_month:from_month,to_month:to_month},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Month");  
                }  
           });  
      });  
 </script>