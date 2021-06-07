<?php
/**
 *
 * TagCategoriesManipulation
 * expected dataset structure
 * id, catName, catParent, createdAt
 * table name: tagCategories
 */

function createTagCategory($connection, string $catName, string $catParent = "")
{
    if(!empty($catName))
    {

        $catName = mysqli_real_escape_string($connection,$catName);

        $catParent = $catParent ? $catParent : 0 ;

        if(mysqli_num_rows(mysqli_query($connection,"SELECT id FROM tagCategories WHERE catName = '".addslashes($catName)."'")) < 1)
        {
            $run = mysqli_query($connection,"INSERT into tagCategories VALUES (DEFAULT,'".addslashes($catName)."', '$catParent', '".date("Y-m-d H:i:s")."')");
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
                "result"  => false,
                "error" => "Exista deja o categorie cu numele introdus!"
            );
        }

    }
    else
    {
        return array
        (
            "result" => false,
            "error" => "Nici un nume de categorie introdusa"
        );
    }
}

// function updateTagCategory($connection, int $catId, string $catName, string $catParent)


function deleteTagCategory($connection, int $catId)
{
    if(is_int($catId))
    {
        if(mysqli_num_rows(mysqli_query($connection, "SELECT id FROM tagCategories WHERE id = '$catId' LIMIT 1")) == 1)
        {
            $run = mysqli_query($connection , "DELETE from tagCategories WHERE id = '$catId'");
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
                "error"  => "Nu s-a gasit nici o categorie in baza id-ului specificat!"
            );
        }
    }
    else
    {
        return array
        (
            "result" => false,
            "error"  => "Nici un ID de categorie specificat!"
        );
    }
}

function retrieveTagCategories($connection)
{
    $get = mysqli_query($connection,"SELECT * from tagCategories ORDER by id ASC");
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

function retrieveCategoryName($connection, int $catId)
{

    $get = mysqli_query($connection, "SELECT catName FROM tagCategories WHERE id = '$catId' LIMIT 1");

        if(mysqli_num_rows($get) == 1)
        {
            $a = mysqli_fetch_assoc($get);
            return $a["catName"];
        }
        else
        {
            return "N/A";
        }

}