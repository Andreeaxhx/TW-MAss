<?php


/**
 * User Tags Manipulation
 * expected dataset structure
 * id , userId, tagId, createdAt
 * table: userTags
 */

function setUserTags($connection, int $userId, array $tagsArray)
{
    if ($tagsArray && is_int($userId)) {
        $userId = mysqli_real_escape_string($connection, $userId);
        $emptyData = mysqli_query($connection, "DELETE from userTags WHERE userId = '$userId'");

        $run = "";
        foreach ($tagsArray as $tagId) {
            $tagId = mysqli_real_escape_string($connection, $tagId);

            $run .= "INSERT into userTags VALUES (DEFAULT, '$userId', '$tagId', '" . date("Y-m-d H:i:s") . "');";
        }

        $runQuery = mysqli_multi_query($connection, $run);
        if ($runQuery) {
            return array
            (
                "result" => true
            );

        } else {
            return array
            (
                "result" => false,
                "error" => mysqli_error($connection)
            );
        }

    } else {
        return array
        (
            "result" => false,
            "error" => "Id-ul userului sau tag-urile sunt nespecificate!"
    );
    }
}

function setUserAgeGender($connection, int $userId, int $age, string $gender)
{
    $checkUser = mysqli_query($connection, "SELECT id FROM `user` WHERE id = '$userId' LIMIT 1");
    if (mysqli_num_rows($checkUser) == 1) {
        $run = mysqli_query($connection, "UPDATE `user` SET age='$age', gender = '$gender' WHERE id = '$userId'");
        if ($run) {
            return array
            (
                "result" => true
            );
        } else {
            return array
            (
                "result" => false,
                "error" => mysqli_error($connection)
            );
        }
    } else {
        return array
        (
            "result" => false
        );
    }
}