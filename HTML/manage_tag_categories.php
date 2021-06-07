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
        <?php include('../PHP/tagCategoryController.php');?>

        <!--triggering database actions -->
        <?php
        if(isset($_POST["addCategory"]))
        {
            $catName = $_POST["catName"];
            $catParent = $_POST["catParent"];

            $run = createTagCategory($db,$catName,$catParent);
            if($run)
            {
                header("Location:". $_SERVER["PHP_SELF"]);
            }
        }

        if(isset($_GET["remove"]))
        {
            $catId = $_GET["remove"];
            $run = deleteTagCategory($db,$catId);
            if($run["result"])
            {
                header("Location:". $_SERVER["PHP_SELF"]);
            }
            else
            {
                echo $run["error"];
            }
        }

        ?>

       </header>
    
    <section id="showcase">

       <div style="width: 75%; display: block; margin:auto;">


        <?php
            if($_SESSION["rank"] == "admin")
            {
                ?>
                    <h2>Manage Tag Categories</h2>
                    <p>
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                    <div>
                        <label><b>Category Name</b>:</label>
                        <input name="catName" type="text" class="form-control form-control-sm" placeholder="Category name..." required="">
                    </div>
                    <div>
                        <label><b>Category Parent</b>:</label>
                        <select name="catParent" class="form-control form-control-sm" required="">
                            <option value="0">None / Parent Itself</option>
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
                    <div> <button type="submit" name="addCategory" class="btn btn-primary btn-sm">Add New</button></div>
                </form>
                </p>

                <hr/>
                <?php
                $dbCategories = retrieveTagCategories($db);
                if($dbCategories)
                {
                    ?>
                    <table id="data-table">
                        <thead>
                        <tr>
                            <th>Nr. Crt. </th>
                            <th>Category</th>
                            <th>Parent</th>
                            <th>Creation Date</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach($dbCategories as $dbCat)
                        {
                            $catId = $dbCat["id"];
                            $catName = $dbCat["catName"];
                            $catParent = retrieveCategoryName($db,$dbCat["catParent"]);
                            $createdAt = $dbCat["createdAt"];

                            ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $catName;?></td>
                                <td><?php echo $catParent;?></td>
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

                <?php
            }
            else
            {
                header("Location: login.php");
            }
        ?>
        </div>


    </section>



    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>