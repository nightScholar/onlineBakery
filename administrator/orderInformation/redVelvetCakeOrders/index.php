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

  $sql = "SELECT *
          FROM orderLine_t
          WHERE EXISTS (
          SELECT *
          FROM product_t
          WHERE product_t.productID = orderLine_t.productID
          AND product_t.productDescription = 'Red Velvet Cake')";
  
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching red velvet cake orders: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $orderLineIDs[] = $row['orderLineID'];
  $orderIDs[] = $row['orderID'];
  $productIDs[] = $row['productID'];
  $quantity[] = $row['orderedQuantity'];
}

include 'redVelvetCakeOrders.html.php';