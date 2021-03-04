<?php
$hostname_db = "localhost";
$userid_db = "u07610569";
$userpwd_db = "q03092531";
$db_name = "std_db07610569";
$cid = mysqli_connect($hostname_db, $userid_db, $userpwd_db, $db_name);
if (!$cid) {
    die("Connection failed: " . mysqli_connect_error());
} 
else {//echo "connected";
     }
?>