<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Products</title>
        <!-- create Modal login out button -->
                  <button onclick='logout()' style="width:auto;">Log Out</a></button>
                  <script>
                    function logout(){
                      window.open('../logout.php',"_self");
                    }
                  </script>
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

  </body>
</html>

