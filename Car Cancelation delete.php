<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cpms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$car_no = mysqli_real_escape_string($link, $_REQUEST['car_no']); 
// Attempt delete query execution
$sql = "DELETE FROM car_slot_booking WHERE car_no='$car_no'";
if(mysqli_query($link, $sql)){
    include("home_1.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
