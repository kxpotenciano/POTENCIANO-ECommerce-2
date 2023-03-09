<?php
require_once("Model/User.php");
session_start();
if(!isset($_SESSION['user'])){
	header("location:login.php");
}
$Connection = new Connection();
$con = $Connection->buildConnection();
$mop = $_SESSION['mop'];
$item = $_SESSION['item'];
$email = $_SESSION['email'];
$product = $con->query("SELECT * FROM products WHERE product_name = '$item'");
$fetch =  $product->fetch_assoc();
if($mop=="Gcash" || $mop=="Paymaya"){
	$mobilenumber = $_POST['mnumber'];
}else if($mop=="Paypal"){
	$emailaddress = $_POST['emailadd'];
}else if($mop=="Card"){
	$ccnumber = $_POST['ccnumber'];
	$ccv = $_POST['ccv'];
}
?>
<html>
<?php 
include("Controller/header.php");
?>
<body>
<?php
include("Controller/nav.php");
?>
<div class="shopcon">
	<p>Mode of Payment: <?=$mop?></p>
	<p>Item: <?=$item?></p>
	<p>Price: <?=$fetch['product_price']?></p>
	<p>Email: <?=$email?></p>
	<img src="img/temporary.jpg" style="height: 500px; width: 650px;">
</div>
</body>
</html>