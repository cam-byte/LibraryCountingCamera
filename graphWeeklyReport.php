<?php
error_reporting(0);
include('login.php');
include('session.php');
include('redirectGraphData.php');
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
$servername = "localhost";
$username = "p_f21_16";
$password = "e3m6rq";
$dbname = "p_f21_16_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$userselect= $_SESSION['login_user'];
?>

<html>
  <head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Traffic Reports</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="graphDailyReport.php">Daily</a>
            <a class="dropdown-item" href="graphWeeklyReport.php">Weekly</a>
            <a class="dropdown-item" href="graphMonthlyReport.php">Monthly</a>
            <a class="dropdown-item" href="graphAnnualReport.php">Annual</a>
        </li>
        <?php
          $query = "SELECT role from FinalUserTable where username = '$userselect'"; 
          $ses_sql = mysqli_query($conn, $query); 
          $row = mysqli_fetch_assoc($ses_sql); 
          $num = $row['role'];
          $output .= '<li class="nav-item">
          <a class="nav-link" href="importExcelClasses.php">Upload Excel File</a>
          </li>';
          if($num == 2)
          {
            echo $output;
          }else{
            
          }
          ?>

      </ul>

    </div>
  </div>
</nav>

    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day of the Week', 'People Entered'],
          <?php
           $max = 0;
           $min = 12;
           $maxtime = '';
           $mintime = '';
            $sql = "SELECT * FROM WeeklyReportData";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                    echo "['".$row['DayOfWeek']."',".$row['PeopleEntered']."],";
                    if(((int)$row['PeopleEntered'])>$max){
                      $max = ((int)$row['PeopleEntered']);
                      $maxtime = $row['DayOfWeek'];
                    }
                    if(((int)$row['PeopleEntered'])<=$min){
                      $min = ((int)$row['PeopleEntered']);
                      $mintime = $row['DayOfWeek'];
                    }
            }
        ?>
      ]);
        var options = {
          chart: {
            title: 'Weekly Traffic Report Data',
            subtitle: 'Day of Week Entered and People Entered',
            width: '3000',
            height: 300,
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Day of the Week', 'People Entered'],
	<?php 
	    $sql = "SELECT * FROM WeeklyReportData";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                    echo "['".$row['DayOfWeek']."',".$row['PeopleEntered']."],";
		}
	  ?>
        ]);

        var options = {
          title: 'Weekly Libary People Count',
          curveType: 'none',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
  </script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawGaugeChart);

      function drawGaugeChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['People Entered', 0]
        ]);

        var options = {
          width: 300, height: 700,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
          chart.draw(data, options);
        }, 5000); 
     } 
  </script>

  </head>
  <body>
  <div id="barchart_material" style="width: 900px; height: 500px; position:relative; left:800; top:100px;"></div>
  <nav>
		<ul id="mainMenu" style = "position:relative; left:1700px; top:-450px;" >
			<li><a href="graphWeeklyReport.php">Entered</a></li>
			<li><a href="graphWeeklyReportExit.php">Exited</a></li>
			<li><a href="graphWeeklyReportDual.php">Enter/Exited</a></li>
		</ul>
	</nav>
    <div class="small-chart-container" style = "position:relative; left:550px; top:0px;">
    <div id="curve_chart" style="width: 900px; height: 500px"></div>    
       <div id="chart_div" style="width: 400px; height: 120px;  position:relative; left:-1320px; top:-400px;"></div>
    </div>
    <div class="dailyreportanalysis" style = "position:relative; left:250px; top:-600px;">
      <p>The most people entered(<?php echo $max?>) was at <?php echo $maxtime  ?>
      <?php $result = mysqli_query($conn,"SELECT MIN(NULLIF(PeopleEntered,0)) AS min_people FROM WeeklyReportData");
            $row = mysqli_fetch_array($result);
            $minpeople = $row['min_people'];
            $result2 = mysqli_query($conn,"SELECT DayOfWeek FROM WeeklyReportData WHERE PeopleEntered=$minpeople");
            $row2 = mysqli_fetch_array($result2);
            $mintime = $row2['DayOfWeek'];
      ?>
      <p>The least people entered(<?php echo $minpeople?>) was at <?php echo $mintime  ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>