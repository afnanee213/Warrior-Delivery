<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
    
    ?>
    
    <script>
	window.location.replace("index.html");
	</script>
	<?php
	exit();
	
}

?>




<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePageKitchen.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
    <nav>
    <a class="btn" href='ProfilePageKitchen.php'>Home</a>
    </nav>

  

<h2> Orders That Are Ready for Pickup </h2>
<table style="width:40%">
	<thead>	
		<th>Order ID</th>
		<th>Access ID</th>
		<th> Order Item(s)</th>
		<th> Status</th>
		
	</thead>
<?php
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
   $sql = "SELECT order_id, access_id, order_item, status FROM orderlist WHERE status = '0'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
       
       ?>

	<tbody>
		<tr>
	
	<td> <?php echo $row['order_id']; ?> </td>
	<td> <?php echo $row['access_id']; ?> </td>
	<td> <?php echo $row['order_item']; ?> </td>
	<td> <?php echo $row['status']; ?> </td>
	</tr>
	
	
	    
	    <?php
}

?>

</tbody>
</table>

<br>
    <nav>
    
<a class="btn" href = "ProfilePageKitchen.php">Go Back</a><br>
<a class="btn" href = "LogOut.php">Sign Out</a>
    </nav>


</body>
</html>