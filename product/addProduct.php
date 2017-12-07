<?php

if (isset($_GET['addProduct']))
{
 /*
	we will need to include our own form page here.
 */ 
  
  include 'form.html.php';
  exit();
}

try
{

  $pdo = new PDO('mysql:host=localhost;dbname=bakery', 'tsolomonphillips', 'xxxx');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.' $e->getMessage();
  include 'error.html.php';
  exit();
}


/*This will satisfy number 5. of the technical specifications 
  which wants us to perform an insert into the database, we can insert a product
*/

if (isset($_POST['productDescription']))
{
  try
  {
    $sql = 'INSERT INTO product_t SET
        productID = :pID,
        productDescription = :pDescription,
        productPrice = :pPrice,
        materialCost = :mCost,
        productImage = :pImage';
    $s = $pdo->prepare($sql);
    $s->bindValue(':pID', $_POST['productID']);
    $s->bindValue(':pDescription', $_POST['productDescription']);
    $s->bindValue(':pPrice', $_POST['productPrice']);
    $s->bindValue(':mCost', $_POST['materialCost']);
    $s->bindValue(':pImage', $_POST['productImage']);
    
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding new product: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

/*
  this will give us a simple select SQL statement
*/

try
{
  $sql = 'SELECT productDescription FROM product_t';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching products: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $dnames[] = $row['dname'];
}


try
{
  $sql = 'SELECT ssn FROM employee';
  $employeeSSN = $pdo->query($sql);
}

catch (PDOException $e)
{
  $error = 'Error fecthing employee ssn numbers: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $employeeSSN->fetch())
{
  $ssns[] = $row['ssn'];
}

/*We will need to include our own departments.html.php page in order to add a product */

include 'departments.html.php';