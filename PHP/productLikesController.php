<?php

function hasLike($connection, int $userId, int $productId)
{
    if(mysqli_num_rows(mysqli_query($connection ,"SELECT id FROM productLikes WHERE userId  = '$userId' AND productId = '$productId' LIMIT 1")) == 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function likeProduct($connection , int $userId, int $productId)
{
    if(hasLike($connection, $userId, $productId))
    {
        //
        return ;
    }
    else
    {
        $insert = mysqli_query($connection, "INSERT into productLikes VALUES (DEFAULT, '$userId','$productId', '".date("Y-m-d H:i:s")."')");
        if($insert)
        {
            return array("result" => true);
        }
        else
        {
            return array("result" => false, "error" => mysqli_error($connection));
        }
    }
}

function unLikeProduct($connection , int $userId, int $productId)
{
    if(hasLike($connection, $userId, $productId))
    {
        $remove = mysqli_query($connection ,"DELETE from productLikes WHERE userId = '$userId' and productId = '$productId'");

            if($remove)
            {
                return array("result" => true);
            }
            else
            {
                return array("result" => false, "error" => mysqli_error($connection));
            }
    }
    else
    {
        return ;
    }
}
