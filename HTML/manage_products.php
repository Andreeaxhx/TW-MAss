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
          if(isset($_POST["saveProduct"]))
          {
              $productTitle = $_POST["productTitle"];
              $catId = $_POST["catId"];
              $productTags = $_POST["productTags"];
              $productDesc = $_POST["productDesc"];
              $productPrice = $_POST["productPrice"];

              $saveProduct = createProduct($db,$productTitle,$productDesc,$productPrice,$productTags,$catId);

              if($saveProduct["result"])
              {
                  header("Location:".$_SERVER["PHP_SELF"]);
              }
              else
              {
                  echo $saveProduct["error"];
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
            <h2>Manage Products</h2>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
            <div>
                <div>
                    <label>Product Title</label>
                    <input type="text" placeholder="Nail polish" required="" name="productTitle">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="productDesc" placeholder="Type some stuff here..." required=""></textarea>
                </div>
                <div>
                    <label>Price</label>
                    <input type="number" step="0.01" required="" placeholder="14.3" name="productPrice">
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
                                echo '<option value="'.$cat["id"].'">'.$cat["catName"].'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label>Tags</label>
                    <select name="productTags[]" required="" multiple="">
                        <?php
                        $tags = retrieveTags($db);
                        if($tags)
                        {

                            foreach($tags as $tag)
                            {
                                echo '<option value="'.$tag["id"].'">['.retrieveCategoryName($db,$tag["tagCat"]).'] #'.$tag["tagName"].'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" required="" name="product_image" accept="image/*">
                </div>
                <div>
                    <button type="submit" name="saveProduct">Save product</button>
                </div>
            </div>
            </form>
            <hr/>

            <div>
                <?php
                $products = retrieveProducts($db);
                if($products)
                {
                    ?>
                    <table id="data-table">
                        <thead>
                        <tr>
                            <th>Nr. Crt.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Image</th>
                            <th>Created At</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach($products as $product)
                            {
                                ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><a href="edit_product.php?id=<?php echo $product["id"];?>"><?php echo $product["productTitle"];?></a></td>
                                <td><?php echo $product["productDescription"];?></td>
                                <td><?php echo $product["productPrice"];?></td>
                                <td><?php echo retrieveProductCategoryName($db,$product["catId"]);?></td>
                                <td style="max-width: 20%;"><?php echo $product["productTags"];?></td>
                                <td><img src="../PHP/uploads/<?php echo $product["fileName"];?>" style="height: 75px; width: 75px; object-fit:contain;"></td>
                                <td><?php echo $product["createdAt"];?></td>
                                <td><a href="<?php echo $_SERVER["PHP_SELF"];?>?remove=<?php echo $product["id"];?>">Remove</a></td>
                            </tr>
                               <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                }
                else
                {
                   echo "No data found!";
                }
                ?>
            </div>

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