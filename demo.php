<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   

        <style>
            
table{
width:60%;
}
            th {
           
				background-color: blue;
				align:center;
				
            }
			 td {
            
				background-color: white;
				
				``
            }
            

        </style>

</head>
<head>

    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Parking Project by problem solver</title>
    <meta name="description" content="GRAPE – Multipurpose App Landing HTML Template is a modern, unique and clean design for your Business Purpose. Users will love Your site because it gives them a unique user experience.">

    <!-- External CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/et-line.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/plyr.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="Search_style.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400%7CUbuntu:400,700%7COpen+Sans" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">

    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div class="loader-wrap" id="loader-wrap">
        <div class="cssload-loader"></div>
    </div>
    <!-- Preloader End -->

    <!-- Navigation -->
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="60">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<font color="white"> <h4>Information Search</h4></font>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--<div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right" id="one-page-nav">-->
				<div class="mainmenu">
				<ul>
				    <li><a href="">Contact</a></li>
				    <li><a href="">Update</a></li>
				    <li><a href="">Search</a></li>
				    <li><a href="">Pricing</a></li>
				    <li><a href="">Cancelation</a></li>
				    <li><a href="">Booking</a>
					  <ul>
					      <li><a href="car.php">Car</a></li>
					      <li><a href="bike.php">Bike</a></li>
					  </ul>
					</li>
					<li><a href="home_1.php">Home</a></li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!--</div>
        <!-- /.container-fluid -->
   
    <!-- Navigation End -->
	
	<!--Searching-->
	

<div class="">
<?php
$con=mysqli_connect("localhost","root","","cpms");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$Date = mysqli_real_escape_string($con, $_REQUEST['Date']);
$result = mysqli_query($con,"SELECT * FROM car_slot_booking WHERE Date='$Date'");




echo "<table id='t01' border='5' cellpadding=''align='center'background-color='white'>";
        echo "<tr>  <th><font color='white' align='center'>Car no</font></th><th><font color='white' align='center'>Car Owner Name</font></th><th><font color='white' align='center'>Arrival Time</font></th><th><font color='white' align='center'>Departure Time<font></th><th><font color='white' align='center'>Date </font></th> ";		

echo"<center><b><br><br><font color='white'><h4>Car Information</font></h4></b> </center></br></br>";
while($row = mysqli_fetch_array($result)) 
	{
		
		echo "<tr>"; 
		
                echo '<td style="color:blue" align="center";>' . $row['car_no'] . '</td>';
				echo '<td style="color:blue" align="center";>' . $row['car_owner_name'] . '</td>';
				echo '<td style="color:blue" align="center";>' . $row['Arrival_Time'] . '</td>';
                echo '<td style="color:blue" align="center";>' . $row['Departure_Time'] . '</td>';
                echo '<td style="color:blue" align="center";>' . $row['Date'] . '</td>';
				
	}
  echo "</tr>";


        echo "</table>";


 

 




mysqli_close($con);
?> 
</div>
</nav>
<!--booking slot end-->

    <!-- Banner Area -->
	
    <div id="banner" class="banner">
        <div class="banner-item banner-1 steller-parallax" data-stellar-background-ratio="0.5">
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="banner-text-content">
                                <!--<h1 class="banner-title">Car parking managment system <br/>Global lamia</h1>-->
                                <!--<p class="banner-text">Available in App Store &amp; Google Play</p>-->
                               <!-- <div class="button-group">
                                    <a class="btn btn-lg" href="">Update</a>
                                    <a class="btn btn-lg btn-border video-play" href="">Payment</a>
                                </div>-->
                            </div>
                        </div>
						
						<!--
                        <div class="col-md-5 hidden-sm hidden-xs">
                            <div class="mock right-style">
                                <img class="back-mock wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s" src="images/mocks/banner-mock-back.png" alt="mock back">
                                <img class="front-mock wow fadeInUp" data-wow-duration="1.5s" src="images/mocks/banner-mock-front.png" alt="mock front">
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <div class="main-wrap">

        <!-- Script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.localScroll.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="js/map.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
