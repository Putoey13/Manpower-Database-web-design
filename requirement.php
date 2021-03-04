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
  <a href="resign.php" onclick="w3_close()" class="w3-bar-item w3-button">RESIGN EMPLOYEE</a> <br>
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
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- REQUEST FROM section -->
  <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>REQUIREMENT</b></h4>
      <br>
		<form action = "requirement.php" method = "GET" target="_self">
        <div class="w3-section">
            <label>Requested by Department</label>
				<SELECT NAME="Department">
					<OPTION VALUE='ALL'>ALL</option>
					<OPTION VALUE=100>100</option>
					<OPTION VALUE=101>101</option>
					<OPTION VALUE=102>102</option>
					<OPTION VALUE=103>103</option>
					<OPTION VALUE=104>104</option>
					<OPTION VALUE=105>105</option>
				</SELECT>
		
        </div>
		
        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Search</button>
	<br>
        </form>	
<html>
<style>

table,th,td{
  margin-left: auto;
  margin-right: auto;
  border:1px solid green;
}

th,td{
  font-size:15px;
 
  background-color:white;
}

</style>
<?php include("connection1.php");?>
<?php
error_reporting(E_ERROR | E_PARSE);
$sql = "SELECT * FROM Requirement where Department_id like '%".$_GET["Department"]."%'"; 
$ch = $_GET["Department"];
if ( $ch == 'ALL'){
	$sql = "SELECT * FROM Requirement"; 
}
$result = mysqli_query($cid,$sql);	
if ($result->num_rows > 0) {
			// output data of each row
			echo '<table><tr><td>Requirement_No</td><td>Department_id</td><td>Type_of_emp</td><td>Position</td><td>Gender</td><td>Education</td><td>Total</td><tr>';
			while($row = $result->fetch_assoc()) {
				echo '<tr><td>' . $row["Requirement_No"] .' </td> ' .
					'<td> ' . $row["Department_id"]. '</td>  ' .
					'<td> '. $row["Type_of_emp"]. ' </td> ' .
					'<td>' . $row["Position"] .' </td> ' .
					'<td> ' . $row["Gender"]. '</td>  ' .
					'<td> '. $row["Education"]. ' </td> ' .
					'<td> '. $row["Total"]. '</td><tr> ';
			}
			echo '</table>';
		} 	else {
			echo "0 results";
			}
?>	
</html>		
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