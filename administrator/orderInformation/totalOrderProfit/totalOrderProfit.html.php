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
      <p>Total Order Profits Breakdown:</p>

          <table>
            <tr>
              <th>Order Total</th>
            </tr>
  
            <tr><?php foreach ($orderTotals as $OrderTotal) : ?>
              <td> $<?php echo $OrderTotal?></td>   
            </tr>
                <?php endforeach; ?>
          </table>
  
          <table>
            <tr>
              <th>Material Cost</th>
            </tr>
  
            <tr> <?php foreach ($materialCosts as $MaterialCost) : ?>
              <td> $<?php echo $MaterialCost?> </td>
            </tr>
                <?php endforeach; ?>
          </table>
  
           <table>
            <tr>
              <th>Total Profit</th>
            </tr>
  
            <tr> <?php foreach ($totalProfits as $TotalProfit) : ?>
              <td> $<?php echo $TotalProfit?> </td>
            </tr>
                <?php endforeach; ?>
          </table>
           
            <br> <br> <br> <br>
            <p><a href="../../index.php">Back to Administrator Homepage</a></p>

  </body>
</html>