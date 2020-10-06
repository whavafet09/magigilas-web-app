<?php
include "connection/connection.php";


$formula = "";

if (isset($_POST['formula'])) {
	$formula = $_POST['formula'];
}

if($formula == "select_dealer_Info"){
   
    $sql = $conn->query("SELECT * FROM dealer_info");
    echo json_encode($sql);

}
else if($formula == "select_update"){

        $dealer_id =  $_POST['dealer_id'];

        $sql = $conn->query("SELECT * FROM dealer_info WHERE dealer_id=%s",$dealer_id);
        echo json_encode($sql);
}
else if ($formula == "delete_dealer"){
        $delete_id = $_POST['delete_id'];

        $sql = $conn->delete('dealer_info', 'dealer_id=%s', $delete_id);

        if ($sql){
            
            echo "success";

        }else{

            echo "something went wrong";
        }

}

?>