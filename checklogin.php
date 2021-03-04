<?php 
session_start();
        if(isset($_POST['Email'])){
                  include("connection1.php");
                  $Email = $_POST['Email'];
                  $Pass = $_POST['Password'];

                  $check = "SELECT * FROM Log_in
                  WHERE  id = '".$Email."' 
                  AND  password = '".$Pass."' ";
				  
                  $result = mysqli_query($cid,$check);
				   
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["status"] = $row["status"];
					  $_SESSION["Email"] = $row["id"];
					  
                      if($_SESSION["status"]=="admin"){ 
					
                        Header("Location: HOME2.html");
                      }
					  if ($_SESSION["status"]== "department"){ 

                        Header("Location: HOME.html");
                      }
                  }
				  else{
                    echo "<script>";
                        echo "alert(\" Email หรือ  Password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: ../Login/Login.php"); //user & password incorrect back to login again
 
        }
?>