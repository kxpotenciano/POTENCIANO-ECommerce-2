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

<img src="img/mldiamonds.png" style="float: left; padding: 50px; object-fit: fill;">
<div class="container-fluid">
	<form action="buy.php" method="POST">
	<div class="row" style="background-color: #FFFFFF; padding: 20px; border-radius: 30px; margin: 30px;">
		<div class="container">
			<div class="row">
				<h3>1.Enter User ID and Zone ID</h3>
			</div>
			<div class="row">
				<input type="text" name="uid" id="uid"placeholder="Enter User ID:"class="form-control">
			</div>
		</div>
	</div>
	<div class="row" style="background-color: #FFFFFF; padding: 20px; border-radius: 30px; margin: 30px;">
		<div class="container">
			<div class="row">
				<h3>2.Select Credit Amount</h3>
			</div>
			<div class="row" style="padding: 10px;">
				<div class="col-4"> 
					<input type="button" class="btn btn-outline-primary shopbtn" name="10 Diamonds + 1" value="10 Diamonds + 1" onclick="getName(this.name)" id="10ml"></input>
				</div>
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="20 Diamonds + 20" value="20 Diamonds + 2" onclick="getName(this.name)" id="20ml"></input>
				</div>
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="51 Diamonds + 5" value="51 Diamonds + 5" onclick="getName(this.name)" id="50ml"></input> 
				</div>
			</div>
			<div class="row" style="padding: 10px;">
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="102 Diamonds + 10" value="102 Diamonds + 10" onclick="getName(this.name)" id="100ml"></innput>
				</div>
				<div class="col-4"> 
					<input type="button" class="btn btn-outline-primary shopbtn" name="203 Diamonds + 20" value="203 Diamonds + 20" onclick="getName(this.name)" id="200ml"></input>
				</div>
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="303 Diamonds +33" value="303 Diamonds + 33" onclick="getName(this.name)" id="300ml"></input> 
				</div>
			</div>
			<div class="row" style="padding: 10px;">
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="504 Diamonds + 66" value="504 Diamonds + 66" onclick="getName(this.name)" id="500ml"></input>
				</div>
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="1007 Diamonds + 156" value="1007 Diamonds +156" onclick="getName(this.name)" id="1000ml"></input>
				</div>
				<div class="col-4"> 
					<input type="button" class="btn btn-outline-primary shopbtn" name="2015 Diamonds + 383" value="2015 Diamonds + 383" onclick="getName(this.name)" id="2000ml"></input>
				</div>
			</div>
			<div class="row" style="padding: 10px;">
				<div class="col-4"> 
					<input type="button" class="btn btn-outline-primary shopbtn" name="5035 Diamonds + 1007" value="5035 Diamonds + 1007" onclick="getName(this.name)" id="5000ml"></input>
				</div>
			</div>
		</div>

	</div>
