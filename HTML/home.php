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


    <section id="showcase">
      <div class="container">

      <br>
        <h4>Our new beauty products: </h4>
        <br>

        <?php
          include '../bd/bd.php';
          $query = $db->query("select file_name from images order by uploaded_on desc");

          if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
              $imageURL = '../PHP/uploads/'. $row["file_name"];
        ?>
        <img height="320px" width="auto" src="<?=$imageURL;?>"/>
        <?php  }}?>
        
        <h1>News</h1>
        <p>We are constantly updating our content, in order for you to keep up with the latest trends in the beauty industry.</p>

        <div class="boxy">
          <img src="../pictures/back.jpg">
        </div>

        <h4>Our favorite eyeshadow palettes of 2021</h4>
        <ul>
          <li>1. Huda Beauty : Toffee Brown</li>
          <div class="boxpalettes">
            <img src="../pictures/toffee.jpg">
          </div>
          <li>2. Colourpop : Lizzie McGuire</li>
          <div class="boxpalettes">
            <img src="../pictures/lizzie.jpg">
          </div>
          <li>3. Urban Decay : Wild West</li>
          <div class="boxpalettes">
            <img src="../pictures/wildwest.jpg">
          </div>
        </ul>
      </div>
    </section>


    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>