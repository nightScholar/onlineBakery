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
  $ProductName = $_GET['ProductName'];
  $sql = ("DELETE FROM product_t WHERE productDescription = '$ProductName'");
  $s = $pdo->prepare($sql);
  $s->execute();
}
catch (PDOException $e)
{
  $output = 'Error updating the product list: ' . $e->getMessage();
  include 'output.html.php';
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Products Added</title>

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

  </head>
  <body>

    <p>The following product has been deleted from the database. See detials below:</p>

    <table>
      <tr>
        <th>Product Name</th>
      </tr>
      <tr>
        <td class="text"><?php echo $ProductName?></td>
      </tr>
    </table>

    <br>
     <a href="../index.php">Back to Administrator Homepage</a>

  </body>
</html>