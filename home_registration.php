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
				<li class="nav-item">
					<a class="nav-link" href="index.php">
					<span style="font-size:20px" class="fa fa-home"></span> Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutus.php">About Us </a>
				</li>        
				<li class="nav-item">
					<a class="nav-link" href="contactus.php">Contact</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" hrl2ef="home_registration.php">Join Us</a>
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
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col p-3" style="background-color:#D70F64;color:white;font-size:30px;text-align:center;">
			  Interested? Fill in the form below<br>to become our partner and<br>increase your revenue!
			</div>
		</div>
		<form class="container-fluid">
			<div class="row bg-light">
				<label class="mt-4 ml-5 mr-5"> Kitchen / Resturant Name </label>
				<input class="form-control ml-5 mr-5" type="text" name="res_name" required></input>
			</div>
			<div class="row bg-light">
				<label class="mt-4 ml-5 mr-5"> Your Name </label>
				<input class="form-control ml-5 mr-5" type="text" name="res_name" required></input>
			</div>
			<div class="row bg-light">
				<label class="mt-4 ml-5 mr-5"> Phone </label>
				<input class="form-control ml-5 mr-5" type="text" name="res_name" required></input>
			</div>
			<div class="row bg-light">
				<label class="mt-4 ml-5 mr-5"> Email </label>
				<input class="form-control ml-5 mr-5" type="email" name="res_name" required></input>
			</div>
			<div class="row bg-light">
				<label class="mt-4 ml-5 mr-5"> Location </label> 
				<input class="form-control ml-5 mr-5" type="email" name="res_name" required></input>
				<button class="ml-5 mt-3 border"><a href="https://www.google.com/maps/@31.451481,74.2531461,15z" style="text-decoration:none"> Choose From Map </button> <a>				
				
			</div>
			
			<div class="row bg-light">
				 <button class="btn btn-success ml-5 mr-5 mt-3 border w-100"> Submit </button>
			</div>
			<div class="row bg-light">
				 <span style="opacity:0">1</span>
			</div>
		</form>
	</div>
	<?php include('footer.php')?>
</body>
