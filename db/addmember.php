<?php
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=FinalProject;port=8889', $user, $pass);

	if (filter_var(($_POST['memberemail']), FILTER_VALIDATE_EMAIL)){
		$membername = $_POST['membername'];
		$memberemail = $_POST['memberemail'];
		$memberpassword = $_POST['memberpassword'];

		$stmt = $dbh->prepare("INSERT INTO member (membername, memberemail, memberpassword) 
			VALUES ('$membername', '$memberemail', 'memberpassword')");
		$stmt->bindParam(':membername', $membername);
		$stmt->bindParam(':memberemail', $memberemail);
		$stmt->bindParam(':memberpassword', $memberpassword);
		$stmt->execute();
		header('Location: signup.html');
		die();
	}else{echo "<h2>Sorry this is not a valid email.</h2>";}
?>