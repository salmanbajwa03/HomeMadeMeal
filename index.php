<!DOCTYPE html>
<html>
<head>
	<title> Order Online ~ Express Home Made Meal Delivery in Pakistan | EatWell </title>
	<?php include('links.php') ?>
	<style>
		body{
			font-family: "MuseoSans",Arial,sans-serif;
		}
		.cartitems{
			height:25px;width:25px;border-radius:50%;background-color:#ffb84d;display:inline-block;color:white;font-family:Arial;text-align:center;font-size:18px;font-weight:bold;margin-left:-5px;margin-top:-9px;position:absolute;
		}
		a.cartitems:hover{
			background-color:#ff9900;
			text-decoration:none;
			color:white;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark" style="background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
		<a class="navbar-brand">
          <b> Eatwell</b>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">
					<span style="font-size:20px" class="fa fa-home"></span> Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutus.php">About Us </a>
				</li>        
				<li class="nav-item">
					<a class="nav-link" href="contactus.php">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home_registration.php">Join Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
					<span style="font-size:20px" class="fa fa-map-marker"></span> Deliver To</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Track Your Order</a>
				</li>
				<li class="nav-item">
					<div class="nav-link">
						<i class="fa fa-shopping-cart" aria-hidden="true" style="margin-top:4px;color:white;opacity:0.7"></i>	
						<a class="cartitems" href="cart.php" id="cart_item"> 0 </a>
					</div>
				</li>
			</ul>
			<div class="navbar-nav ml-auto">
				<a href="login.php" class="nav-item nav-link">
				<span style="font-size:20px" class="fa fa-sign-in"></span> Login / Sign Up</a>
			</div>
		</div>
	</nav><br>
	<?php include('footer.php')?>
</body>

