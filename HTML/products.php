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
    <link rel="stylesheet" href="../CSS/products.css">
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

    <section>

      <br><br>
      <?php
          include '../bd/bd.php';
          $query = $db->query("select fileName from products order by createdAt desc");

          if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
              $imageURL = '../PHP/uploads/'. $row["fileName"];
      ?>
        <img height="320px" width="auto" src="<?=$imageURL;?>"/>
      <?php  }}?>
    
      <div class="row">
        <div class="column">
          <figure class="products">
            <img class="products" src="../pictures/products/fdt_fenty.jpg" alt="fdt">
            <figcaption> Fenty Foundation  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/fdt_ysl.jpg" alt="fdt">
            <figcaption> YSL Foundation  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/fdt_benefit.jpg" alt="fdt">
            <figcaption> Benefit Foundation  </figcaption>
          </figure>
        </div>
       
        <div class="column">
          <figure class="products">
            <img class="products" src="../pictures/products/powder_dior.jpg" alt="powder">
            <figcaption> Dior <br> Powder  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/powder_toofaced.jpg" alt="powder">
            <figcaption> Too Faced Powder  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/powder_ysl.jpg" alt="powder">
            <figcaption> YSL Powder  </figcaption>
          </figure>
        </div>

        <div class="column">
          <figure class="products">
            <img class="products" src="../pictures/products/eyeshadow_anastasia.jpg" alt="eyeshadow">
            <figcaption> Anastasia Eyeshadow  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/eyeshadow_tarte.jpg" alt="eyeshadow">
            <figcaption> Tarte Eyeshadow  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/eyeshadow_zoeva.jpg" alt="eyeshadow">
            <figcaption> Zoeva Eyeshadow  </figcaption>
          </figure>
        </div>

        <div class="column">
          <figure class="products">
            <img class="products" src="../pictures/products/lipstick_anastasia.jpg" alt="fdt">
            <figcaption> Anastasia Lipstick  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/lipstick_givenchy.jpg" alt="fdt">
            <figcaption> Givenchy Lipstick  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/lipstick_ysl.jpg" alt="fdt">
            <figcaption> YSL Lipstick  </figcaption>
          </figure>
        </div>

        <div class="column">
          <figure class="products">
            <img class="products" src="../pictures/products/blush_dior.jpg" alt="fdt">
            <figcaption> Dior <br> Blush  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/blush_natasha.jpg" alt="fdt">
            <figcaption> Natasha Blush  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/blush_sephora.jpg" alt="fdt">
            <figcaption> Sephora Blush  </figcaption>
          </figure>
        </div>

        <div class="column">
          <figure class="products">
            <img class="products" src="../pictures/products/concealer_clinique.jpg" alt="fdt">
            <figcaption> Clinique Concealer  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/concealer_dior.jpg" alt="fdt">
            <figcaption> Dior Concealer  </figcaption>
          </figure><figure class="products">
            <img class="products" src="../pictures/products/concealer_zoeva.jpg" alt="fdt">
            <figcaption> Zoeva Concealer </figcaption>
          </figure>
        </div>
        </div>
      </div>

    </section>
    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>