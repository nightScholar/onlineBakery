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

  $sql = "SELECT order_t.orderID, user_t.firstName, user_t.lastName, order_t.deliveryAddress, order_t.deliveryCity, order_t.deliveryState, order_t.deliveryZipcode, order_t.orderStatus, order_t.deliveryOption
          FROM order_t, user_t
          WHERE order_t.userID = user_t.userID
          AND order_t.orderStatus = 'completed'";
  
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching all completed orders: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $orderIDs[] = $row['orderID'];
  $fisrtNames[] = $row['firstName'];
  $lastNames[] =  $row['lastName'];
  $addresses[] =  $row['deliveryAddress'];
  $cities[] =  $row['deliveryCity'];
  $states[] =  $row['deliveryState'];
  $zipcodes[] =  $row['deliveryZipcode'];
  $orderStatuses[] =  $row['orderStatus'];
  $deliveryOptions[] =  $row['deliveryOption'];
}

include 'allCompletedOrders.html.php';