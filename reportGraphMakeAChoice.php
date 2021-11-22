<?php
error_reporting(0);
include('session.php');
include('redirectGraphData.php');
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>

<HTML>
  <HEAD>
        <TITLE>Select Daily-Annual Report Graph</TITLE>
	<link rel="stylesheet" href="style.css">
  </HEAD>

  <BODY>
	  <div id="dropdownGraphs">
	<h1>Please select Daily-Annual Report you'd like to Graph</h1>
        <form action="" method="post">
          <div class="select-container">
            <div class="choice-container">
            <div class="camera-select">
	  <h3>Choose Entered or Exited</h3>
	  <select name="camera" class="graph-choice">
    		<option value="1">Entered</option>
    		<option value="2">Exited</option>
			<option value="3">Entered/Exited</option>
	  </select>
            </div>
            <div class="choice-select">
	  <h3>Choose the Periodicity</h3>	
  	  <select name="choice" class="graph-choice">
    		<option value="1">Daily</option>
    		<option value="2">Weekly</option>
    		<option value="3">Monthly</option>
    		<option value="4">Annual</option>
  	  </select>
            </div>
            </div>
  	  <input name="submit" type="submit" value="Submit" class="submit">	
          </div>
	</form>  
</div>
  </BODY>
</HTML>
