<?php
//include '../bd/bd.php';
include('../PHP/start_session.php');
include('../PHP/makePDF.php');

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

    <!-- <form action="products.php"  method="POST">
      <input type="submit" value="Create a 1 PDF" name='submitBtn'>
    </form> -->

    <section>

    <!-- Ajax function -->
      <script>
      function displayCat(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../PHP/displayProducts.php?id=" + str, true);
        xmlhttp.send();
      }
      displayCat("18");

      function displayTops(tops) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../PHP/displayTop.php?order=" + tops, true);
        xmlhttp.send();
      }
      
      </script>
      <br>
      <!-- Create all the cat buttons -->
      <?php
        $query = $db->query("SELECT catName,id FROM productCategories");
        while($row = $query->fetch_assoc()){
          $catName = $row["catName"];
          $catId = $row["id"];
        ?>
          <button type="button" value=<?=$catId?> onclick="displayCat(value)"><?=$catName?></button>
        <?php
        }
        ?>
      <br>
      <?php
      
        $tops = array("Newest", "Product Price");
        $tops1 = array("createdAt", "productPrice");
        for($i=0; $i < count($tops); $i++)
        {
          ?>
          <button type="button" value=<?=$tops1[$i]?> onclick="displayTops(value)"><?=$tops[$i]?></button>
          <?php
        }

      ?>

        <form action="products.php" method="POST">
            <select name="order">
                <option value="" disabled selected>Order top by</option>
                <option value="createdAt">Newest</option>
                <option value="productPrice">Price</option>
            </select>
            <select name="type">
                <option value="" disabled selected>Order top by</option>
                <option value="pdf">PDF</option>
                <option value="html">HTML</option>
            </select>
            <input type="submit" name="submit-btn" value="Choose options">
        </form>

      <br><br>
      <div id="response"></div>

    </section>
    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>