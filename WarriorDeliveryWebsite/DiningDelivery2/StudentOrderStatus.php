<?php

session_start();

   $user_value = $_SESSION['login_user'];
   
?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>

<?php

echo "<h1>Welcome " . $user_value . "!</h1>";
?>
<h2> Current Order Status </h2>

<?php


$db = new mysqli('localhost','root','','diningdelivery');

 $sql = "SELECT order_id, order_item, status, location, style FROM orderlist WHERE user_name = '$user_value' AND (status='3' OR status='1' OR status='0') ";
  $result = mysqli_query($db,$sql);
  
  while($value = mysqli_fetch_array($result)){
  
  //$value = mysqli_fetch_assoc($result);
  
  //$currentBalance = $value['order_id'];
if ($value != NULL and $value['status'] == '0'){
	
	 echo "<h4>Current Order: " . "Order ID: " . $value['order_id'] . "<br>" . 
							 "Order Item(s) " . $value['order_item'] . "<br>"
							. "Status: " . "Waiting to be made by Kitchen!" . "<br>"
							. "Location: " . $value['location'] . "<br>"
							. "Style: " . $value['style'] . "<br></h4>"
							;

} 

if ($value != NULL and $value['status'] == '1'){
	
	 echo "<h4>Current Order: " . "Order ID: " . $value['order_id'] . "<br>" . 
							 "Order Item(s) " . $value['order_item'] . "<br>"
							. "Status: " . "Order being delivered!" . "<br>"
							. "Location: " . $value['location'] . "<br>"
							. "Style: " . $value['style'] . "<br></h4>"
							;

} 

if ($value != NULL and $value['status'] == '3'){
	
	 echo "<h4>Current Order: " . "Order ID: " . $value['order_id'] . "<br>" . 
							 "Order Item(s) " . $value['order_item'] . "<br>"
							. "Status: " . "Order waiting for pickup!" . "<br>"
							. "Location: " . $value['location'] . "<br>"
							. "Style: " . $value['style'] . "<br></h4>"
							;

} 



  }
?>


<br>
<br>
<a href='ProfilePage.php'>Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>



</body>
</html>