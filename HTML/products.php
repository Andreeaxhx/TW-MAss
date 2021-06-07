<?php
include('../PHP/start_session.php');
include('../PHP/makePDF.php');
include '../bd/bd.php';
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

    <form action="products.php"  method="POST">
      <input type="submit" value="Create a 1 PDF" name='submitBtn'>
    </form>

    <section>

    <!-- Ajax function -->
      <script>
      function loadDoc(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../HTML/displayProducts.php?id=" + str, true);
        xmlhttp.send();
      }
      loadDoc("18");
      </script>

      <!-- Create all the cat buttons -->
      <?php
        $query = $db->query("SELECT catName,id FROM productCategories");
        while($row = $query->fetch_assoc()){
          $catName = $row["catName"];
          $catId = $row["id"];
        ?>
          <button type="button" value=<?=$catId?> onclick="loadDoc(value)"><?=$catName?></button>
        <?php
        }
        ?>
      <br><br>
      <div id="response"></div>

    </section>
    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>