<?php
try
{

  $pdo = new PDO('mysql:host=localhost;dbname=bakery', 'Fzuo', '921026');
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

 <style>
     table, th, td 
      {
           border: 1px solid black;
      }
      .text
      {
        text-align: center;
      }
    </style>
  <body>
    <p>The following product has been entered into the database. See detials below:</p>

    <table>
      <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Material Cost</th>
      </tr>
      <tr>
        <td class="text"><?php echo $productID?></td>
        <td class="text"><?php echo $productDescription?></td>
        <td class="text">$<?php echo $productPrice?></td>
        <td class="text">$<?php echo $materialCost?></td>
      </tr>
    </table>

    <br>
     <a href="../index.php">Back to Administrator Homepage</a>

  </body>
</html>
