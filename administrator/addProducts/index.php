
<!DOCTYPE HTML>
<!--
  Horizons by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
  <head>
    <title>No Sidebar - Horizons by TEMPLATED</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

    <style>
      table, th, td 
      {
          border: 1px solid black;
      }
    </style>
  </head>
  <body class="no-sidebar" id='about_background'>

    <!-- Header -->
      <div id="header">
        <div class="container">
            
          <!-- Logo -->
            <h1><a href="../index.php" id="logo">Add Products</a></h1>
          
          <!-- Nav -->
            <nav id="nav">
              <ul>
                <li><a href="../index.php">Administrator Home</a></li>
              </ul>
            </nav>

        </div>
      </div>

    <!-- Main -->
      <div id="main" class="wrapper style1">
        <div class="container">
          <section>
            <!--Once we have already checked to make sure the user is logged in and all our checks have passed, once
            the user hits the Submit Order button, a thank you page should pop up, thanking them for their order -->

            <!-- You may need to format this table a bit to put the information in it that you need, this should be the information
            that was pulled in from the shopping cart so the user can review what they ordered -->
            
            <form action="add_products.html.php" method="get">
              <div><label for="productID">Product ID:</label>
                <input type="number" name="productID" value="Product ID">
              </div>

              <div><label for="productDescription">Product Name:</label>
                <input type="text" name="productDescription" placeholder="Product Name">
              </div>

              <div><label for="productPrice">Product Price:</label>
                <input type="number" name="productPrice" value="Product Price">
              </div>

              <div><label for="number">Material Cost:</label>
                <input type="number" name="materialCost" value="Material Cost">
               </div>
               
               <br>

              <input type="submit" value="Add Product">
            </form>


          </section>
        </div>
      </div>

    <!-- Footer -->
      <div id="footer">
        <div class="container">

          <!-- Lists -->
            <div class="row">
              <div class="8u">
                <section>
                  <header class="major">
                    <h2 style="color:#FFA69E">Shawn's Bakery</h2>
                  </header>
                  <div class="row">
                    <section class="6u">
                      <ul class="default">
                        <li><a href="#">Like Us</a></li>
                        <li><a href="#">Leave Us a Comment</a></li>
                      </ul>
                    </section>
                  </div>
                </section>
              </div>
              <div class="4u">
                <section>
                  <ul class="contact">
                    <li>
                      <span class="address">Address</span>
                      <span>1234 S 25th St<br />Philadelphia, PA 19147</span>
                    </li>
                    <li>
                      <span class="mail">Mail</span>
                      <span><a href="#">TyreeLovesCoding@gmail.com</a></span>
                    </li>
                    <li>
                      <span class="phone">Phone</span>
                      <span>(234) 567-8990</span>
                    </li>
                  </ul> 
                </section>
              </div>
            </div>

          <!-- Copyright -->
            <div class="copyright">
              Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
            </div>

        </div>
      </div>

  </body>
</html>
