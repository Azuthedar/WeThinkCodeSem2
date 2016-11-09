<?php

include('connect.php');

session_start();

$targetDirectory = 'uploads/';
$targetFile = $targetDirectory . basename($_FILES['fileUpload']['name']);
$uploadOkay = 1;
$imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);
$token = bin2hex(openssl_random_pseudo_bytes(16));

if (isset($_POST['submit']))
{
	$check = getimagesize($_FILES['fileUpload']['tmp_name']);
	if ($check === FALSE)
	{
		echo '<script>alert("Invalid Image");</script>';
		return ;
	}
	if (file_exists($targetFile))
	{
		echo '<script>alert("Image already exists within the database");</script>';
		return ;
	}
	if ($imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "jpeg")
	{
		echo '<script>alert("File types allowed: PNG, JPG and JPEG.");</script>';
		return ;
	}
	if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $targetFile))
	{
		echo '<script>alert("File has successfully been uploaded.");</script>';
	}

	$conn = new Connect();
	$sql = $conn->prepare("INSERT INTO `images` (email, profile, picture1, picture2, picture3, picture4) VALUES (:email , :tokenpath, :tokenpath1, :tokenpath2, :tokenpath3, :tokenpath4)");
	$st = $conn->prepare("SELECT * FROM `images` WHERE `email` = :email");


}

?>