<?php

session_start();
require '../bd/bd.php';
//initializarea variabilelor

$username = "";
$email = "";
$password = "";

$errors = array();

function checkIfExists($connection, string $username, string $email)
{


	$user_check = "SELECT * FROM user WHERE username = '$username' or email = '$email'";
	$result = mysqli_query($connection, $user_check);
	
	$user = mysqli_fetch_assoc($result);

	if ($user != "")
	{
		if($user['username'] === $username)
			{
				return array("result"=>false,"error" => "username already exists");
			}
		else
			{
				if($user['email'] === $email)
				{
					return array("result"=>false,"error" => "email already exists");
				}
			}
	}
	else{
		return array("result"=>true);

		}
}




//form validation

// if(empty($username)) {array_push($errors, "username is required");}
// if(empty($email)) {array_push($errors, "email is required");}
// if(empty($password)) {array_push($errors, "password is required");}

//check for existing username


//register the user
function registerUser($connection, string $username, string $email, string $password)
{
	$password_enc = md5($password); //encryption
	$query = "INSERT INTO user VALUES (DEFAULT, '$username', '$email', '$password_enc','user',NULL,NULL);";
	$insert = mysqli_query($connection, $query);



	if ($insert)
	{
		return array("result"=>true);
	}
	else
	{
		return array("result"=>false,"error" => mysqli_error($connection));
	}
	


	$_SESSION['user_id']  = mysqli_insert_id($connection);
	$_SESSION['username'] = $username;
	$_SESSION['rank'] = 'user';
	$_SESSION['success'] = "you are now logged in";

	header('location: ../HTML/after_register.php');


}

	//session_destroy();

?>