<html>
  <head>
    <style>
        table, th, td 
        { 
          border: 1px solid black;
          text-align: center;
        }
        table
        {
          display: inline-block;
          float: left;
        }
    </style>
  </head>
      <body>
      <p>Red Velvet Cake Orders:</p>

          <table>
            <tr>
              <th>Order Line ID</th>
            </tr>
  
            <tr><?php foreach ($orderLineIDs as $orderLineID) : ?>
              <td> <?php echo $orderLineID?></td>   
            </tr>
                <?php endforeach; ?>
          </table>
  
          <table>
            <tr>
              <th>Order ID</th>
            </tr>
  
            <tr> <?php foreach ($orderIDs as $orderID) : ?>
              <td> <?php echo $orderID?> </td>
            </tr>
                <?php endforeach; ?>
          </table>
  
           <table>
            <tr>
              <th>Product ID</th>
            </tr>
  
            <tr> <?php foreach ($productIDs as $productID) : ?>
              <td> <?php echo $productID?> </td>
            </tr>
                <?php endforeach; ?>
          </table>

            <table>
            <tr>
              <th>Quantity</th>
            </tr>
  
            <tr> <?php foreach ($quantity as $orderedQuantity) : ?>
              <td> <?php echo $orderedQuantity?> </td>
            </tr>
                <?php endforeach; ?>
          </table>
           
            <br> <br> <br> <br> <br> <br>
            <p><a href="../../index.php">Back to Administrator Homepage</a></p>

  </body>
</html>