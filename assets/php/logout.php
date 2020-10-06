<?php

session_start();

 if (isset($_SESSION['dealerId'])) {
	unset($_SESSION['dealerId']);
	session_destroy();

	header("location: ../../index.php");

}

	

?>