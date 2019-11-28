<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cpms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$per_day = mysqli_real_escape_string($link, $_REQUEST['per_day']);

// Attempt update query execution
$sql = "UPDATE car_price SET per_day='$per_day' WHERE 	price_code='1'";


if(mysqli_query($link, $sql)){
    include("home_1.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>