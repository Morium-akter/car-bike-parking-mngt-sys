<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cpms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$car_no = mysqli_real_escape_string($link, $_REQUEST['car_no']);
$car_owner_name = mysqli_real_escape_string($link, $_REQUEST['car_owner_name']);
$Arrival_Time = mysqli_real_escape_string($link, $_REQUEST['Arrival_Time']);
$Departure_Time = mysqli_real_escape_string($link, $_REQUEST['Departure_Time']);
$Date = mysqli_real_escape_string($link, $_REQUEST['Date']);
$car_slot_booking = mysqli_real_escape_string($link, $_REQUEST['car_slot_booking']);
$q="SELECT * From car_price";
$data=mysqli_query($link,$q);
$row=mysqli_fetch_array($data);  
$p=$row['per_hour'];
if($Arrival_Time==12){
	$Arrival_Time=0;
}
if($Arrival_Time>$Departure_Time){
	$m = 12-$Arrival_Time;
	$n = $Departure_Time;
	$total_charge = $m+$n;
	$total_charge = $total_charge*$p;
}else{
	$total_charge = $Departure_Time - $Arrival_Time;
	$total_charge = $total_charge*$p;
}

 
// attempt insert query execution
$sql = "INSERT INTO car_slot_booking (car_no, car_owner_name, Arrival_Time, Departure_Time, Date, Charge, car_slot_booking) VALUES ('$car_no', '$car_owner_name', '$Arrival_Time', '$Departure_Time', '$Date', '$total_charge','$car_slot_booking')";
if(mysqli_query($link, $sql)){
	include("After click the submit.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>