<?php
require_once("Model/User.php");
session_start();
$Connection = new Connection();
$con = $Connection->buildConnection();
$rs = $con->query("SELECT * FROM products");
?>
<html>
<?php 
include("Controller/header.php");
?>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<?php
if(isset($success)){
?>
<div class="jumbotron">
	<ul>
		<?php
		foreach ($success as $key => $value) {
		?>
		<li><?= $value ?></li>
		<?php
		}
		?>
	</ul>
</div>

<?php
}
include("Controller/nav.php");
?>

<div class="container" style="margin-top: 3%">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<a href="genshin.php"><img class="d-block w-100" style="height: 600px;" src="img/carousel-genshin.jpg" alt="First slide"></a>	
				  <div class="carousel-caption d-none d-md-block">
				    <p class="modalheadtext" style="font-size: 32px;">GENSHIN IMPACT</p>
				  </div>
			</div>
			<div class="carousel-item">
				<a href="garena.php"><img class="d-block w-100" style="height: 600px;" src="img/carousel-league.png" alt="Second slide"></a>
				 <div class="carousel-caption d-none d-md-block">
				    <p class="modalheadtext" style="font-size: 32px;">LEAGUE OF LEGENDS</p>
				 </div>
			</div>
			<div class="carousel-item">
				<a href="valorant.php"><img class="d-block w-100" style="height: 600px;" src="img/carousel-valorant.png" alt="Third slide"></a>	
				 <div class="carousel-caption d-none d-md-block">
				    <p class="modalheadtext" style="font-size: 32px;">VALORANT</p>
				 </div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<i class="fas fa-arrow-left" style="font-size: 32px; color: black;"></i>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<i class="fas fa-arrow-right" style="font-size: 32px; color: black;"></i>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div style="margin: auto; text-align: center; margin-top: 5%;">
	<div class="row" style="margin:auto;"><div class="col-1"></div>
		<div class="col-2">

			<a href="garena.php"><img src="img/Garena.jpg" style="width: 200px; height: 200px; border-radius: 20%;"></a>
			
		</div>

		<div class="col-2">

			<a href="genshin.php"><img src="img/Genshin.png" style="width: 200px; height: 200px; border-radius: 20%;"></a>

		</div>

		<div class="col-2">

			<a href="mobilelegends.php"><img src="img/ML.jpg" style="width: 200px; height: 200px; border-radius: 20%;"></a>
			
		</div>

		<div class="col-2">

			<a href="valorant.php"><img src="img/Valorant.png" style="width: 200px; height: 200px; border-radius: 20%;"></a>
			
		</div>

		<div class="col-2">

			<a href="wildrift.php"><img src="img/WR.jpg" style="width: 200px; height: 200px; border-radius: 20%;"></a>

		</div>
	</div>	
</div><br><br>
</body>
</html>
<!-- <div class="shopcon pt-5">
	<div class="row">
		<?php
		while($fetch = $rs->fetch_assoc()){
		?>
		<div class="col-4">
			<div class="productcontainer text-center mx-auto">
				<div>
					<img src="img/<?= $fetch['product_id'] . "." . $fetch['product_image'] ?>" class="productimg">
					<div class="middle">
						<div class="productinfo"><?= $fetch['product_name'] ?><br>₱<?= number_format($fetch['product_price'], 2) ?><br>
							<a href="checkout.php?product=<?= $fetch['product_id'] ?>"><button class="btn btncolor">Purchase</button></a>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div> -->