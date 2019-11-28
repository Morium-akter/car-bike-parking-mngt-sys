<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cpms"; 
	
	$connection = mysqli_connect($servername, $username, $password, $dbname);
	
	$searchKeyword = $_POST["searchKeyword"];
	
	$SQL = "SELECT * FROM `bike_slot_book` WHERE `bike_slot_no` = $searchKeyword";
	
	$result = mysqli_query($connection, $SQL);
	
	if (!$result || mysqli_num_rows($result) > 0) {
		include 'Bike slot booking.php';
	}else {
		include 'bike_not_available.php';
	}
?>
				