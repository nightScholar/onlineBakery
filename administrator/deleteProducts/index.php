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


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Products</title>
  </head>
  <body>
    <p>Here are all the products in the database:</p>
    <?php foreach ($products as $productDescription): ?>
      <blockquote>
        <p>
          <?php echo htmlspecialchars($productDescription, ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </blockquote>
    <?php endforeach; ?>

    <section>
            
      <form action="delete_products.html.php" method="get">
    <br>
    <p>Choose a product from the dropdown to delete:</p>
      <div><label for="ProductName">Product Name:</label>
        <select name = "ProductName">
          <?php foreach ($products  as $productDescription): ?>
            <option value = "<?php echo $productDescription; ?>">
          <?php echo $productDescription; ?> 
            </option>
          <?php endforeach; ?>
        </select>
      </div>
          <br>
        <input type="submit" value="Delete Product">
      </form>
    <br>
    <a href="../index.php">Back to Administrator Homepage</a>
    </section>

  </body>
</html>