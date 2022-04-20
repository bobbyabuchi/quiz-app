<?php
# Database Connection -------------------------------------------------
$servername = "localhost";
$username = "wisdom";
$password = "wisdom";
$db = "ezekcuij_mscore";

// Create connection
@$connect_db = new mysqli($servername, $username, $password, $db);

// Check connection
if ($connect_db->connect_error) {
  //die("Connection failed: " . $connect_db->connect_error);
  $sysMsg = "<span style='color:red;'>Not Ready</span>";
}else{
	$sysMsg = "<span style='color:green'>Ready</span>";
}
?>