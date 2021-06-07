<?php

function createAdvice($connection, int $catId, string $adviceContents)
{
    $insert = mysqli_query($connection, "INSERT into adviceData VALUES (DEFAULT,'$catId','".addslashes($adviceContents)."','".date("Y-m-d H:i:s")."')");

    if($insert)
    {
        return array("result" =>true);
    }
    else
    {
        return array("result"=>false,"error" => mysqli_error($connection));
    }
}
function deleteAdvice($connection, int $id)
{
    if(mysqli_num_rows(mysqli_query($connection,"SELECT id FROM adviceData WHERE id = '$id' LIMIT 1")) == 1)
    {
        $remove = mysqli_query($connection, "DELETE from adviceData WHERE id = '$id'");
        if($remove)
        {
            return array("result" => true);
        }
        else
        {
            return array("result" => false, "error" => mysqli_error($con));
        }
    }
}

function returnAdvices($connection)
{
    $get = mysqli_query($connection, "SELECT * FROM adviceData order by createdAt DESC");
    if(mysqli_num_rows($get))
    {
        while($a = mysqli_fetch_assoc($get))
        {
            $data[] = $a;
        }

        return $data;
    }
    else
    {
        return null;
    }
}