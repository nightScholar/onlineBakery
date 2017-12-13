<?php
	include('session.php');
	?>

<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Left Sidebar - Horizons by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="left-sidebar">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Order Products Below</a></h1>

					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="our_menu.html.php">Menu</a></li>
								<li><a href="order_online.html.php">Order Online</a></li>
								<li><a href="shopping_cart.php">Shopping Cart</a></li>
								<li><a href="about_us.html.php">About Us</a></li>
							</ul>
						</nav>
						<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<h2>Welcome to Shawn's bakery! <span style="color: #A5FFD6"><?php echo $login_session; ?></span> </h2>
									</header>
									<!-- create Modal login out button -->
									<button onclick='logout()' style="width:auto;">Log Out</a></button>
									<script>
										function logout(){
											window.open('logout.php',"_self");
										}
									</script>
								
								</section>			
							</div>
						</div>
				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<div class="row">
					
						<!-- Sidebar -->
						<div id="sidebar" class="4u sidebar">
							<section>
								<header class="major">
									
								</header>
									<div class="wrapper style2">
										<section class="container">
											<!--<header class="major">
												<h2 style='font-family: HelveticaRegular'>Proud to Offer</h2>
												<span class="byline">Our Homemade Cakes</span>
											</header>-->
											<div class="row no-collapse-1">
												<section class="4u">	
													<a href="#" class="image feature"><img src="images/RedVelvet.jpg" alt=""></a>
													<p>Red Velvet Cake</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <button type="submit" action=''>Add to Cart</button>
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/Muffins.jpg" alt=""></a>
													<p>Organic Blueberry Muffins</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/cupcakes.jpg" alt=""></a>
													<p> Carrot Cake Cupcakes w/ white Frosting</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/Chocolate Bundt Cake.jpg" alt=""></a>
													<p>Chocolate Bundt Cake</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/Pound Cake.jpg" alt=""></a>
													<p>Pound Cake w/ white Frosting</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/Cookies.jpg" alt=""></a>
													<p>Chocolate Peanut Butter, Macadamia, Oatmeal Raisin, and Chocolate Chip Cookies</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/SweetPotatoPie.jpg" alt=""></a>
													<p>Sweet Potato Pie</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/Strawberry Cheescake_v2.jpg" alt=""></a>
													<p>Strawberry Cheesecake</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/Cheesecake.jpg" alt=""></a>
													<p>Cheesecake</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
												<section class="4u">
													<a href="#" class="image feature"><img src="images/Red Velvet Cupcakes.jpg" alt=""></a>
													<p>Red Velvet Cupcakes</p>
													<form action="shopping_cart.php" method="post">
													  <select name="quantity10">
													  	<option value="0">0</option>
													    <option value="one">1</option>
													    <option value="two">2</option>
													    <option value="three">3</option>
													    <option value="four">4</option>
													    <option value="five">5</option>
													    <option value="six">6</option>
													    <option value="seven">7</option>
													    <option value="eight">8</option>
													    <option value="nine">9</option>
													    <option value="ten">10</option>
													  </select>
													  <br><br>
													  <input type="submit" value="Add to Cart">
													</form>
												</section>
											</div>
										</section>
									</div>
							</section>
			
						</div>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h2>Order Here</h2>
								</header>
								<form action="take_order.php" method="post">
							</section>
						</div>
					
					</div>
				</div>
			</div>

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
	
	<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
</html>