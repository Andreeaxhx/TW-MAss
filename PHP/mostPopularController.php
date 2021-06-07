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