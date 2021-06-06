<?php
include('../PHP/start_session.php');
include('../bd/bd.php');
include('../PHP/productsController.php');
include('../PHP/productLikesController.php');
include('../PHP/mostPopularController.php');
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
          if(isset($_POST["user_id"])){
            $userId = $_SESSION["user_id"];}

          $products = retrieveProducts($db);
          if($products)
          {
              ?>
              <div class="row">
                  <?php
                  foreach($products as $p)
                  {
                      ?>
                      <div class="column">
                          <figure class="products">
                              <img class="products" style="object-fit: contain; width: 320px; height: 320px;" src="../PHP/uploads/<?php echo $p["fileName"];?>" alt="product">
                              <figcaption>
                                  <?php echo $p["productTitle"];?>
                                  <br>
                                  <?php echo $p["catName"];?>
                                  <br/>
                                  <?php
                                  $likes = countLikes($db, $p["id"]);
                                  ?>
                                  [<b><?php echo $likes;?></b>]
                                  <?php
                                  if(hasLike($db,$userId, $p["id"]))
                                  {


                                      ?>
                                      <a href="<?php echo $_SERVER["PHP_SELF"];?>?unlike&product_id=<?php echo $p["id"];?>">Unlike</a>
                                      <?php
                                  }
                                  else
                                  {
                                      ?>
                                      <a href="<?php echo $_SERVER["PHP_SELF"];?>?like&product_id=<?php echo $p["id"];?>">Like</a>
                                      <?php
                                  }
                                  ?>
                              </figcaption>
                          </figure>
                      </div>
                    <?php
                  }
                  ?>
              </div>
              <?php
          }

          ?>

<!--        <?php
          $query = $db->query("select file_name from images order by uploaded_on desc");

          if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
              $imageURL = '../PHP/uploads/'. $row["file_name"];
        ?>
        <img height="320px" width="auto" src="<?=$imageURL;?>"/>
        <?php  }}?>
        
        -->




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