<?php

include ('../bd/bd.php');
include('../PHP/productLikesController.php');
include('../PHP/mostPopularController.php');
//include('../PHP/recommendMeController.php');
session_start();
$userId = $_SESSION["user_id"];

?>
<link rel="stylesheet" href="../CSS/productsController.css">
<h2 class='title'>Most Popular</h2>
<table id="t01">
        <tr>
        <?php
        $popular = generateRanking($db);
        
        if(count($popular))
        {
            echo '<div class="row">';
            $col = 0;
            foreach($popular as $pp)
            {
                if($col % 4 == 0){
            ?>
                </tr>
                <br>
                <tr>
            <?php
                }
            ?>

                <td>
                    <figure class="products">
                        <img height="300px" width="300px" src="../PHP/uploads/<?php echo $pp["fileName"];?>" alt="fdt">
                        <figcaption>
                            <?php echo $pp["productTitle"];?>
                            <br>
                            <?php echo $pp["catName"];?>
                            <br/>
                            <?php
                            $likes = countLikes($db, $pp["id"])
                                ?>
                            [<b><?php echo $likes;?></b>]
                            <?php
                            if(hasLike($db,$userId, $pp["id"]))
                            {
                                ?>
                                <a href="<?php echo $_SERVER["PHP_SELF"];?>?unlike&product_id=<?php echo $pp["id"];?>">Unlike</a>
                                <?php
                            }
                            else
                            {
                                ?>
                                <a href="<?php echo $_SERVER["PHP_SELF"];?>?like&product_id=<?php echo $pp["id"];?>">Like</a>
                                <?php
                            }
                            ?>
                        </figcaption>
                    </figure>
                <td>

            <?php
            $col++;
        }
            ?>
                </tr>
                </table>
            <?php
            
        }
        else
        {
            echo "Nothing to show right now!";
        }
        ?>