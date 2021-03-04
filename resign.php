<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {
font-family: "Raleway", sans-serif}

.w3-third img{
margin-bottom: -6px; 
opacity: 0.8; 
cursor: pointer;}

.w3-third img:hover{
opacity: 1}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><b>MAN<br>POWER</b></h3>
  <a href="HOME2.html" onclick="w3_close()" class="w3-bar-item w3-button">INSERT EMPLOYEES</a><br>
  <a href="employees.php" onclick="w3_close()" class="w3-bar-item w3-button">EMPLOYEE INFORMATION</a><br>
  <a href="requirement.php" onclick="w3_close()" class="w3-bar-item w3-button">REQUIREMENT</a><br>
  <a href="resign.php" onclick="w3_close()" class="w3-bar-item w3-button">RESIGN EMPLOYEES</a> <br>
  <a href="column.php" onclick="w3_close()" class="w3-bar-item w3-button">EMPLOYEES COLUMN</a><br>
  <a href="newemp.php" onclick="w3_close()" class="w3-bar-item w3-button">NEW EMPLOYEES RATE</a><br>
  <br><br><br>
  <a href="LOG_IN.html" onclick="w3_close()" class="w3-bar-item w3-button">LOG-OUT</a>
  
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">MAN POWER</span>

</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:200px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- REQUEST FROM section -->
  <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
     
	  <h4 class="w3-center"><b>RESIGN EMPLOYEES</b></h4>
	
	  <br>
	   <br>
     <div id="piechart_3d" style="width: 600px; height: 500px; "></div>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		['Department','Resign employees'],
<?php
include("connection1.php");

	$sql = "select Department_name,count(emp_id) as total from Department 
	inner join resign on resign.Department_id = Department.Department_id
	group by Department_name";

$result = mysqli_query($cid, $sql);
	
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
	echo "['".$row['Department_name']."', ".$row['total']."], " ;
	}
}
?>
        ]);

        var options = {
          title: 'Resign Employees',
           width: 750,
           height: 750,
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  
		
      </form>
    </div>
  </div>

  
  
 
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>


</body>
</html>