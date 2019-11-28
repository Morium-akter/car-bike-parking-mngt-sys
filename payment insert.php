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
$Charge = mysqli_real_escape_string($link, $_REQUEST['Charge']);
$Done = mysqli_real_escape_string($link, $_REQUEST['Done']);


 
// attempt insert query execution
$sql = "INSERT INTO payment (car_no, Charge, Done) VALUES ('$car_no', '$Charge', '$Done')";
if(mysqli_query($link, $sql)){
	include("home_1.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>