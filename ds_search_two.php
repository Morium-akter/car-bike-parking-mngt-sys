<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cpms"; 
	
	$connection = mysqli_connect($servername, $username, $password, $dbname);
	
	$searchKeyword = $_POST["searchKeyword"];
	
	$SQL = "SELECT * FROM `car_slot_booking` WHERE `car_slot_no` = $searchKeyword";
	
	$result = mysqli_query($connection, $SQL);
	
	if (!$result || mysqli_num_rows($result) > 0) {
		include 'car_slot_booking.php';
	}else {
		include 'car_not_available.php';
	}
?>
				