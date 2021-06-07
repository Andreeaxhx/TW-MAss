<?php

function countLikes($connection , int $productId)
{
    $number = mysqli_num_rows(mysqli_query($connection, "SELECT id FROM productLikes WHERE productId = '$productId'"));
    return $number;
}


function returnProductInfo($connection, int $productId)
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

        return array
        (
            "result" => true,
            "data" => $data
        );

        return $data;

    }
    else
    {
        return array
        (
            "result" => false,

            "error" => "no product found for the given id"

            "error" => mysqli_error($connection)

        );
    }

}




function generateRanking($connection)
{
    $getLikes = mysqli_query($connection ,"SELECT DISTINCT productId FROM productLikes  GROUP by productId");
    if(mysqli_num_rows($getLikes))
    {
        while($a = mysqli_fetch_assoc($getLikes))
        {
            $ids[] = $a["productId"];
        }

        foreach($ids as $id)
        {
            $info = returnProductInfo($connection,$id);
            $likes = countLikes($connection,$id);

            if($info["result"]) {
                $popular[] = array
                (
                    "id" => $info["data"]["id"],
                    "productTitle" => $info["data"]["productTitle"],
                    "catName" => $info["data"]["catName"],
                    "fileName" => $info["data"]["fileName"],
                    "likes" => $likes
                );
            }
            else {
                $popular[] = null;
            }
            
        }
        
        return array_filter($popular);


            $popular[] = array
            (
                "id" => $info["id"],
                "productTitle" => $info["productTitle"],
                "catName" => $info["catName"],
                "fileName" => $info["fileName"],
                "likes" => $likes
            );
        }

        return $popular;

    }
    else
    {
        return null;
    }

}