<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cpms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Bike_no = mysqli_real_escape_string($link, $_REQUEST['Bike_no']);
$Bike_owner_name = mysqli_real_escape_string($link, $_REQUEST['Bike_owner_name']);
$Arrival_Time = mysqli_real_escape_string($link, $_REQUEST['Arrival_Time']);
$Departure_Time = mysqli_real_escape_string($link, $_REQUEST['Departure_Time']);
$Date = mysqli_real_escape_string($link, $_REQUEST['Date']);
$bike_slot_book = mysqli_real_escape_string($link, $_REQUEST['bike_slot_book']);
$q="SELECT * From bike_price";
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
$sql = "INSERT INTO bike_slot_book (Bike_no, Bike_owner_name, Arrival_Time, Departure_Time, Date,Charge) VALUES ('$Bike_no', '$Bike_owner_name', '$Arrival_Time', '$Departure_Time', '$Date', '$total_charge','$bike_slot_book')";
if(mysqli_query($link, $sql)){
	
    include("after_bike.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>