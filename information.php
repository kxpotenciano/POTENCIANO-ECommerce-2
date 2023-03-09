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
	<div class="row alignment">
		<div class="col-6">
			<div class="infocon">
				<div class="infobox">
					<button type="button" class="btn infobtn" style="font-size: 64px;" data-toggle="modal" data-target="#FAQs">
					FAQs
					</button>
				</div>
				<div class="infobox">
					<button type="button" class="btn infobtn" style="font-size: 34px;" data-toggle="modal" data-target="#Paymentpartners">
					Payment Partners
					</button>
				</div>
				<div class="infobox">
					<button type="button" class="btn infobtn" style="font-size: 44px;" data-toggle="modal" data-target="#Aboutus">
					About us
					</button>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="infocon">
				<br><br>
				<i class="fas fa-question" style="font-size: 146px;"></i>
				<p style="font-size:64px; margin-top:50px;">Refund Policy</p><br><br>
				<p style="font-size: 18px;">
				Due to the nature of a digital game pins business,<br>
				if you need a refund, we will do everything we can<br>
				to verify the pins is unused and issue you a refund.<br>
				If we are unable to verify the pins is unused,<br>
				we will not be able to any refund
				<br><br>
				</p>
			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="FAQs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header modalhead">
        <p class="modal-title" id="exampleModalLongTitle">FAQ</p>
      </div>
      <div class="modal-body modalbody">
      	<p class="modaltitletext">Getting Started</p>
      	<p class="modalheadtext">How to create an Account?</p>
		Click <a href="register.php">here</a> to sign up or to create an account
		<p class="modalheadtext">Do you offer other e-credits besides the ones that are available?</p>
		We are still working on it, but we have some other e-credits ideas to add in the future.
		<p class="modaltitletext">Payment</p>
		<p class="modalheadtext">Are there any other way of paying?</p>
		We are still working on having other payment methods, but for now, only those at the checkout page are available.
		<p class="modaltitletext">Redeem e-credits</p>
		<p class="modalheadtext">How to redeem Garena Shells?</p>
		You can check the guide here <a href="https://support.unipin.com/hc/en-us/articles/360037691211-How-to-Redeem-Garena-Shell">https://support.unipin.com/hc/en-us/articles/360037691211-How-to-Redeem-Garena-Shell</a>
		<br><br>
        <button type="button" class="btn modalbtn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Paymentpartners" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header modalhead">
        <p class="modal-title" id="exampleModalLongTitle">Payment Partners</p>
      </div>
      <div class="modal-body modalbody">
      	<p class="modalheadtext">Payment Partners</p>
		Gcash - <a href="https://www.gcash.com/">https://www.gcash.com/</a>
		<br>
		Visa - <a href="https://www.visa.com.ph/">https://www.visa.com.ph/</a>
		<br>
		Mastercard - <a href="https://www.mastercard.com/global/en.html">https://www.mastercard.com/global/en.html</a><br><br>
        <button type="button" class="btn modalbtn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Aboutus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header modalhead">
        <p class="modal-title" id="exampleModalLongTitle">About Us</p>
      </div>
      <div class="modal-body modalbody">
      	The Aeins’ Game Credits E-commerce Website was made by third year college students from iAcademy
		aiming to create a way for gamers to purchase online e-credits for their favorite games. The website
		is based in the Philippines and allows everyone to purchase everything need for their video game of
		choice. Local release in the Philippines would be at early 2022. The team are group of students that
		wants gamers to have an easier way to purchase e-credits at the ease of their homes that is fast,
		reliant, and responsive.<br><br>
        <button type="button" class="btn modalbtn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>