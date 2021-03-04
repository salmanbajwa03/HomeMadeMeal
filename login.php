<!DOCTYPE html>
<html>
<head>
	<title> Welcome to the ~ Express Home Made Meal Delivery in Pakistan | EatWell </title>
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
		.field-icon {
			float: right;
			margin-right: 10px;
			margin-top: -30px;
			position: relative;
			z-index: 2;
		}
	</style>
</head>
<body>

	<!-- Nav Bar Starting -->
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
			<div class="navbar-nav ml-auto active">
				<a href="login.php" class="nav-item nav-link">
				<span style="font-size:20px" class="fa fa-sign-in"></span> Login / Sign Up</a>
			</div>
		</div>
	</nav>
	<!-- Nav Bar Ending -->
	
	<!-- Login content Starting -->
	<div class="jumbotron" style="background-color:#D70F64;border-radius:0;">
		<div class="container">
			<h4 style="color:white;display:inline-block">Welcome to EatWell! Please Login</h4>
			<div class="jumbotron mt-2">
				<form>
					<div class="row ml-5">
						<div class="col-md-5 col-lg-5">
							<div class="form-group">
								<label>Email Address</label>
								<input type="email" style="height:50px" class="form-control w-100" id="exampleInputEmail" required placeholder=" Enter Your Email">
							</div>
							<div class="form-group">
								<label>Phone No</label>
								<input type="text" style="height:50px" class="form-control w-100" id="exampleInputEmail" required placeholder=" Enter Your Mobile No">
							</div>							
							<div class="form-group">
								<label>Password</label>
								<input id="password-field" style="height:50px" placeholder="Enter Password" type="password" class="form-control" name="password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
						</div>
						<div class="col-md-5 col-lg-5 mt-4 ml-3">
							<div>
								<button type="submit" class="btn btn-success w-100 p-3 mt-3"><span style="font-size:20px" class="fa fa-sign-in"></span> &nbsp &nbspLOGIN</button>
							</div>
							
							<div>
								<button type="submit" class="btn btn-primary w-100 p-3 mt-3"><b style="font-size:20px"> f </b> &nbsp FACEBOOK</button>
							</div>							
							<div>
								<button type="submit" class="btn btn-danger w-100 p-3 mt-3"><b style="font-size:20px"> G+ </b> &nbsp  GOOGLE</button>
							</div>							

						</div>
					</div>
				</form>
			</div>
			<h4 style="color:white">New Member? <a href="signup.php" style="text-decoration:none"> Register</a> here</h4>	
		</div>	
	</div>
	<!-- Login content Ending -->
	<div style="margin-top:-32px">
		<?php include('footer.php')?>
	</div>
</body>
<script>
	$(".toggle-password").click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} 
		else {
			input.attr("type", "password");
		}
	});
</script>