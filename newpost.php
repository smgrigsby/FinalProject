<?php 
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);

	$post_type=$_POST['ptype'];

	$sql="INSERT INTO posts (post_type) VALUES ('$post_type')");
	$dhb->query($sql);
	// $stmt->bindValue(':post_type', $post_type);
	// $stmt->execute();


	// $stmt=$dbh->prepare("INSERT INTO posts (post_type) VALUES (:ptype)");
	
	// $stmt->bindValue(':ptype', $_POST['ptype'],  PDO::PARAM_INT);
	
	// $stmt->execute();

	header('Location: index.php');
	die();
                    
	?>