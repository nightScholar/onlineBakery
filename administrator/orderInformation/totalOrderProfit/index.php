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

  $sql = "SELECT SUM(product_t.productPrice*orderLine_t.orderedQuantity) as OrderTotal,
              SUM(product_t.materialCost *orderLine_t.orderedQuantity) as MaterialCost,
              (SUM(product_t.productPrice*orderLine_t.orderedQuantity)-SUM(product_t.materialCost *orderLine_t.orderedQuantity)) AS TotalProfit
          FROM product_t JOIN orderLine_t
          WHERE product_t.productID = orderLine_t.productID";
  
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching order profits: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $orderTotals[] = $row['OrderTotal'];
  $materialCosts[] = $row['MaterialCost'];
  $totalProfits[] = $row['TotalProfit'];
}

include 'totalOrderProfit.html.php';