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

<img src="img/genshinCrystals.png" style="float: left; padding: 50px; object-fit: fill; ">

<div class="container-fluid">
	<form action="buy.php" method="POST">
	<div class="row" style="background-color: #FFFFFF; padding: 20px; border-radius: 30px; margin: 30px;">
		<div class="container">
			<div class="row">
				<h3>1.Enter In-game details</h3>
			</div>
			<div class="row">
				<input type="text" class="form-control" name="uid" id="uid" placeholder="Enter UID:">
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
	                	<input type="button" class="btn btn-outline-primary shopbtn" onclick="getName(this.name)" name="60 Genesis Crystals" id="60genshin" value="60 Genesis Crystals">
	                </div>
	               	<div class="col-4">
	               		<input type="button" class="btn btn-outline-primary shopbtn" onclick="getName(this.name)" name="300 + 30 Genesis Crystals" id="330genshin" value="300 + 30 Genesis Crystals">
	               	</div>
	                <div class="col-4">
	                	<input type="button" class="btn btn-outline-primary shopbtn" onclick="getName(this.name)" name="980 + 110 Genesis Crystals" id="1190genshin" value="980 + 110 Genesis Crystals">
	                </div>
           		</div>
	            <div class="row" style="padding: 10px;">

                    <div class="col-4">
                    	<input type="button" class="btn btn-outline-primary shopbtn" onclick="getName(this.name)" name="1980 + 260 Genesis Crystals" id="2240genshin" value="1980 + 260 Genesis Crystals">
                    </div>

                    <div class="col-4">
                    	<input type="button" class="btn btn-outline-primary shopbtn" onclick="getName(this.name)" name="3280 + 600 Genesis Crystals" id="3880genshin" value="3280 + 600 Genesis Crystals">
                    </div>

                    <div class="col-4">
                    	<input type="button" class="btn btn-outline-primary shopbtn" onclick="getName(this.name)" name="6480 + 1600 Genesis Crystals" id="8080genshin" value="6480 + 1600 Genesis Crystals">
                    </div>

	            </div>
	            <div class="row" style="padding: 10px;">
	                    <div class="col-12"> 
	                    	<input type="button" class="btn btn-outline-primary shopbtn" onclick="getName(this.name)" id="welkingenshin" name="Blessing of the Welkin" value="Blessing of the Welkin">
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
      		<div class="col-6">UID: <span id="uidconfirm"></span></div>
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
		var price1=49.00,price2=249.00,price3=749.00,price4=1490.00,price5=2490.00,price6=4990.00,price7=249.00;
		var product = document.getElementById("item").value;
		if(product=="60 Genesis Crystals"){
			document.getElementById("priceconfirm").innerHTML=price1;
		}if (product=="300 + 30 Genesis Crystals"){
			document.getElementById("priceconfirm").innerHTML=price2;
		}if (product=="980 + 110 Genesis Crystals"){
			document.getElementById("priceconfirm").innerHTML=price3;
		}if (product=="1980 + 260 Genesis Crystals"){
			document.getElementById("priceconfirm").innerHTML=price4;
		}if (product=="3280 + 600 Genesis Crystals"){
			document.getElementById("priceconfirm").innerHTML=price5;
		}if (product=="6480 + 1600 Genesis Crystals"){
			document.getElementById("priceconfirm").innerHTML=price6;
		}if (product=="Blessing of the Welkin"){
			document.getElementById("priceconfirm").innerHTML=price7;
		}    
	}
</script>
</body>
</html>