<?php

$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);

$stmt=$dbh->prepare("SELECT * FROM users WHERE user_name = :id");
$stmt->bindValue(':id', $_SESSION['user_name'],  PDO::PARAM_INT);

$stmt->execute();
$result=$stmt->fetchall(PDO::FETCH_ASSOC);
foreach($result as $row){
	$_SESSION['blog_id']=$row['blog_id'];
	$_SESSION['f_name']=$row['f_name'];
	$_SESSION['l_name']=$row['l_name'];
	$_SESSION['bgcolor']=$row['bgcolor'];
	}

?>