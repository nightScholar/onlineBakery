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
      <p>Largest Orders by Total Price:</p>

          <table>
            <tr>
              <th>Order ID</th>
            </tr>
  
            <tr><?php foreach ($orderIDs as $orderID) : ?>
              <td><?php echo $orderID?></td>   
            </tr>
                <?php endforeach; ?>
          </table>
  
          <table>
            <tr>
              <th>Order Total</th>
            </tr>
  
            <tr> <?php foreach ($totals as $total) : ?>
              <td> $<?php echo $total?> </td>
            </tr>
                <?php endforeach; ?>
          </table>
  
           
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            <p><a href="../../index.php">Back to Administrator Homepage</a></p>

  </body>
</html>