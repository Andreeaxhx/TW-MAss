<?php

session_start();
require '../bd/bd.php';
//initializarea variabilelor

$username = "";
$email = "";
$password = "";

$errors = array();
//conn to db

//$db = mysqli_connect('remotemysql.com', 'cL0nbtnGzn', 'Wxj7CaYFCi', 'cL0nbtnGzn') or die("could not connect");

//login

if(isset($_POST['login_user'])){

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if(empty($username)){
		array_push($errors, "username required");
	}
	if(empty($password)){
		array_push($errors, "password required");
	}

	if(count($errors) == 0){
		$password_enc = md5($password);
		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password_enc'";
		$results = mysqli_query($db, $query);

		if(mysqli_num_rows($results)){
			$result = mysqli_fetch_assoc($results);

			$_SESSION['user_id'] = $result["id"];
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "logged in successfully!";
			$_SESSION['rank'] = $result["rank"];

			header('location: ../HTML/after_register.php');
		}

		else{
			array_push($errors, "wrong username/ password!");
		}
	}
	//session_destroy();
}





?>