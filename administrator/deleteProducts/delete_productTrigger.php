<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=bakery', 'tsolomonphillips', 'raidTombs2463%');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

try
{
  $sql = "BEGIN
			INSERT INTO product_t_audit
			SET action = 'delete',
			productDescription = OLD.productDescription,
			productID = OLD.productID,
			productPrice = OLD.productPrice,
			materialCost = OLD.materialCost,
			changedon = NOW();
		END";
  
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error with trigger syntax: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}
