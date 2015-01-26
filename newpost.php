<?php 
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);

	
	$stmt=$dbh->prepare("INSERT INTO posts (post_type) VALUES (:ptype)");
	
	$stmt->bindValue(':ptype', $_POST['ptype'],  PDO::PARAM_INT);
	
	$stmt->execute();

	header('Location: index.php');
	die();
                    
	?>