<?php include('links.php')?>
<head>
	<title>Contacts - Eatwell _ Food Delivery</title>
	<style>
	body{
		font-family: "MuseoSans",Arial,sans-serif;
	}
	.cartitems{
		height:25px;width:25px;border-radius:50%;background-color:#ffb84d;display:inline-block;color:white;font-family:Arial;text-align:center;font-size:18px;font-weight:bold;margin-left:-4px;margin-top:-8px;position:absolute;
	}
	a.cartitems:hover{
		background-color:#ff9900;
		text-decoration:none;
		color:white;
	}
	.form-line{
		border-right: 1px solid #B29999;
	}	
	.form-group{
		margin-top: 10px;
	}
	textarea.form-control {
		height: 135px;
	}
	</style>
</head>
<body>
	<!-- Nav Bar Starting -->
	<nav class="navbar navbar-expand-md navbar-dark" style="background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
		<a class="navbar-brand">
			<b> Eatwell </b>     
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
				<li class="nav-item active">
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
	</nav>
	<!-- Nav Bar Ending -->

	<!-- Google Map Location starting -->
	
	<div class="post_content entry-content">
		<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
			<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
				<div class="vc_column-inner">
					<div class="wpb_wrapper">
						<div id="sc_googlemap_1908202447_wrap" class="sc_googlemap_wrap">
							<div id="sc_googlemap_1908202447" class="sc_googlemap sc_googlemap_default" style="width:100%;height:400px;" data-zoom="11" data-style="grey">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d850.9391459316302!2d74.25867287161206!3d31.44836756208802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391901e8fc11e561%3A0x1218846ca05bc299!2sHorizon%20Boys%20Hostel!5e0!3m2!1sen!2sus!4v1579078384242!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<br><br><br><br>
	<!-- Google Map Location Ending -->
	
	<!-- Our Information Starting -->
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="jumbotron" style="border-radius:30px;text-align:center">
					<span style="font-size:25px"> <b> Address </b> </span><br>
					<span style="font-size:19px;color:#858789">  Horizon Boys Hostel, Al Hamra Town, Lahore, Pakistan </b> </span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="jumbotron" style="border-radius:30px;text-align:center">
					<span style="font-size:25px"> <b> Phone </b> </span><br>
					<span style="font-size:22px;color:#858789"> 0307-5454819 </span><br><br>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="jumbotron" style="border-radius:30px;text-align:center">
					<span style="font-size:25px"> <b> Email </b> </span><br>
					<span style="font-size:22px;color:#858789"> zeeshanhaidar1244<br>@gmail.com </span>
				</div>
			</div>
		</div>
	</div>
	<!-- Our Information Ending -->
	
	<!-- Get In Touch Starting -->
	<div class="container-fluid p-3" style="color:white;background-color:#D70F64">
		<div class="row">
			<div class="col mt-5 ml-5">
				<h1>Get In <span style="color:gold"> Touch With Us <span> </h1>
			</div>
		</div>
		<div class="container">
			<form>
				<div class="row">
					<div class="col-md-6 col-lg-6 form-line">
						<div class="form-group">
							<label>Your name</label>
							<input type="text" class="form-control" id="" placeholder=" Enter Name" required>
						</div>
						<div class="form-group">
							<label>Email Address</label>
							<input type="email" class="form-control" id="exampleInputEmail" required placeholder=" Enter Email id">
						</div>	
						<div class="form-group">
							<label>Mobile No.</label>
							<input type="tel" class="form-control" id="telephone" required placeholder=" Enter 10-digit mobile no.">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label> Message</label>
							<textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
						</div>
						<div>
							<button type="submit" class="btn btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
						</div>	
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Get In Touch Ending -->
	<?php include('footer.php')?>
</body>








