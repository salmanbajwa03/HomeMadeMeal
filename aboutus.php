<?php include('links.php')?>
<head>
	<title>About Us - Eatwell _ Food Delivery</title>
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
				<li class="nav-item active">
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
	</nav>
	<!-- Nav Bar Ending -->

	
	

	<!-- Our Team Starting -->
	<div class="container mt-5">
		<div class="row">
			<div class="col" style="font-size:35px;text-align:center;color:black">
				<b> OUR TEAM </b>
			</div>
		</div>
		<div class="row">
			<div class="col" style="font-size:20px;text-align:center;color:grey">
				<b> The Best of Professionals </b>
			</div>
		</div>
		<div class="row mt-5" style="text-align:center">
			
			<div class="col-lg-4">
				<img width="100%" src="https://scontent.flhe2-1.fna.fbcdn.net/v/l/t1.0-9/79488340_1222361427952141_2071249266986188800_n.jpg?_nc_cat=107&_nc_eui2=AeFMJfB09cbpYmLXZpF5ZLD4qpdsH1huJXFn0zVU73SC45E9-HePvuasWIiL54rW90Otxzjbsob9RT5miM9lEMq0Dk0lltYEsyo9jsQRYdz_JA&_nc_oc=AQkHS_ib1JEj_i0n_u1F_ZpEpRzI7GkDx89OrW4oo5dDeN1DnqUuS_MTjIkESFosxfg&_nc_ht=scontent.flhe2-1.fna&oh=94071c92ef83ef541126d65ee8e3b6c3&oe=5EA75E5F">
				<div class="jumbotron">
					<span style="font-size:20px;color:black"><b> Hamza Gujjar </b></span> <br>
					<span style="color:grey;font-size:15px"> Developing the narketing strategy for<br>
							new and existing services<br>
							<b>hamzalatif1255@gmail.com</b>
					</span>
				</div>
			</div>
			<div class="col-lg-4">
				<img width="100%" src="https://scontent.flhe2-1.fna.fbcdn.net/v/t1.0-9/s960x960/38516147_519253865211166_162236320817610752_o.jpg?_nc_cat=104&_nc_eui2=AeFVUhoSBx8DtLxx3U3-NFBB7fQ4b7I0GjCNFJh6ijA_DqRrM67XtC0a7xy2loXboqy6nPMASVhz167O6_xLnopcwJJYvfdWnUae_yiQ0WHLHA&_nc_oc=AQk-NyNz_6UfU8UdDbVlHrv-qAL7HY-c4PXBEviYagAsVQadrJ4RlsdTzTel77qNf2o&_nc_ht=scontent.flhe2-1.fna&_nc_tp=1002&oh=597519c7e9d49e05847d7399c6b1e7be&oe=5EA38596">
				<div class="jumbotron">
					<span style="font-size:20px;color:black"><b> Zeeshan Gujjar </b></span> <br>
					<span style="color:grey;font-size:15px"> Driving the financial planning of the<br>
							company by analyzing its performance<br>
							<b>zeeshanhaidar1244@gmail.com</b>
					</span>
				</div>
			</div>
			<div class="col-lg-4">
				<img width="100%" src="https://scontent.flhe2-1.fna.fbcdn.net/v/t1.0-9/42763901_1956797617748537_6906459952026484736_n.jpg?_nc_cat=110&_nc_eui2=AeEuIszONEqTJHMpko_b-xpgWj3xYxb5OQsNk8IPJlai_sYVnASrce0LSxEDohivGmMHjY3Rs3NZGgo8BtLKC5XyZD-Ro2osWc1zBh_Xpv2mQw&_nc_oc=AQmLXFjsUgjCXBvwD2ZxdTse6RrDysJdRI_cvH9rbCJ4vwT9Agqq8hRpRUT9dABEwDs&_nc_ht=scontent.flhe2-1.fna&oh=6f2d3bc63afa8b74760326126eb17c1c&oe=5EA35C8E">
				<div class="jumbotron">
					<span style="font-size:20px;color:black"><b> Salman Bajwa </b></span> <br>
					<span style="color:grey;font-size:15px"> Responsible for the successful leadership<br>
							and management of the company<br>
							<b> salmanbaj03@gmail.com </b>
					</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Our Team Ending -->
	<?php include('whychooseus.php')?>
	<div class="mt-3"> <?php include('footer.php')?></div>
</body>









