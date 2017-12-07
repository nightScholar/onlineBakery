
<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<?php

include("connectToDB.php"); //this file is used to connect to our database

?>

	<head>
		<title>Shawn's Bakery</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Shawn's Bakery</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>
									<a href="">Our Menu</a>
									<ul>
										<li>
											<a href="">Cakes</a>
											<ul>
												<li><a href="#">Pound Cakes</a></li>
												<li><a href="#">Cheese Cakes</a></li>
												<li><a href="#">Birthday Cakes</a></li>
												<li><a href="#">Cup Cakes</a></li>
											</ul>
										</li>
										<li><a href="#">Cookies</a></li>
										<li><a href="#">Pies</a></li>
									</ul>
								</li>
								<li><a href="order_online.html">Order Online</a></li>
								<li><a href="about_us.html">About Us</a></li>
							</ul>
						</nav>


					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<h2>Welcome to Shawn's bakery!</h2>
									</header>
									<a href="sign_in.html.php" class="button alt">Sign Up</a>
								</section>			
							</div>
						</div>

				</div>
			</div>

		<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h2 style='font-family: HelveticaRegular'>Proud to Offer</h2>
						<span class="byline">Our Homemade Cakes</span>
					</header>
					<div class="row no-collapse-1">
						<section class="4u">
							<a href="#" class="image feature"><img src="images/RedVelvet.jpg" alt=""></a>
							<p>Red Velvet Cake</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/Muffins.jpg" alt=""></a>
							<p>Organic Blueberry Muffins</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/cupcakes.jpg" alt=""></a>
							<p>Cute little cupcakes</p>
						</section>
	
					</div>
				</section>
			</div>

		<!-- Main -->

		<!-- Footer -->
			<div id="footer">
				<div class="container">

					<!-- Lists -->
						<div class="row">
							<div class="8u">
								<section>
									<header class="major">
										<h2 style="color:#FFA69E">Shawn's Bakery</h2>
									</header>
									<div class="row">
										<section class="6u">
											<ul class="default">
												<li><a href="#">Like Us</a></li>
												<li><a href="#">Leave Us a Comment</a></li>
											</ul>
										</section>
									</div>
								</section>
							</div>
							<div class="4u">
								<section>
									<ul class="contact">
										<li>
											<span class="address">Address</span>
											<span>1234 S 25th St<br />Philadelphia, PA 19147</span>
										</li>
										<li>
											<span class="mail">Mail</span>
											<span><a href="#">TyreeLovesCoding@gmail.com</a></span>
										</li>
										<li>
											<span class="phone">Phone</span>
											<span>(234) 567-8990</span>
										</li>
									</ul>	
								</section>
							</div>
						</div>

					<!-- Copyright -->
						<div class="copyright">
							Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
						</div>

				</div>
			</div>

	</body>
</html>