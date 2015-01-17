<?php
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);

$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$email=$_POST['email'];
$bgcolor=$_POST['color'];

	
		$stmt = $dbh->prepare("UPDATE users SET f_name=:f_name,
					l_name=:l_name,
					user_email=:user_email,
					bgcolor=:bgcolor
					WHERE user_id = $id");
		
		$stmt->bindParam(':f_name', $f_name, PDO::PARAM_STR);
		$stmt->bindParam(':l_name', $l_name, PDO::PARAM_STR);
		$stmt->bindParam(':user_email', $email, PDO::PARAM_STR);
		$stmt->bindParam(':bgcolor', $bgcolor, PDO::PARAM_STR);

		$stmt->execute();


header('Location: index.php');
die();

?>

