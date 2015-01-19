<?php

$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);

	
	$stmt=$dbh->prepare("DELETE FROM users WHERE user_id = :id");
	
	$stmt->bindValue(':id', $_GET['id'],  PDO::PARAM_INT);
	
	$stmt->execute();

	header('Location: index.php');
	die();
?>