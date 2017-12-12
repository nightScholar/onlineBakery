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
        #text
        {
          text-align: left;
        }
    </style>
  </head>
  <body>
    <!-- create Modal login out button -->
                  <button onclick='logout()' style="width:auto;">Log Out</a></button>
                  <script>
                    function logout(){
                      window.open('../logout.php',"_self");
                    }
                  </script>
      <p>Here is a list of the most ordered products:</p>

          <table>
            <tr>
              <th>Product ID</th>
            </tr>
  
            <tr><?php foreach ($productIDs as $productID) : ?>
              <td><?php echo $productID?></td>   
            </tr>
                <?php endforeach; ?>
          </table>
  
          <table>
            <tr>
              <th>Proudct Name</th>
            </tr>
  
            <tr> <?php foreach ($products as $productDescription) : ?>
              <td id="text"> <?php echo $productDescription?> </td>
            </tr>
                <?php endforeach; ?>
          </table>
  
          <table>
            <tr>
              <th>Total Ordered</th>
            </tr>
  
              <tr><?php foreach ($counts as $Total) : ?>
                <td> <?php echo $Total?> </td>
              </tr>
                <?php endforeach; ?>
          </table>

          <br><br><br>

          <p><a href="../index.php">Back to Administrator Homepage</a></p>

    </body>
</html>
 
   
  
 
  