<?php
include('../PHP/start_session.php')
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable...">
    <meta name="keywords" content="andreea, delia, tudor">
    <meta name="author" content="Andreea, Delia, Tudor">
    <title>MASS | Welcome</title>
    <link rel="stylesheet" href="../CSS/style.css">
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

    <section id="boxes">
        <div class="container">
          <div class="box">
            <img src="../pictures/delia.jpg">
            <h3>Delia Stoica</h3>
          </div>
          <div class="box">
            <img src="../pictures/tudor.jpg">
            <h3>Tudor Vasilache</h3>
          </div>
          <div class="box">
            <img src="../pictures/andreea.jpg">
            <h3>Andreea Pădurariu</h3>
          </div>
        </div>
      </section>
    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>