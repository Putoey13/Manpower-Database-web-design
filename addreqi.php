<?php include("connection1.php");?>
<?php

	$sql = "INSERT INTO Requirement (Department_id,Type_of_emp,Position,Gender,Education,Total) 
	VALUES ('".$_REQUEST['Department']."','".$_REQUEST['EmployeeType']."','".$_REQUEST['PositionRequirement']."','".$_REQUEST['Gender']."','".$_REQUEST['Education']."','".$_REQUEST['Total']."')";
	
	if (mysqli_query($cid, $sql)) {
                    echo "<script>";
                        echo "alert(\"We accept your requirement\");"; 
                        echo "window.location = 'http://pilot.cp.su.ac.th/usr/u07610569/work/REQUEST_FROM.html';";
                    echo "</script>";                  
    } 
    mysqli_close($cid);	

?>