<?php
	include('../../session.php');
	?>
<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

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
						<h1><a href="#" id="logo">Order Information</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="pendingDeliveryOrders/index.php">Pending Delivery Orders</a></li>
								<li><a href="pendingPickupOrders/index.php">Pending Pickup Orders</a></li><br>
								<li><a href="allCompletedOrders/index.php">All Completed Orders</a></li>
								<li><a href="allPendingOrders/index.php">All Pending Orders</a></li><br>
								<li><a href="largestOrders/index.php">Largest Orders by Total Price</a></li>
								<li><a href="totalOrderProfit/index.php">Total Profit of All Orders</a></li><br>
								<li><a href="redVelvetCakeOrders/index.php">Red Velvet Cake Orders</a></li>
								<li><a href="redVelvetCakeOrdersByUser/index.php">Red Velvet Cake Orders By User</a></li><br>
								<li><a href="../index.php">Administrator Home</a></li>
							</ul>
						</nav>


					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<h2>Welcome to Shawn's bakery!</h2>
									</header>
									
									<br>
									<br>
									    <!-- create Modal login out button -->
                  <button onclick='logout()' style="width:auto;">Log Out</a></button>
                  <script>
                    function logout(){
                      window.open('../logout.php',"_self");
                    }
                  </script>
								</section>			
							</div>
						</div>

				</div>
			</div>

		<!-- Featured -->
			<!--<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h2 style='font-family: HelveticaRegular'>Proud to Offer</h2>
						<span class="byline">Our Handcrafted Cakes</span>
					</header>
					<div class="row no-collapse-1">
						<section class="4u">
							<a href="#" class="image feature"><img src="images/RedVelvet.jpg" alt=""></a>
							<p>Red Velvet Cake</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/Strawberry Cheescake_v2.jpg" alt=""></a>
							<p>Strawberry Cheesecake</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/Chocolate Bundt Cake.jpg" alt=""></a>
							<p>Chocolate Bundt Cake </p>
						</section>
	
					</div>
				</section>
			</div>-->

		<!-- Main -->

		<!-- Footer -->
			<!-- <div id="footer">
				<div class="container"> -->

					<!-- Lists -->
						<!-- <div class="row">
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
						</div> -->

					<!-- Copyright -->
						<!-- <div class="copyright">
							Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
						</div>

				</div>
			</div> -->

	</body>
</html>