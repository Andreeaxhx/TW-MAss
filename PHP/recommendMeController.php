<?php

function returnCategoryAdvices($connection, int $catId)
{
    $get = mysqli_query($connection, "SELECT adviceContents FROM adviceData WHERE catId = '$catId' ORDER BY createdAt DESC");

    if(mysqli_num_rows($get))
    {
        while($a = mysqli_fetch_assoc($get))
        {
            $advices[] = $a["adviceContents"];
        }
    }
    else
    {
        $advices = null;
    }

    return $advices;
}
function recommendMe($connection, int $userId,int $results = 80)
{
    $query =
        "
            SELECT 
            productTags.productId 
            FROM 
            userTags
            LEFT JOIN productTags on userTags.tagId = productTags.tagId
            WHERE userTags.userId = '$userId'
            LIMIT $results
            
        ";

    $run  = mysqli_query($connection, $query);

    if(mysqli_num_rows($run) > 0)
    {

        while($data = mysqli_fetch_assoc($run))
        {
            $productIds[] = $data['productId'];
        }

        $productIds = array_unique($productIds);
        $productIds = array_filter($productIds);
        if(count($productIds) ) {
            foreach($productIds as $pId)
            {
                $get   = mysqli_query($connection, "
                SELECT 
                products.*,
                productCategories.catName as catName
                FROM
                `products`
                LEFT JOIN productCategories on products.catId = productCategories.id
                WHERE products.id = '$pId' LIMIT 1");

                if(mysqli_num_rows($get) == 1)
                {
                    $productData[] = mysqli_fetch_assoc($get);

                }
                else
                {
                    $productData[] = null;
                }

            }
            $productData = array_filter($productData);
            /**
         * capture categories for advices
         */

        foreach($productData as $p)
        {
            $catIds[] = $p["catId"];
        }

        $catIds = array_unique($catIds);

        foreach($catIds as $catId)
        {
            $advices[] = returnCategoryAdvices($connection, $catId);
        }

        return array
        (
            "result" => true,
            "products" => $productData,
            "advices"  => $advices
        );
        
        }
        else {
        return array("result" => false, "error" => "no product ids found for your prefferences");
        }

        
    }
    else
    {
        return array
        (
            "result" => false,
            "error" => "Nu s-au gasit asocieri intre taguri, utilizatori si produse."
        );
    }

}