<div class="container-fluid">
	<div class="row">
			<div class="col-5" style="background-color: #FFFFFF; padding: 20px; border-radius: 30px; margin: 30px; width: auto;">
				<h3 style="">3. Select Payment Method</h3>
					<div class="container">
						<div class="row">
							<div class="col-2">


								<input type="button" class="btn btn-outline-primary shopbtn" onclick="getMop(this.name)" name="Gcash" style="background-image: url(img/gcash.png);float: left;border-radius: 10%; width: 20px; height: 20px; object-fit: scale-down; padding: 30px; background-size: cover; background-position: center;"> 
							</div>
							<div class="col-2" style="padding-left: 30px; padding-top: 10px;"><h4>Gcash</h4></div>
						</div> <br>

						<div class="row">
							<div class="col-2">
								<input type="button" class="btn" onclick="getMop(this.name)" name="Paymaya" style="background-image: url(img/paymaya.jpg); border-radius: 10%; width: 20px; height: 20px;; object-fit: scale-down; padding: 30px; background-size: cover; background-position: center;"> 
							</div>
							<div class="col-2" style="padding-left: 30px; padding-top: 10px;"><h4>Paymaya</h4></div>
						</div><br>
						<div class="row">
							<div class="col-2">
								<input type="button" class="btn" onclick="getMop(this.name)" name="Paypal" style="background-image: url(img/paypal.jpg);float: left;border-radius: 10%; width: 20px; height: 20px;; object-fit: scale-down; padding: 30px; background-size: cover; background-position: center;" >
							</div>
							<div class="col-2" style="padding-left: 30px; padding-top: 10px;"><h4>Paypal</h4></div>
						</div><br>
						<div class="row">
							<div class="col-2">
								<input type="button" class="btn" onclick="getMop(this.name)" name="Card" style="background-image:url(img/visaMastercard.png); border-radius: 10%; width: 20px; height: 20px;; object-fit: scale-down; padding: 30px; background-size: cover; background-position: center;">
							</div> 
							<div class="col-2" style="padding-left: 30px;"><h4>Visa Mastercard</h4></div>
						</div>
					</div>
				</div>
							<div class="col-5" style="background-color: #FFFFFF; border-radius: 30px; margin: 30px; height: 415px; width:auto; text-align: center; ">
								<input type="text" class="form-control" name="email" placeholder="[OPTIONAL] Enter email for receipt" style="margin-top: 5%"><br>
								<input type="hidden" name="item" id="item" value="">
								<input type="hidden" name="mop" id="mop" value="">
								<button type="button" class="btn" onclick="paywith()" data-toggle="modal" data-target="#checkout">
									<img src="img/checkout.png" style="width: 200px; height: 200px; object-fit: scale-down; margin-top: 75px;">
								</button> 	
							</div>
						</div>
		</div>
<!-- Modal -->
<div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header modalhead">
        <p class="modal-title" id="exampleModalLongTitle">Order Details</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>
      <div class="modal-body modalbody">
      	<p>Please confirm your information is correct.</p>
      	<div class="row">
      		<div class="col-6">User ID and Zone ID: <span id="uidconfirm"></span></div>
      		<div class="col-6"></div>
      	</div><br>
      	<div class="row">
      		<div class="col-6">Price: <span id="priceconfirm">N/A</span></div>
      		<div class="col-6"></div>
      	</div><br>
      	<div class="row">
      		<div class="col-6">Pay with: <span id="paywith"></span></div>
      		<div class="col-6"></div>
      	</div><br>
        <button type="submit" class="btn modalbtn">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
</div>
<?php
include("Controller/shopscript.php");
?>
<script type="text/javascript">
	function paywith(){
		var newmop = document.getElementById("mop").value;
		document.getElementById("paywith").innerHTML=newmop;
		var uid = document.getElementById("uid").value;
		document.getElementById("uidconfirm").innerHTML=uid;
		var price1=9.00,price2=18.00,price3=45.00,price4=90.00,price5=180.00,price6=270.00,price7=450.00,price8=900.00,price9=1800.00,price10=4500.00;
		var product = document.getElementById("item").value;
		if(product=="10 Diamonds + 1"){
			document.getElementById("priceconfirm").innerHTML=price1;
		}if (product=="20 Diamonds + 2"){
			document.getElementById("priceconfirm").innerHTML=price2;
		}if (product=="51 Diamonds + 5"){
			document.getElementById("priceconfirm").innerHTML=price3;
		}if (product=="102 Diamonds + 10"){
			document.getElementById("priceconfirm").innerHTML=price4;
		}if (product=="203 Diamonds + 20"){
			document.getElementById("priceconfirm").innerHTML=price5;
		}if (product=="303 Diamonds + 33"){
			document.getElementById("priceconfirm").innerHTML=price6;
		}if (product=="504 Diamonds + 66"){
			document.getElementById("priceconfirm").innerHTML=price7;
		}if (product=="1007 Diamonds + 156"){
			document.getElementById("priceconfirm").innerHTML=price8;
		}if (product=="2015 Diamonds + 383"){
			document.getElementById("priceconfirm").innerHTML=price9;
		}if (product=="5035 Diamonds + 1007"){
			document.getElementById("priceconfirm").innerHTML=price10;
		}    
	}
</script>
</body>
</html>