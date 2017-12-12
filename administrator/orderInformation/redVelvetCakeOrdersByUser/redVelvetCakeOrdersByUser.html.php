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
      <p>Red Velvet Cake Orders By User:</p>

          <table>
            <tr>
              <th>User ID</th>
            </tr>
  
            <tr><?php foreach ($userIDs as $userID) : ?>
              <td> <?php echo $userID?></td>   
            </tr>
                <?php endforeach; ?>
          </table>
  
          <table>
            <tr>
              <th>First Name</th>
            </tr>
  
            <tr> <?php foreach ($firstNames as $firstName) : ?>
              <td> <?php echo $firstName?> </td>
            </tr>
                <?php endforeach; ?>
          </table>
  
           <table>
            <tr>
              <th>Last Name</th>
            </tr>
  
            <tr> <?php foreach ($lastNames as $lastName) : ?>
              <td> <?php echo $lastName?> </td>
            </tr>
                <?php endforeach; ?>
          </table>

           
            <br> <br> <br> <br><br><br>
            <p><a href="../../index.php">Back to Administrator Homepage</a></p>

  </body>
</html>