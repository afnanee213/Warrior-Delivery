<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePageKitchen.php'>Home</a>
</body>

</html>





<?php


session_start();
	$db = new mysqli('localhost','root','','diningdelivery');
	
	$itemID = $_POST['deleteOrder'];
	

	$sql = "DELETE FROM menu WHERE item_id = '$itemID'";
$result = mysqli_query($db,$sql);

  if ($result){
	  
	  echo "<h3> Item Deleted! </h3>";
	  
	  
  }
	
	
?>


