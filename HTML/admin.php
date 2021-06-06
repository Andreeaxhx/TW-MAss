<?php include('../PHP/login_adminController.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MASS | Welcome</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
  </head>


  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Your virtual Beauty Assistant</h1>
        </div>
      </div>

      <!--navigation bar-->

      <?php include('./navbars/navbarLogedIn.php'); ?>
    </header>
    
    <section id="showcase">

      <?php
            if($_SESSION["rank"] == "admin")
            {
                ?>
                    <div style="padding-top: 1%; margin: auto; display: block;width: 75%;">
                        <p style="text-align: center;"><h3>Admin Panel</h3></p>
                        <p style="text-align: center; font-size: 16px;">
                           Sectiuni administrare:
                     
                            <ul>
                            <li><a href="manage_products.php">Products</a></li>
                            <li><a href="manage_tags.php">Product tags</a></li>
                            <li><a href="manage_tag_categories.php">Tag categories</a></li>
                            <li><a href="manage_product_categories.php">Product categories</a></li>
                            <li><a href="manage_advice.php">Advice</a></li>
                            </ul>

                        </p>
                    </div>
                <?php
            }
            else
            {
                header("Location: login.php");
            }
        ?>

      </section>

    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>