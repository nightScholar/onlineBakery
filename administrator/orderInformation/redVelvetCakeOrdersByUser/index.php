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

  $sql = "SELECT user_t.userID, user_t.firstName, user_t.lastName
          FROM user_t
          WHERE user_t.userID IN (
          SELECT order_t.userID
          FROM orderLine_t JOIN order_t JOIN product_t
          WHERE order_t.orderID = orderLine_t.orderID
          AND orderLine_t.productID = product_t.productID
          AND product_t.productDescription = 'Red Velvet Cake')";
  
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching red velvet cake orders by user: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $userIDs[] = $row['userID'];
  $firstNames[] = $row['firstName'];
  $lastNames[] = $row['lastName'];
}

include 'redVelvetCakeOrdersByUser.html.php';