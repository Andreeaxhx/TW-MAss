<link rel="stylesheet" href="../CSS/productsController.css">
<?php

    require '../bd/bd.php';

        $order = $_REQUEST['order'];
        //$name = $_REQUEST['name'];
        echo $order;
        $query2 = $db->query("SELECT * FROM products ORDER BY $order LIMIT 10");
        if($query2->num_rows > 0){
            $col = 0;

            switch ($order) {
                case "createdAt":
                    $name = "newest";
                break;
                case "productPrice":
                    $name = "product price";
                  break;
                default:
                  echo "Your favorite color is neither red, blue, nor green!";
              }
            
            echo "<h1 class='title'> Top products ordered by ". $name ."<h1>";
            ?>
            <table id="t01" cellpadding="0">
                <tr>
                    <?php
                    while($row = $query2->fetch_assoc()){
                        $imageURL = '../PHP/uploads/'. $row["fileName"];
                        $productTitle = $row["productTitle"];
                        if($col % 3 == 0){
                            ?>
                            </tr>
                            <tr>
                                <!-- <br><br><br> -->
                            </tr>
                            <tr>
                    <?php
                            
                        }
                    ?>
                        <td>
                            <figure>
                                <img style="display:block;" width="400px" height="400px" src="<?=$imageURL;?>"/>
                                <figcaption class="caption">
                                    <?php echo "<p>" . (int)$col + 1 .". ". $productTitle . "<p>"?>
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