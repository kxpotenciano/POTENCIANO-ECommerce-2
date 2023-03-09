<?php
require_once("Model/User.php");
session_start();
if(!isset($_SESSION['user'])){
	header("location:login.php");
}
$Connection = new Connection();
$con = $Connection->buildConnection();
$item	= $_POST['item'];
$mop = $_POST['mop'];
$uid = $_POST['uid'];
$email = $_POST['email'];
$_SESSION['item'] = $_POST['item'];
$_SESSION['mop'] = $_POST['mop'];
$_SESSION['email'] = $_POST['email'];
$price = $con->query("SELECT * FROM products WHERE product_name = '$item'");
$fetch =  $price->fetch_assoc();
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
	<div class="container mt-5" style="margin-top: 35px; border: 1px solid; border-color: #E1E1E1; padding: 30px; width: 500px; background: white;">
			<div class="row">
				<div class="col-6">For: </div>
				<div class="col-6"><?=$uid?></div>
			</div>
			<div class="row">
				<div class="col-6">Mode of Payment: </div>
				<div class="col-6"><?=$mop?></div>
			</div>
			<div class="row">
				<div class="col-6">Item: </div>
				<div class="col-6"><?=$item?></div>
			</div>
			<div class="row">
				<div class="col-6">Price: </div>
				<div class="col-6"><?=$fetch['product_price']?></div>
			</div>
			<div class="row">
				<div class="col-6">Email: </div>
				<div class="col-6"><?=$email?></div>
			</div>
			<div class="row">
				<img src="img/
				<?=$fetch['product_image']?>.png" 
				class="mopimg">
			</div>
			<br>
		<form action="receipt.php" method="POST">
			<?php
			if($mop=="Gcash" || $mop=="Paymaya"){
			?>
			<label for="mnumber">Mobile Number:</label>
			
		    	<input type="text" class="form-control" name="mnumber" id="mnumber" placeholder="Enter Mobile Number " maxlength="11"><br>
		    <?php
		    }
		    else if($mop=="Paypal"){	
		    ?>
		    <label for="mnumber">Email Address:</label>
			
		    	<input type="text" class="form-control" name="emailadd" id="emailadd" placeholder="Enter Email Address "><br>
		    <?php
		    }
		    else if($mop=="Card"){
			?>
			<div class="form-check">
				<label for="ccnumber">Credit card number</label>
		    <input type="number" class="form-control ccinfo" name="ccnumber" id="ccnumber" placeholder="Enter Credit Card Number" onclick="required()">
		    <label for="expirationdate">Expiration Date</label><br>
				<select class="form-control-sm ccinfo">
				  <option value="" disabled selected>DD</option>
				  <?php
				  for($i = 1; $i<13; $i++){
				  ?>
				  <option value="<?= $i ?>"><?= str_pad($i,2,'0',STR_PAD_LEFT) ?></option>
				  <?php
				  }
				  ?>
				</select>
				/
				<select class="form-control-sm ccinfo">
					<option value="" disabled selected>YY</option>
					<?php
					for($i=21; $i<=99; $i++){
					?>
					<option value="<?= $i ?>"><?= $i ?></option>
					<?php	
					}
					?>
				</select><br><br> 
		    <label for="cvv">CVV</label>
		    <input type="text" class="form-control ccinfo" maxlength="3" name="ccv" id="cvv" placeholder="Enter CVV">
			</div>
			<div class="form-group">
				 <label for="address">Address</label>
		    	<input required type="text" class="form-control" name="address" id="address" placeholder="Enter address">	
			</div>
			<?php
			}	
			?>
			<input type="hidden" name="<?=$mop?>">
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div><br>
<script type="text/javascript">
	jQuery.fn.ForceNumericOnly =
	function()
	{
	    return this.each(function()
	    {
	        $(this).keydown(function(e)
	        {
	            var key = e.charCode || e.keyCode || 0;
	            // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
	            // home, end, period, and numpad decimal
	            return (
	                key == 8 || 
	                key == 9 ||
	                key == 13 ||
	                key == 46 ||
	                key == 110 ||
	                key == 190 ||
	                (key >= 35 && key <= 40) ||
	                (key >= 48 && key <= 57) ||
	                (key >= 96 && key <= 105));
	        });
	    });
	};
	function pad(num, size) {
	    num = num.toString();
	    while (num.length < size) num = "0" + num;
	    return num;
	}
	$(document).ready(function(){
		$("#paymentmethod2").click(function(){
			$(".ccinfo").prop("required", "true");
		});
		$("#paymentmethod1").click(function(){
			$(".ccinfo").removeAttr("required");
		});
		$("#cvv").ForceNumericOnly();
		$("#cvv").focusout(function(){
			$("#cvv").val(pad($("#cvv").val(),3));
		});
	});
</script>
</body>
</html>