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

  $sql = 'SELECT product_t.productID, product_t.productDescription, SUM(orderline_t.orderedQuantity) AS Total
          FROM orderline_t, product_t
          WHERE product_t.productID = orderline_t.productID
          GROUP BY product_t.productID
          ORDER BY Total DESC';
  
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching popular product list: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $productIDs[] = $row['productID'];
  $products[] = $row['productDescription'];
  $counts[] =  $row['Total'];
}

include 'popular_products.html.php';
