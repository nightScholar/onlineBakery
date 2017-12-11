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

  $sql = "SELECT orderLine_t.orderID, SUM(product_t.productPrice*orderLine_t.orderedQuantity) as OrderTotal
          FROM product_t JOIN orderLine_t
          WHERE product_t.productID = orderLine_t.productID
          GROUP BY orderLine_t.orderID
          DESC";
  
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching largest orders: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $orderIDs[] = $row['orderID'];
  $totals[] = $row['OrderTotal'];
}

include 'largestOrders.html.php';