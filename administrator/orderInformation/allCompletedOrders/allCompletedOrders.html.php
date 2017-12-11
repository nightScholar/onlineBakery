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
      <p>All Completed Orders:</p>

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
              <th>First Name</th>
            </tr>
  
            <tr> <?php foreach ($fisrtNames as $firstName) : ?>
              <td> <?php echo $firstName?> </td>
            </tr>
                <?php endforeach; ?>
          </table>
  
          <table>
            <tr>
              <th>Last Name</th>
            </tr>
  
              <tr><?php foreach ($lastNames as $lastName) : ?>
                <td> <?php echo $lastName?> </td>
              </tr>
                <?php endforeach; ?>
          </table>

           <table>
            <tr>
              <th>Address</th>
            </tr>
  
              <tr><?php foreach ($addresses as $deliveryAddress) : ?>
                <td> <?php echo $deliveryAddress?> </td>
              </tr>
                <?php endforeach; ?>
          </table>

           <table>
            <tr>
              <th>City</th>
            </tr>
  
              <tr><?php foreach ($cities as $deliveryCity) : ?>
                <td> <?php echo $deliveryCity?> </td>
              </tr>
                <?php endforeach; ?>
          </table>

           <table>
            <tr>
              <th>State</th>
            </tr>
  
              <tr><?php foreach ($states as $deliveryState) : ?>
                <td> <?php echo $deliveryState?> </td>
              </tr>
                <?php endforeach; ?>
          </table>

           <table>
            <tr>
              <th>Zipcode</th>
            </tr>
  
              <tr><?php foreach ($zipcodes as $deliveryZipcode) : ?>
                <td> <?php echo $deliveryZipcode?> </td>
              </tr>
                <?php endforeach; ?>
          </table>

           <table>
            <tr>
              <th>Order Status</th>
            </tr>
  
              <tr><?php foreach ($orderStatuses as $orderStatus) : ?>
                <td> <?php echo $orderStatus?> </td>
              </tr>
                <?php endforeach; ?>
          </table>

           <table>
            <tr>
              <th>Delivery Option</th>
            </tr>
  
              <tr><?php foreach ($deliveryOptions as $deliveryOption) : ?>
                <td> <?php echo $deliveryOption?> </td>
              </tr>
                <?php endforeach; ?>
          </table>
           
            <br> <br> <br> <br> <br>
            <p><a href="../../index.php">Back to Administrator Homepage</a></p>

  </body>
</html>