<?php 
//include 'config.php';
require '../bd/bd.php';
$status_msg = '';
$backlink = '<a href = "./"> go back </a>';
$targetdir = "uploads/";
$filename = basename($_FILES["file"]["name"]);
$target_file_path = $targetdir . $filename;
$filetype = pathinfo($target_file_path, PATHINFO_EXTENSION);

if(isset($_POST['attributes'])){
	$attributes = mysqli_real_escape_string($db, $_POST['attributes']);}

echo $attributes;
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

	//upload process
	$allow_types = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
	if(!file_exists($target_file_path)){
		if(in_array($filetype, $allow_types)){
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_path)){
				$insert = $db->query("INSERT into images(file_name, uploaded_on, attributes) 
					VALUES ('". $filename ."', NOW(), '$attributes');");
				if($insert) {$status_msg = "the file has been uploaded";}
				else {$status_msg = "file upload failed". $backlink;}
			} else {$status_msg = "sorry, there was an error uploading the file". $backlink;}
		}else{$status_msg = "sorry, only jpg etc are allowed";}

	} 
	else {
		$status_msg = "already exists". $backlink;
	}
}

header('location: ../HTML/admin_after_register.php');
//header('location: upload.php');
echo $status_msg;

?>