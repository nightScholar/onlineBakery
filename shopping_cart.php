<?php
	
	include('connectToDB.php');
	include('session.php');
	
try
{

  $sql = 'SELECT productDescription, productPrice FROM product_t';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching products names: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $products[] = $row['productDescription'];
}
?>
<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>No Sidebar - Horizons by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

		<style>
			table, th, td 
			{
    			border: 1px solid black;
			}
		</style>
	</head>
	<body class="no-sidebar" id='about_background'>

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Shopping Cart</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="our_menu.html.php">Menu</a></li>
								<li><a href="order_online.html.php">Order Online</a></li>
								<li><a href="about_us.html.php">About Us</a></li>
							</ul>
						</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<!--We could use this section template below to pull in the information
						that the customer ordered from the order_online.html page (feel free to delete anything that you do not need. Once the user
						clicks the Sumbit Order button, we should first check to see if they are logged in, if they are logged in they can move onto the  
						review order page with all the information from their shopping cart being pulled in. If they are not logged in, they should be directed to the login page.
						
						Once the user logs in we should check to make sure that they have a customer login and not an Administrator login.
						If they have an administrator login they should not be allowed to order any products. Only people with
						customer usernames and passwords should be able to order products from the bakery. This is slightly different from our
						EER design (we can edit that to reflect the new change), it might just be a little easier at this point to just have
						all users who want to buy any baked goods to have a username and password. If we have some time left, we could build
						in the Guest information once we get a better idea of how all of this works -->

						
						
						<form action="thank_you.php" method="post">
						 		
						    <p>Shopping Cart:</p>

							 <table>
								<tr>
									<th>Proudct Name</th>
								</tr>
  
								<tr> <?php foreach ($products as $productDescription) : ?>
									<td id="text"> <?php echo $productDescription?> </td>
									
									<td><?php if(isset($_POST["quantity"])){ $quantity = $_POST['quantity'];
									echo $quantity;
									}; ?></td></tr>
									<?php endforeach; ?>
								
								</table>
						     
						       </tr>
						   <button type="submit" action='thank_you.php'>Submit Order</button>
						</form>
					</section>
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
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
</html>