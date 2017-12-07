<?php

if (isset($_GET['addProduct']))
{
  include 'form.html.php';
  exit();
}

try
{

  $pdo = new PDO('mysql:host=localhost;dbname=company', 'tsolomonphillips', 'raidTombs2463%');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}

catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

/*
	this will satisfy the delete requirement
*/

if (isset($_GET['deleteProduct']))
{
  try
  {
    $sql = 'DELETE FROM product_t WHERE productID = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting product: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}