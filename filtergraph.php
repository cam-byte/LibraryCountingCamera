<html>
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
      <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet"/>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
         google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Time Entered', 'People Entered', 'People Exited'],
          <?php 
          $query = "SELECT * FROM DailyReportData INNER JOIN DailyReportDataExited ON TimeEntered=TimeExited WHERE TimeEntered BETWEEN '".$_POST["from_time"]."' AND '".$_POST["to_time"]."'";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                    echo "['".$row['TimeEntered']."',".$row['PeopleEntered'].",".$row['PeopleExited']."],";
                    if(((int)$row['PeopleEntered'])>$max){
                      $max = ((int)$row['PeopleEntered']);
                      $maxtime = $row['TimeEntered'];
                    }
                    if(((int)$row['PeopleEntered'])<=$min){
                      $min = ((int)$row['PeopleEntered']);
                      $mintime = $row['TimeEntered'];
                    }
            }
            ?>
        ]);

        var options = {
          width: 800,
          chart: {
            title: 'Daily Traffic Report Enter/Exit',
            subtitle: 'People entered on the left, people exited on the right'
          },
          bars: 'vertical', // Required for Material Bar Charts.
          series: {
            0: { axis: 'entered' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'exited' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              entered: {label: 'people'}, // Bottom x-axis.
              exited: {side: 'top', label: 'Daily Traffic data of enter/exit'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };
    </script>
  </head>
  <body>
    <div id="dual_x_div" style="width: 1000px; height: 700px;"></div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>