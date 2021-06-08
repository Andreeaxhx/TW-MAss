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
    <?php include('../PHP/productLikesController.php');?>
    <?php include('../PHP/mostPopularController.php');?>
    <?php include('../PHP/recommendMeController.php');?>


        <?php
        /**
         * Like and unLike functionality
         */
        $userId = $_SESSION["user_id"];

        if(isset($_GET["like"]) && isset($_GET["product_id"]))
        {
            $productId = rawurldecode($_GET["product_id"]);
            $like = likeProduct($db, $userId, $productId);
            if($like["result"])
            {
                header("Location:". $_SERVER["PHP_SELF"]);
            }
            else
            {
                echo $like["error"];
            }
        }

        if(isset($_GET["unlike"]) && isset($_GET["product_id"]))
        {
            $productId = rawurldecode($_GET["product_id"]);
            $unlike = unLikeProduct($db, $userId, $productId);
            if($unlike["result"])
            {
                header("Location:". $_SERVER["PHP_SELF"]);
            }
            else
            {
                echo $unlike["error"];
            }
        }
        ?>
    </header>

    <section>
        <br/>
        

     <!-- Ajax function -->
    <script>
        function displayCat(str, user_id) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("response").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../PHP/displayProducts.php?id=" + str + "&user_id=" + user_id, true);
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
        function displayMostPopular() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("response").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../PHP/topPopularProducts.php" , true);
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
            <button type="button"  onclick="displayCat(<?php echo $catId; ?>,<?php echo $userId; ?>)"><?=$catName?></button>
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
        <button type="button" onclick="displayMostPopular()">Most popular</button>

        <form action="products.php" method="POST">
            <select name="order">
                <option value="createdAt">Newest</option>
                <option value="productPrice">Price</option>
                <option value="popular" disabled selected>Popular</option>
            </select>
            <select name="type">
                <option value="pdf">PDF</option>
                <option value="html">HTML</option>
            </select>
            <input type="submit" name="submit-btn" value="Choose options">
        </form>

      <br><br>
      <div id="response"></div>

        <br/>
        <h2 style="text-align: center;">Recommendations</h2>
        <?php

        $data = recommendMe($db,$_SESSION["user_id"]);

        if($data["result"])
        {
            /**
             * Loop through found products
             */
            if($data["products"])
            {
                echo "<div class='row'>";
                foreach($data["products"] as $p)
                {
                    ?>
                    <div class="column">
                        <figure class="products">
                            <img class="products" style="object-fit: contain; width: 320px; height: 320px;" src="../PHP/uploads/<?php echo $p["fileName"];?>" alt="fdt">
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
                echo "</div>";
            }
            else
            {
                echo "No products found!<br/>";
            }

            ?>

            <h2 style="text-align: center;">Advices</h2>
            <?php
            /**
             * Loop through found advices
             */
            if($data["advices"])
            {
                //echo $data["advices"][0];
                foreach($data["advices"][0] as $a)
                {
                    echo "<div class='row'>";
                    ?>
                    <div class="column">
                        <hr/>
                        <?php echo $a;?>
                        <hr/>
                    </div>
                    <?php
                    echo "</div>";
                }
            }
            else
            {
                echo "No advices found! <br/>";
            }
        }
        else
        {
            echo "You either forgot to set your prefferences or there is not data in the database!";
        }

        ?>

    </section>
    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>