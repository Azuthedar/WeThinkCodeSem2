<?php

include ('connect.php');

session_start();

$n_biography = $_GET['n_biography'];

$conn = Connect();
$st = $conn->prepare("SELECT * FROM `users` WHERE email = :email");
$st->bindParam(':email', $email);
$st->execute();
if ($st->rowCount() == 1)
{
	$nBio = $conn->prepare("UPDATE `users` SET `biography` = :n_biography");
	$nBio->bindParam('n:biography', $n_biography);
	$nBio->execute();
	header("refresh:0;url=account.php?bio=new");
}
else
{
	header("refresh:0;url=account.php?email=invalid");
}

?>