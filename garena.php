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

<img src="img/garenaShells.png" style="float: left; padding: 50px; object-fit: fill; width: 420px; height: 746px; width: 420px; height: 746px;">

<div class="container-fluid">

<form action="buy.php" method="POST">
<div class="row" style="background-color: #FFFFFF; padding: 20px; border-radius: 30px; margin: 30px;">
	<div class="container">
		<div class="row">
			<h3>1.Select Credit Amount</h3>
		</div>
			<div class="row" style="padding: 10px;">
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="50 Shells" value="50 Shells" onclick="getName(this.name)" id="50shells">
				</div>
				<div class="col-4"> 
					<input type="button" class="btn btn-outline-primary shopbtn" name="100 Shells" value="100 Shells" onclick="getName(this.name)" id="100shells"></input>
				</div>
				<div class="col-4"> 
					<input type="button" class="btn btn-outline-primary shopbtn" name="300 Shells" value="300 Shells" onclick="getName(this.name)" id="300shells"></input>
				</div>
			</div>	
			<div class="row" style="padding: 10px;">
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="500 Shells" value="500 Shells" onclick="getName(this.name)" id="500shells"></button>
				</div>
				<div class="col-4">
					<input type="button" class="btn btn-outline-primary shopbtn" name="1000 Shells" value="1000 Shells" onclick="getName(this.name)" id="1000shells"></button> 
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
		var price1=45.00,price2=90.00,price3=270.00,price4=450.00,price5=900.00;
		var product = document.getElementById("item").value;
		if(product=="50 Shells"){
			document.getElementById("priceconfirm").innerHTML=price1;
		}if (product=="100 Shells"){
			document.getElementById("priceconfirm").innerHTML=price2;
		}if (product=="300 Shells"){
			document.getElementById("priceconfirm").innerHTML=price3;
		}if (product=="500 Shells"){
			document.getElementById("priceconfirm").innerHTML=price4;
		}if (product=="1000 Shells"){
			document.getElementById("priceconfirm").innerHTML=price5;
		}    
	}
</script>
</body>
</html>