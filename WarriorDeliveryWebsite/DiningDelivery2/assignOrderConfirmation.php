<?php
session_start();


?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif">
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePageDeliverer.php" style="background:none;border:none;display:inline;margin:0px;">
	<img src="shield_only_color.png" alt="Logo" style="max-width:10%;"></a>
	<h1 class="title">View Available Orders</h1><br>
	
	<nav>
		<a href='ProfilePageDeliverer.php'>Home</a>
		<a style="float:right" href="LogOut.php">Sign Out</a>
		<a style="float:right" href="YourInfoD.php">Your info</a>
		<a style="float:right" href="ChangePasswordDeliverer.html">Change Password</a>
	</nav>

<?php


echo "<h3>Thank you for receiving an order. Please check the details of the order and deliver the order to complete the task.</h3>";


?>
<br>

</html>
