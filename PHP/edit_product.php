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
        <?php include('../PHP/tagsController.php');?>
        <?php include('../PHP/tagCategoryController.php');?>
        <?php include('../PHP/productCategoryController.php');?>
        <?php include('../PHP/productsController.php');?>
        <!-- add the product -->
        <?php
            if(isset($_POST["updateProduct"]))
            {
                $productTitle = $_POST["productTitle"];
                $catId = $_POST["catId"];
                $productTags = $_POST["productTags"];
                $productDesc = $_POST["productDesc"];
                $productPrice = $_POST["productPrice"];
                $productId = $_POST["productId"];

                $updateProduct = updateProduct($db ,$productId, $productTitle,$productDesc,$productPrice,$productTags,$catId);

                if($updateProduct["result"])
                {
                    header("Location:manage_products.php");
                }
                else
                {
                    echo $updateProduct["error"];
                }
            }

        /**
         * remove product , tags and images
         */

        if(isset($_GET["remove"]) && !empty($_GET["remove"]))
        {
            $remove = removeProduct($db,$_GET["remove"]);

            if($remove["result"])
            {
                header("Location: ".$_SERVER["PHP_SELF"]);
            }
            else
            {
                echo $remove["error"];
            }
        }
        ?>
    </header>
    
    <section id="showcase">
        <?php
            if($_SESSION["rank"] == "admin")
            {
                ?>
        <div style="width: 75%; display: block; margin:auto; padding-top: 1%;">
            <?php
            if(isset($_GET["id"]))
            {
                $id = rawurldecode($_GET["id"]);
                $p = returnProductData($db,$id);
                if($p)
                {
                    ?>
                        <h2>Edit product</h2>
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="productId" value="<?php echo $id;?>">
                        <div>
                            <div>
                                <label>Product Title</label>
                                <input type="text" placeholder="Nail polish" value="<?php echo $p["productTitle"];?>" required="" name="productTitle">
                            </div>
                            <div>
                                <label>Description</label>
                                <textarea name="productDesc" placeholder="Type some stuff here..." required=""><?php echo $p["productDescription"];?></textarea>
                            </div>
                            <div>
                                <label>Price</label>
                                <input type="number" step="0.01" required="" placeholder="14.3" value="<?php echo $p["productPrice"];?>" name="productPrice">
                            </div>
                            <div>
                                <label>Category</label>
                                <select name="catId" required="">
                                    <option value="" selected="" disabled="">Pick your choice</option>
                                    <?php
                                    $categories = retrieveProductCategories($db);
                                    if($categories)
                                    {
                                        foreach($categories as $cat)
                                        {
                                            if($p["catId"] == $cat["id"])
                                            {
                                                echo '<option selected="" value="'.$cat["id"].'">'.$cat["catName"].'</option>';
                                            }
                                            else
                                            {
                                                echo '<option value="'.$cat["id"].'">'.$cat["catName"].'</option>';
                                            }

                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label>Tags</label>
                                <select name="productTags[]" required="" multiple="" style="height: 275px;">
                                    <?php
                                    $tags = retrieveTags($db);
                                    if($tags)
                                    {

                                        foreach($tags as $tag)
                                        {
                                            if(isSelectedTag($db,$p["id"],$tag["id"]))
                                            {
                                                echo '<option selected="" value="'.$tag["id"].'">['.retrieveCategoryName($db,$tag["tagCat"]).'] #'.$tag["tagName"].'</option>';
                                            }
                                            else
                                            {
                                                echo '<option value="'.$tag["id"].'">['.retrieveCategoryName($db,$tag["tagCat"]).'] #'.$tag["tagName"].'</option>';
                                            }

                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label>Image</label>
                                <p style="text-align: left !important;"><img src="../PHP/uploads/<?php echo $p["fileName"];?>" style="height: 75px; width: 75px; object-fit:contain;"></p>
                                <input type="file" name="product_image" accept="image/*">
                            </div>
                            <div>
                                <button type="submit" name="updateProduct">Save product</button>
                            </div>
                        </div>
                    </form>
                    <?php
                }
                else
                {
                    header("Location: manage_products.php");
                }
            }

            ?>
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