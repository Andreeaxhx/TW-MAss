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
        <?php include('../PHP/adviceController.php');?>
        <?php include('../PHP/productCategoryController.php');?>

        <!-- add advice-->
        <?php
            if(isset($_POST["addAdvice"]))
            {
                $adviceContents = $_POST["adviceContents"];
                $catId = $_POST["catId"];

                $add = createAdvice($db,$catId,$adviceContents);
                if($add["result"])
                {
                    header("Location:".$_SERVER["REQUEST_URI"]);
                }
                else
                {
                    echo $add["error"];
                }
            }

            if(isset($_GET["remove"]))
            {
                $id = rawurldecode($_GET["remove"]);
                $remove = deleteAdvice($db,$id);
                    if($remove["result"])
                    {
                        header("Location". $_SERVER["PHP_SELF"]);
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
                <h2>Manage Advices</h2>
                <div>
                    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                        <div>
                            <textarea name="adviceContents" placeholder="Type your advice here..." required=""></textarea>
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
                            <button type="submit" name="addAdvice">Add new advice</button>
                        </div>
                    </form>
                </div>
            <hr/>
            <div>
                <?php
                $advices = returnAdvices($db);
                if($advices)
                {
                    ?>
                    <table id="data-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Advice</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>#</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $i = 1;
                        foreach($advices as $a)
                        {
                            ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $a["adviceContents"];?></td>
                                <td><?php echo  retrieveProductCategoryName($db,$a["catId"]);?></td>
                                <td><?php echo $a["createdAt"];?></td>
                                <td><a href="<?php echo $_SERVER["PHP_SELF"];?>?remove=<?php echo $a["id"];?>">Remove</a></td>
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
                    echo "Nothing found in the database!";
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