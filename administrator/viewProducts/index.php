<?php

  include('../../session.php');

try
{

  $pdo = new PDO('mysql:host=localhost;dbname=bakery', 'root', 'root');
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

  $sql = 'SELECT productDescription FROM product_t';
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

include 'view_products.html.php';
