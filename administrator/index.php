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
						<h1><a href="#" id="logo">Shawn's Bakery</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="viewProducts/index.php">View Products</a></li>
								<li><a href="addProducts/index.php">Add Products</a></li>
								<li><a href="deleteProducts/index.php">Delete Products</a></li>
								<li><a href="popularProducts/index.php">Popular Products</a></li><br>
								<li><a href="orderInformation/index.php">Order Information</a></li>
							</ul>
						</nav>


					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<h2>Welcome to Shawn's bakery!</h2>
									</header>

									<!-- create Modal login in forms -->
									<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
									<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
									<div id="id01" class="modal">
										<form class="modal-content animate" action="sign_in.html.php" method="POST">
											<div class="imgcontainer">
												<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
											</div>
											<div class="modal_container">
												<label style="float:Left"><b>Username</b></label>
												<input type="text" placeholder="Enter Username" name="username" required>
												<label style="float:Left"><b>Password</b></label>
												<input type="password" placeholder="Enter Password" name="password" required>
												<button type="submit">Login</button>
												<input type="checkbox" checked="checked"> Remember me
											</div>
											<div class="modal_container" style="background-color:#f1f1f1">
												<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
												<span class="psw" style="color:#FFA69E">Forgot <a href="#">password?</a></span>
											</div>
											
										</form>
										<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
									</div>
									<div id="id02" class="modal">
										<form class="modal-content animate" action="/sign_up.php">
											<div class="imgcontainer">
												<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
											</div>
											<div class="modal_container">
												<label style="float:Left"><b>First Name</b></label>
												<input type="text" placeholder="First Name" name="ufname" required>
												<label style="float:Left"><b>Last Name</b></label>
												<input type="text" placeholder="Last Name" name="ulname" required>
												<label style="float:Left"><b>Phone Number</b></label>
												<input type="text" placeholder="Enter Phone Number" name="uphone" required>
												<label style="float:Left"><b>Email</b></label>
												<input type="Email" placeholder="Enter Email" name="uemail" required>
												<label style="float:Left"><b>User Name</b></label>
												<input type="text" placeholder="Enter Username" name="uname" required>
												<label style="float:Left"><b>Password</b></label>
												<input type="password" placeholder="Enter Password" name="psw" required>
												<button type="submit">Login</button>
												<input type="checkbox" checked="checked"> Remember me
											</div>
											<div class="modal_container" style="background-color:#f1f1f1">
												<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
												
											</div>
										</form>
									</div>
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