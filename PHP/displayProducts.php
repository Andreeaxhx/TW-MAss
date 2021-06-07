<link rel="stylesheet" href="../CSS/productsController.css">
<?php
    require '../bd/bd.php';
    include('../PHP/productLikesController.php');
    include('../PHP/mostPopularController.php');
    
        $catID =(int) $_REQUEST['id'];
        $userId = (int) $_REQUEST['user_id'];
        $query1 = $db->query("SELECT catName FROM productCategories WHERE id = '$catID'");
        $row = $query1->fetch_assoc();
        $catName = $row["catName"];
        $query2 = $db->query("SELECT * FROM products WHERE catId = '$catID'");
        if($query2->num_rows > 0){
            $col = 0;
            
            echo "<h1 class='title'>". $catName ."<h1>";
            
            ?>
            <table id="t01">
                <tr>
                    
            <?php
            while($row = $query2->fetch_assoc()){
                $imageURL = '../PHP/uploads/'. $row["fileName"];
                $productTitle = $row["productTitle"];
                $productPrice = $row["productPrice"];
                $productId = $row["id"];
                if($col % 4 == 0){
                    ?>
                    </tr>
                    <br>
                    <tr>
                    <?php
                    $col = 0;
                }
        ?>
                <td>
                    <figure>
                        <img height="300px" width="300px" src="<?=$imageURL;?>"/>
                        <figcaption class="caption">
                            <?php echo "<p>" . $productTitle . "<p>"?>

                            <?php echo "<p>" . $productPrice . "<p>"?>
                            <?php
                                $likes = countLikes($db, $productId);
                                ?>
                                [<b><?php echo $likes;?></b>]
                                <?php
                                if(hasLike($db,$userId, $productId))
                                {


                                    ?>
                                    <a href="products.php?unlike&product_id=<?php echo $productId;?>">Unlike</a>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <a href="products.php?like&product_id=<?php echo $productId;?>">Like</a>
                                    <?php
                                }
                                ?>
                        </figcaption>
                    </figure>
                </td>
        <?php  
                $col++;
            }
            ?>
            </tr>
            </table>
            <?php
        }
        else{
            echo "<h1 style='text-align: center'> We are sorry! It looks like there are no products available yet! <h1>";
        }

?>