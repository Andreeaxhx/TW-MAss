<?php
/**
 * Handles methods for inserting
 * products
 */

function setProductTags($connection, int $productId, array $tagsArray)
{
    if($tagsArray && is_int($productId))
    {
        $productId = mysqli_real_escape_string($connection,$productId);
        $emptyData = mysqli_query($connection, "DELETE from productTags WHERE productId = '$productId'");

        $run = "";
        foreach($tagsArray as $tagId)
        {
            $tagId  = mysqli_real_escape_string($connection,$tagId);

            $run .= "INSERT into productTags VALUES (DEFAULT, '$productId', '$tagId', '".date("Y-m-d H:i:s")."');";
        }

        $runQuery = mysqli_multi_query($connection,$run);
        if($runQuery)
        {
            return array
            (
                "result" => true
            );

        }
        else
        {
            return array
            (
                "result" => false,
                "error" => mysqli_error($connection)
            );
        }

    }
    else
    {
        return array
        (
            "result" => false,
            "error" => "Id-ul produsului sau tag-urile sunt nespecificate!"
        );
    }
}

function createProduct($connection, string $productTitle,string $productDesc, string $productPrice,array $productTags, int $catId)
{

    if(mysqli_num_rows(mysqli_query($connection,"SELECT id FROM products WHERE productTitle = '".addslashes($productTitle)."' AND catId = '$catId'")) < 1)
    {
        /**
         * Upload file first
         */

        if(!empty($_FILES['product_image']))
        {
            $path = "../PHP/uploads/";
            $path = $path . basename( $_FILES['product_image']['name']);

            if(move_uploaded_file($_FILES['product_image']['tmp_name'], $path)) {
                $fileName = basename( $_FILES['product_image']['name']);
            } else{
                $fileName = "could_not_upload_file";
            }
        }

        $insertProduct = mysqli_query($connection ,
            "
                INSERT into products VALUES (DEFAULT,'$catId','".addslashes($productTitle)."','".addslashes($productDesc)."','".addslashes($productPrice)."','".addslashes($fileName)."','".date("Y-m-d H:i:s")."')
            ");
        if($insertProduct)
        {
            $productId = mysqli_insert_id($connection);

            /**
             * Insert product tags
             */

            $setTags = setProductTags($connection,$productId,$productTags);

                if($setTags["result"])
                {
                    return array("result" => true);
                }
                else
                {
                    return array
                    (
                        "result" => false,
                        "error" => $setTags["error"]
                    );
                }

        }
        else
        {
            return array
            (
                "result" => false,
                "error" => mysqli_error($connection)
            );
        }
    }
    else
    {
        return array
        (
            "result" => false,
            "error" => "Exista deja un produs cu titlul dat in categoria precizata!"
        );
    }

}

function updateProduct($connection, int $productId, string $productTitle,string $productDesc, string $productPrice, array $productTags, int $catId)
{
    if(mysqli_num_rows(mysqli_query($connection,"SELECT id FROM products WHERE id = '$productId' LIMIT 1")) == 1)
    {
        /**
         * Set another image if it is set
         */
        if(!empty($_FILES['product_image']) && isset($_FILES['product_image']))
        {
            $path = "../PHP/uploads/";
            $path = $path . basename( $_FILES['product_image']['name']);

            if(move_uploaded_file($_FILES['product_image']['tmp_name'], $path)) {
                $fileName = basename( $_FILES['product_image']['name']);
            } else{
                $fileName = "could_not_upload_file";
            }

            $updateQuery =
                "
                UPDATE products
                SET
                productTitle = '".addslashes($productTitle)."',
                productDescription = '".addslashes($productDesc)."',
                productPrice = '".addslashes($productPrice)."',
                fileName = '".addslashes($fileName)."',
                catId = '$catId'
                WHERE id = '$productId'
            ";
        }
        else
        {
            $updateQuery =
                "
                UPDATE products
                SET
                productTitle = '".addslashes($productTitle)."',
                productDescription = '".addslashes($productDesc)."',
                productPrice = '".addslashes($productPrice)."',
                catId = '$catId'
                WHERE id = '$productId'
            ";
        }



            $update = mysqli_query($connection,$updateQuery);
            if($update)
            {

                $updateTags = setProductTags($connection,$productId,$productTags);
                    if($updateTags["result"])
                    {
                        return array("result" => true);
                    }
                    else
                    {
                        return array
                        (
                            "result" => false,
                            "error" => $updateTags["error"]
                        );
                    }
            }
            else
            {
                return array
                (
                    "result" => false,
                    "error" => mysqli_error($connection)
                );
            }
    }
    else
    {
        return array
        (
            "result" => false,
            "error" => mysqli_error($connection)
        );
    }
}

function removeProduct($connection, int $productId)
{
    $get = mysqli_query($connection,"SELECT id,fileName FROM products WHERE id = '$productId' LIMIT 1");
    if(mysqli_num_rows($get) == 1) {

        $a = mysqli_fetch_assoc($get);
        $fileName = $a["fileName"];

        /**
         * delete upload
         */

        if(file_exists("../PHP/uploads/".$fileName))
        {
            unlink("../PHP/uploads/".$fileName);
        }


        $removeQueries = "DELETE from products WHERE id = '$productId';";
        $removeQueries .= "DELETE FROM productTags WHERE productId = '$productId';";
        $remove = mysqli_multi_query($connection, $removeQueries);

        if($remove)
        {
            return array
            (
                "result" => true
            );
        }
        else
        {
            return array("result" => false, "error" => mysqli_error($connection));
        }
    }
    else
    {
        return array("result" => false,"error" => "Nu s-a gasit nici un produs pentru id-ul spcificat!");
    }
}
function retrieveProductTags($connection, int $productId)
{
    $get = mysqli_query($connection, "
    Select
    tagData.tagName 
    FROM 
    productTags
    LEFT JOIN tagData on productTags.tagId = tagData.id
    WHERE productTags.productId  = '$productId'");
    if(mysqli_num_rows($get) > 0)
    {
        while($a = mysqli_fetch_assoc($get))
        {
            $tags[] = "<li>".$a["tagName"]."</li>";
        }

        $tags = array_filter($tags);
            $tags = implode("",$tags);
            $tags = "<ul>".$tags."</ul>";

        return $tags;

    }
    else
    {
        return "";
    }
}
function isSelectedTag($connection, int $productId, int $tagId)
{
    $get = mysqli_query($connection, "SELECT tagId FROM productTags WHERE productId = '$productId' AND tagId = '$tagId' LIMIT 1");
    if(mysqli_num_rows($get) == 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function retrieveProducts($connection)
{


    $get = mysqli_query($connection, "SELECT products.*, productCategories.catName FROM products LEFT JOIN productCategories ON products.catId = productCategories.id ORDER by createdAt DESC");

    if(mysqli_num_rows($get))
    {
        while($a = mysqli_fetch_assoc($get))
        {

            $data[] = array
            (
                "id" => $a["id"],
                "catId" => $a["catId"],
                "productTags" => retrieveProductTags($connection, $a["id"]),
                "productTitle" => $a["productTitle"],
                "productDescription" => $a["productDescription"],
                "productPrice" => $a["productPrice"],
                "fileName" => $a["fileName"],
                "catName" => $a["catName"],
                "createdAt" => $a["createdAt"]
            );
        }

        return $data;
    }
    else
    {
       return null;
    }

}

function returnProductData($connection, int $productId)
{
    $get   = mysqli_query($connection, "
    SELECT 
    products.*,
    productCategories.catName as catName
    FROM
    `products`
    LEFT JOIN productCategories on products.catId = productCategories.id
    WHERE products.id = '$productId' LIMIT 1");

    if(mysqli_num_rows($get) == 1)
    {
        $data = mysqli_fetch_assoc($get);
        return $data;
    }
    else
    {
        return array
        (
            "result" => false,
            "error" => mysqli_error($connection)
        );
    }

}


