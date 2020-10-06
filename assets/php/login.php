<?php
include "connection/connection.php";

session_start();

$formula = "";

if (isset($_POST['formula'])) {
	$formula = $_POST['formula'];
}

if ($formula == "select_login") {

$dealerId = $_POST['dealerId'];







$sql = $conn->query("SELECT * FROM dealer_info WHERE dealer_id=%s", $dealerId );
foreach ($sql as $row) {
  $_SESSION['dealerId'] = $row['dealer_id'];

 
}



if ($sql) {
	echo "success";
}
else if($dealerId == ""){
	echo "null";
}
else{
	echo "invalid";
}







}


?>