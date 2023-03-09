<?php
require_once("Model/User.php");
session_start();
if(isset($_SESSION['errors'])){
	$errors = $_SESSION['errors'];
	unset($_SESSION['errors']);
}
include("Controller/log.php");

?>
<html>
<?php 
include("Controller/header.php");
?>
<body style="margin: auto;">
<?php
include("Controller/nav.php");
if(isset($errors)){
?>
<div class="jumbotron">
	<ul>
		<?php
		foreach ($errors as $key => $value) {
		?>
		<li><?= $value ?></li>
		<?php
		}
		?>
	</ul>
</div>
<?php
}
?>
	<div class="regcon" style="margin-top: 35px; border: 1px solid; border-color: #E1E1E1; padding: 30px; width: 500px; background: white;">
		<form action="Controller/register.php" method="POST">
		<h2>Sign Up</h3>
		<p>Fill in the form below to get instant access</p>
		<hr>
		  <div class="form-group">
		  	<div class="row">
		  		<div class="col">
		  			<label for="firstname">Firstname:</label>
		  			<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" required>
		  		</div>
		  		<div class="col">
		  			<label for="lastname">Lastname:</label>
		  			<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" required>
		  		</div>
		  	</div>
		  </div>
		  <div class="form-group">
		    <label for="username">Username:</label>
		    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
		  </div>
		  <div class="form-group">
		  	<label for="email">Email:</label>
		  	<input type="text" class="form-control" name="email" id="email"
		  	placeholder="Enter Email" required>
		  </div>
		  <div class="form-group">
		    <label for="password">Password: </label>
		    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
		  </div>
		  <div class="form-group">
		    <label for="password2">Re-Enter Password: </label>
		    <input type="password" name="password2" class="form-control" id="password2" placeholder="Enter Password" required>
		  </div>
		  <div class="form-group">
		  	<div class="row">
		  		<div class="col-4"></div>
		  		<div class="col-4">
		  		<input type="submit" class="btn regbtn" value="CONTINUE" style="text-align: center; margin-auto;">
		  		<div class="col-4"></div>
		  		</div>
		  	</div>
		  </div>
		</form>	
	</div>
</body>
</html>