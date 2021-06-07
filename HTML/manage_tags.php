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
      <?php include('../PHP/tagsController.php'); ?>
      <?php include('../PHP/tagCategoryController.php');?>
      <!-- tag actions -->
      <?php
      if(isset($_POST["addTag"]))
      {
          $tagName = $_POST["tagName"];
          $catIds = $_POST["catIds"];

          $run = createTagBatchCategories($db, $catIds, $tagName);
          if($run["result"])
          {
              header("Location:".$_SERVER["PHP_SELF"]);
          }
          else
          {
              echo $run["errors"];
          }
      }

      /**
       * Remove tags
       */

      if(isset($_GET["remove"]))
      {
          $tagId = $_GET["remove"];
          $run = removeTag($db,$tagId);

          if($run["result"])
          {
              header("Location:".$_SERVER["PHP_SELF"]);
          }
          else
          {
              echo $run["error"];
          }

      }
      ?>

       </header>
    
    <section id="showcase">
      <div style="width: 75%; display: block; margin:auto; padding-top: 1%;">
      <?php
            if($_SESSION["rank"] == "admin")
            {
                ?>
                
                    <h2>Manage Product Tags</h2>
                    <p>
                    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                        <div>
                            <label><b>Tag Name</b>:</label>
                            <input name="tagName" type="text" class="form-control form-control-sm" placeholder="Tag name without #. You can use multiple tags separated by comma..." required="">
                        </div>
                        <div>
                            <label><b>Category Name</b>:</label>
                            <select name="catIds[]" class="form-control form-control-sm" required="" multiple="">
                                <?php
                                $categories = retrieveTagCategories($db);
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
                            <button type="submit" name="addTag" class="btn btn-primary btn-sm">Add New</button>
                        </div>

                    </form>
                    </p>
                    <hr/>
                    <?php
                    $tags = retrieveTags($db);
                    if($tags)
                    {
                        ?>
                        <table id = "data-table">
                            <thead>
                            <tr>
                                <th>Nr. Crt.</th>
                                <th>Tag</th>
                                <th>Category</th>
                                <th>Creation Date</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            foreach($tags as $tag)
                            {
                                $tagId = $tag["id"];
                                $catName = retrieveCategoryName($db,$tag["tagCat"]);
                                $tagName = $tag["tagName"];
                                $createdAt  = $tag["createdAt"];

                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td>#<?php echo $tagName;?></td>
                                    <td><?php echo $catName;?></td>
                                    <td><?php echo $createdAt;?></td>
                                    <td><a href="<?php echo $_SERVER["PHP_SELF"];?>?remove=<?php echo $catId;?>">Remove</a></td>
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
                        echo "No records found.";
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