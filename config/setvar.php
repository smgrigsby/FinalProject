<!-- Project: Baby Grigsby
Author: Sarah Meister Grigsby 
Date: January 2015 -->

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
	$_SESSION['user_type']=$row['user_type'];
	$_SESSION['avatar']=$row['avatar'];
	$_SESSION['nickname']=$row['nick_name'];
	$_SESSION['address']=$row['address'];
	};

?>