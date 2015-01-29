<?php

$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);


	$stmt=$dbh->prepare("UPDATE users SET f_name=:f_name,l_name=:l_name, user_email=:user_email, bgcolor=:bgcolor
		WHERE user_id = :id");			
	
		$stmt->bindValue(':f_name', $_POST['fname'], PDO::PARAM_STR);
		$stmt->bindValue(':l_name', $_POST['lname'], PDO::PARAM_STR);
		$stmt->bindValue(':user_email', $_POST['email'], PDO::PARAM_STR);
		$stmt->bindValue(':bgcolor', $_POST['color'],  PDO::PARAM_STR);
		$stmt->bindValue(':id', $_SESSION['user_id'],  PDO::PARAM_INT);

		$stmt->execute();



header('Location: index.php');
die();
?>



