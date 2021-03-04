<?php include("connection1.php");?>
<?php

	$sql = "INSERT INTO Emp_info (Emp_id,Emp_name,Age,Country,Position,ID_card,Department_id) 
	VALUES ('".$_REQUEST['Empid']."','".$_REQUEST['Empname']."','".$_REQUEST['Empage']."','".$_REQUEST['Empcry']."','".$_REQUEST['Empposi']."','".$_REQUEST['Empidc']."','".$_REQUEST['Dempid']."')";
	$result = mysqli_query($cid, $sql);
	if ($result) {
echo "<script>";
              echo "alert(\" Insert successful\");"; 
              echo "window.location = 'http://pilot.cp.su.ac.th/usr/u07610569/work/HOME2.html';";
echo "</script>";
    } 
    mysqli_close($cid);	

?>