<?php

$email = $_GET['email'];
$n_email = $_GET['n_email'];
$password = $_GET['password'];
$n_password = $_GET['n_password'];
$firstname = $_GET['first_name'];
$n_firstname = $_GET['n_first_name'];
$lastname = $_GET['last_name'];
$n_lastname = $_GET['n_last_name'];
$n_biography = $_GET['n_biography'];

/*
function updateEmail()
{
	$conn = Connect();
	$st = $conn->prepare("SELECT * FROM `users` WHERE email = :email");
	$st->bindParam(':email', $email);
	$st->execute();
	if (st->rowCount() == 1)
	{
		$st3 = $conn->prepare("SELECT * FROM `users` WHERE email = :n_email");
		$st3->bindParam(':n_email', $email);
		if ($st3->rowCount() == 1)
		{
			header("refresh:0;url=account_ema.php?email=exists");
		}
		else
		{
			$st2 = $conn->prepare("UPDATE `users` SET `email` = :n_email WHERE `email`=:email");
			st2->bindParam(':email', $email);
			st2->bindParam(':n_email', $n_email);
			$st2->execute();
			header("refresh:0;url=account.php?email=new");
		}
	}
	else
	{
		header("refresh:0;url=account_ema.php?email=invalid");
	}
	
}
*/

/*
function updateUser()
{
	$conn = Connect();
	$st = $conn->prepare("SELECT * FROM `users` WHERE email = :email");
	$st->bindParam(':email', $email);
	$st->execute();
	if (st->rowCount() == 1)
	{
		$passt = $conn->prepare("SELECT * FROM `users` WHERE password = :password");
		$passt->bindParam(':password', $password);
		$passt->execute();
		if ($passt->rowCount() == 1)
		{
			// FIRST NAME
			if ($n_firstname == "")
			{
				$newNameSt = $conn->prepare("SELECT * FROM `users` WHERE `first_name` = :n_firstname");
				$newNameSt->bindParam(':n_firstname', $firstname);
				$newNameSt->execute();
			}
			else
			{
				$newNameSt = $conn->prepare("UPDATE `users` SET `first_name` = :n_firstname WHERE `email` = :email");
				$newNameSt->bindParam(':n_firstname', $n_firstname);
				$newNameSt->bindParam(':email', $email);
				$newNameSt->execute();
			}
			
			// LAST NAME
			if ($n_lastname == "")
			{
				$newLNameSt = $conn->prepare("SELECT * FROM `users` WHERE `last_name` = :n_lastname");
				$newLNameSt->bindParam(':n_lastname', $lastname);
				$newLNameSt->execute();
			}
			else
			{
				$newLNameSt = $conn->prepare("UPDATE `users` SET `first_name` = :n_lastname WHERE `email` = :email");
				$newLNameSt->bindParam(':n_lastname', $n_lastname);
				$newLNameSt->bindParam(':email', $email);
				$newLNameSt->execute();
			}
		}
		else
		{
			header("refresh:0;url=account_ema.php?password=invalid");
		}
	}
	else
	{
		header("refresh:0;url=account_ema.php?email=invalid");
	}
	
}
*/
/*

function updatePassword()
{
	$conn = Connect();
	$st = $conn->prepare("SELECT * FROM `users` WHERE email = :email");
	$st->bindParam(':email', $email);
	$st->execute();
	if (st->rowCount() == 1)
	{
		$passtd = $conn->prepare("SELECT * FROM `users` WHERE password = :password");
		$passtd->bindParam(':password', $password);
		$passtd->execute();
		if ($passtd->rowCount() == 1)
		{
			if ($n_password == "")
			{
				header("refresh:0;url=account_cp.php?password=none");
			}
			else
			{
				$npSt = $conn->prepare("UPDATE `users` SET :password = :n_password WHERE `password` = :password");
				$npSt->bindParam(':password', $password);
				$npSt->bindParam(':n_password', $n_password);
				$npSt->execute();
			}
		}
	}
	else
	{
		header("refresh:0;url=account_ema.php?email=invalid");
	}
	
}
*/

/*
function updateBiography()
{
	$conn = Connect();
	$st = $conn->prepare("SELECT * FROM `users` WHERE email = :email");
	$st->bindParam(':email', $email);
	$st->execute();
	if (st->rowCount() == 1)
	{
		$st3 = $conn->prepare("SELECT * FROM `users` WHERE email = :n_email");
		$st3->bindParam(':n_email', $email);
		if ($st3->rowCount() == 1)
		{
			header("refresh:0;url=account_ema.php?email=exists");
		}
		else
		{
			$st2 = $conn->prepare("UPDATE `users` SET `email` = :n_email WHERE `email`=:email");
			st2->bindParam(':email', $email);
			st2->bindParam(':n_email', $n_email);
			$st2->execute();
			header("refresh:0;url=account.php?email=new");
		}
	}
	else
	{
		header("refresh:0;url=account_ema.php?email=invalid");
	}
	
}
*/

?>