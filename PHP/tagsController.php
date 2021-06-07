<?php
/**
 * tagsController
 */
function insertTag($connection, int $catId, string $tagName)
{

    $tagName = mysqli_real_escape_string($connection,$tagName);

    if(mysqli_num_rows(mysqli_query($connection,"SELECT tagName FROM tagData WHERE tagName = '".addslashes($tagName)."' AND tagCat = '$catId'")) < 1)
    {
        $run  = mysqli_query($connection,"INSERT into tagData VALUES (DEFAULT,'$catId','".addslashes($tagName)."','".date("Y-m-d H:i:s")."')");
        if($run)
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
            "error" => "Tag-ul a fost deja specificat!"
        );
    }
}
function createTag($connection,int $catId, string $tagName)
{
    /**
     * Making sure tags are not empty
     */

    if(!empty($tagName) && is_int($catId))
    {
        $catId = mysqli_real_escape_string($connection,$catId);

        $tagName = str_replace(" ","",$tagName);
        if(explode(",",$tagName) && count($tagName))
        {
            $tagName = explode(",",$tagName);
            $tagName = array_filter($tagName);


            foreach($tagName as $tag)
            {
                $insert = insertTag($connection, $catId, $tag);
            }

            return $insert;
        }
        else
        {
            /**
             * checking if tags do not exist aleady
             */

            $insert = insertTag($connection, $catId, $tagName);

            return $insert;
        }


    }
    else
    {
        return array("result" => false, "error" => "Este obligatoriu sa introduci un tag.");
    }
}

function createTagBatchCategories($connection, array $catIds,string $tagName)
{
    if($catIds && !empty($tagName))
    {
        foreach($catIds as $catId)
        {
            $insertTags[] = createTag($connection,$catId,$tagName);
        }

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
            "error" => "Nu s-au specificat categorii multiple sau un nume de tag."
        );
    }
}

// function updateTag($connection, int $tagId, string $tagName, int $catId)


function removeTag($connection, int $tagId)
{
    if(is_int($tagId))
    {
        if(mysqli_num_rows(mysqli_query($connection,"SELECT id from tagData WHERE id='$tagId' limit 1")) == 1)
        {
            $run = mysqli_query($connection,"DELETE from tagData WHERE id = '$tagId'");
            if($run)
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
                "error"=> "Nici un ID de tag gasit in baza de date!"
            );
        }
    }
    else
    {
        return array
        (
            "result" => false,
            "error" => "Nici un ID de tag specificat!"
        );
    }
}

function retrieveTags($connection)
{
    $get = mysqli_query($connection,"SELECT * FROM tagData ORDER by id ASC");
    if(mysqli_num_rows($get))
    {
        while($a  = mysqli_fetch_assoc($get))
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