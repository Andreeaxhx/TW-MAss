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

//register user


if(isset($_POST['register']))
{

if(isset($_POST['username'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);}

if(isset($_POST['email'])){
	$email = mysqli_real_escape_string($db, $_POST['email']);}

if(isset($_POST['password'])){
	$password = mysqli_real_escape_string($db, $_POST['password']);}


//form validation

if(empty($username)) {array_push($errors, "username is required");}
if(empty($email)) {array_push($errors, "email is required");}
if(empty($password)) {array_push($errors, "password is required");}

//check for existing username

$user_check = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$result = mysqli_query($db, $user_check);
$user = mysqli_fetch_assoc($result);

if ($user)
{
	if($user['username'] === $username){array_push($errors, "username already exists");}
	//if($user['email'] === $email){array_push($errors, "email already exists");}
}

//register the user

if(count($errors) == 0){
	$password_enc = md5($password); //encryption
	$query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password_enc');";
	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "you are now logged in";

	header('location: ../HTML/after_register.php');

}

	//session_destroy();
}
?>