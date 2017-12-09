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

  $productID = $_GET['productID'];
  $productDescription = $_GET['productDescription'];
  $productPrice = $_GET['productPrice'];
  $materialCost = $_GET['materialCost'];


  $sql = "INSERT INTO product_t
  (productID, productDescription, productPrice, materialCost)
  values
  ('$productID', '$productDescription', '$productPrice', '$materialCost')"; 
  
  $affectedRows = $pdo->exec($sql);
}
catch (PDOException $e)
{
  $output = 'Error updating the product list: ' . $e->getMessage();
  include 'output.html.php';
  exit();
}

$output = "Insert $affectedRows rows." . "<br/>";

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Products Added</title>
  </head>
  <body>
    <p>The following product has been entered into the database</p>
    <?php

      echo $productDescription;
    ?>


  </body>
</html>
