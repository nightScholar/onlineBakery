<?php

/*
	this will be our main landing page for the administrator
*/

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=bakery', 'tsolomonphillips', 'xxxxx');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $output = 'Unable to connect to the bakery server.' . $e->getMessage();
  include 'error.html.php';
  exit();
}

try
{
  $products = 'SELECT * FROM product';
  $productResult = $pdo->query($products);
}
catch (PDOException $e)
{
	$error = 'Unable to perform product query.' . $e->getMessage();
	include 'error.html.php';
	exit();
}

?>

 <!-- need to include HTML below for this page -->
