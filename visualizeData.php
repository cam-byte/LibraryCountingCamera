<?php
error_reporting(0);
include('session.php'); 
if(!isset($_SESSION['login_user']))
{ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>
<!DOCTYPE html>
<html>
   <head>
    <link href="animation.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var timesClicked = 0;
        $(document).ready(function(){
            $("button").click(function(){
                timesClicked++;
                if(timesClicked == 1){
                    $(".arrow-1").show();
                    $(".arrow-1-text").show();
                    console.log(timesClicked);
                }else if(timesClicked == 2){
                    $(".arrow-1-text").hide();
                    $(".arrow-2-text").show();
                    $("#excelimg").show();
                    $(".arrow-2").show();
                }else{
                    $(".arrow-2-text").hide();
                    $("#excelimg").hide();
                    $(".arrow-3-text").show();
                    $("#htmlimg").show();
                    $(".arrow-3").show();
                }
            });
        });
        </script>
   </head>
    <body>
    <img src="images/visualize.png" id= image1 alt="Traffic project overview">
            <div class="arrow-1" style="display:none"></div>
            <div class="arrow-1-text" style="display:none">
                <span class="caption animatable"> The Traffic Camera will count the amount of people who cross its detection line. <br>
                     Inward counts as an enter. Outward counts as an exit. </span>
            </div>
            <div class="arrow-2-text" style="display:none">
                <span class="caption animatable"> Then the camera will store the counting data in an excel file which <br>
                     the user will then manually upload to our sites database. </span>
            </div>
            <div class="arrow-3-text" style="display:none">
                <span class="caption animatable"> This data will then be propogated to our website <br>
                     which will display the data in our graphing dashboard. </span>
            </div>
            <img src="images/xlsx.png" id= excelimg alt="excel file image" style = "display:none; width: 5%; height: 5%; position:absolute; left:550px; top:300px;">
            <img src="images/html.png" id= htmlimg alt="html file image" style = "display:none; width: 3%; height: 5%; position:absolute; left:680px; top:100px;">
            <div class="arrow-2" style="display:none"></div>
            <div class="arrow-3" style="display:none"></div>
        <button>Next</button>
    </body>
</html>
