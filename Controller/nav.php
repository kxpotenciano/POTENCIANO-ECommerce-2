<nav class="navbar navbar-expand-lg navcolor">
  <a class="navbar-brand" href="index.php"><img src="img/navtitle.png" class="navtitle"></a>
  <button class="navbar-toggler btncolor" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php
    if(!isset($_SESSION['user']))
    {
    ?>
      <li class="nav-item">
        <a class="nav-link navtxtcolor2" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navtxtcolor2" href="register.php">Register</a>
      </li>
  	<?php
  	}
  	else{
  	?>
  	  <li class="nav-item">
        <a class="nav-link navtxtcolor2" href="Controller/logout.php">Logout</a>
      </li>	
  	<?php } ?>
    </ul>
    <form action="search.php" method="POST" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search items..." name="search" id="search" style="width: 500px;">
      &nbsp;&nbsp;
      <button class="btn btncolor my-2 my-sm-0" type="submit">Search <i class="fas fa-search"></i></button>
      &nbsp;&nbsp;
      <a href="information.php"><i class="fas fa-info-circle" style="font-size: 32px; color:#FF3C69;"></i></a>
      &nbsp;&nbsp;
    </form>
  </div>
</nav>