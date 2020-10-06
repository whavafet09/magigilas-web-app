<?php
include "connection/connection.php";

$formula = "";

if (isset($_GET['formula'])) {
	$formula = $_GET['formula'];
}

if($formula == "insert_dealerinfo"){

    $dealer_name = $_POST['dealer_name'];
    $dealer_area = $_POST['dealer_area'];

    function random_md5_string($length) {
        return substr(md5(time()), 0, $length);
    }
    
    
    $dealer_id =  random_md5_string(10);

    if (!empty($_FILES['profile_pic']['name'])) {


        //profile pic
		$tmp = $_FILES['profile_pic']['tmp_name'];
		$img_content = file_get_contents($tmp);

		$img_name = $_FILES['profile_pic']['name'];
		$split = explode(".", $img_name);
		$extension = '.'.strtolower(end($split));

		$file_name = $img_name;
		$path =  '../uploads/profile_pic/';

        file_put_contents($path.$file_name, $img_content);
        
        //profile_level
        $tmp2 = $_FILES['profile_level']['tmp_name'];
		$img_content2 = file_get_contents($tmp2);

		$img_name2 = $_FILES['profile_level']['name'];
		$split2 = explode(".", $img_name2);
		$extension2 = '.'.strtolower(end($split2));

		$file_name2 = $img_name2;
		$path2 =  '../uploads/profile_level/';

		file_put_contents($path2.$file_name2, $img_content2);

		//booster_ticket
        $tmp3 = $_FILES['booster_ticket']['tmp_name'];
		$img_content3 = file_get_contents($tmp3);

		$img_name3 = $_FILES['booster_ticket']['name'];
		$split3 = explode(".", $img_name3);
		$extension3 = '.'.strtolower(end($split3));

		$file_name3 = $img_name3;
		$path3 =  '../uploads/booster_ticket/';

		file_put_contents($path3.$file_name3, $img_content3);


	

			$sql2 = $conn->insert('dealer_info',array(
                'dealer_id' => $dealer_id,
				'dealer_name' => $dealer_name,
				'dealer_area' => $dealer_area,
                'profile_pic' =>	'../assets/uploads/profile_pic/'.$file_name,
				'profile_level' =>	'../assets/uploads/profile_level/'.$file_name2,
				'booster_ticket' =>	'../assets/uploads/booster_ticket/'.$file_name3



			));

			if ($sql2) {

				echo "insert";

			}

		


	}
	else if (empty($_FILES['profile_pic']['name'])) {



        
   


			$sql2 = $conn->insert('dealer_info',array(
                'dealer_id' => $dealer_id,
				'dealer_name' => $dealer_name,
				'dealer_area' => $dealer_area

			));

			if ($sql2) {

				echo "insert";

			}

		


	}   





}
else if($formula == "update_dealerinfo"){

    $dealer_name = $_POST['dealer_name'];
	$dealer_area = $_POST['dealer_area'];
	$dealer_id = $_POST['dealer_id'];

    

    if (!empty($_FILES['profile_pic']['name'])) {


        //profile pic
		$tmp = $_FILES['profile_pic']['tmp_name'];
		$img_content = file_get_contents($tmp);

		$img_name = $_FILES['profile_pic']['name'];
		$split = explode(".", $img_name);
		$extension = '.'.strtolower(end($split));

		$file_name = $img_name;
		$path =  '../uploads/profile_pic/';

        file_put_contents($path.$file_name, $img_content);
        
        //power level
        $tmp2 = $_FILES['profile_level']['tmp_name'];
		$img_content2 = file_get_contents($tmp2);

		$img_name2 = $_FILES['profile_level']['name'];
		$split2 = explode(".", $img_name2);
		$extension2 = '.'.strtolower(end($split2));

		$file_name2 = $img_name2;
		$path2 =  '../uploads/profile_level/';

		file_put_contents($path2.$file_name2, $img_content2);

		//booster_ticket
        $tmp3 = $_FILES['booster_ticket']['tmp_name'];
		$img_content3 = file_get_contents($tmp3);

		$img_name3 = $_FILES['booster_ticket']['name'];
		$split3 = explode(".", $img_name3);
		$extension3 = '.'.strtolower(end($split3));

		$file_name3 = $img_name3;
		$path3 =  '../uploads/booster_ticket/';

		file_put_contents($path3.$file_name3, $img_content3);


			$sql2 = $conn->update('dealer_info',array(
				'dealer_name' => $dealer_name,
				'dealer_area' => $dealer_area,
                'profile_pic' =>	'../assets/uploads/profile_pic/'.$file_name,
				'profile_level' =>	'../assets/uploads/profile_level/'.$file_name2,
				'booster_ticket' =>	'../assets/uploads/booster_ticket/'.$file_name3



			),"dealer_id=%s",$dealer_id);

			if ($sql2) {

				echo "update";

			}

		


	}   





}


?>