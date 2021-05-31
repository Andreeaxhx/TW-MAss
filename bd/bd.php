<?php

require 'config.php';

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($db->connect_error){
    die('Database error:' . $conn->connect_error);
}

// $conn->query("SET NAMES utf8");
// $conn2->query("SET NAMES utf8");
?>