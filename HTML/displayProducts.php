<link rel="stylesheet" href="../CSS/productsController.css">
<?php

    require '../bd/bd.php';

        $catID =(int) $_REQUEST['id'];
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